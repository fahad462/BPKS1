<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        $email = Auth::user()->email;
        $data = DB::select('select r.id from role r where r.name  = ?', [$email]);
        $id = '';
        foreach ($data as $row) {
            $id = $row->id;
        }
        return view('first', ['level' => $id]);
    }
    $id = '';
    return view('first', ['level' => $id]);
});
Route::get('/login', function () {
    if (Auth::check()) {
        $email = Auth::user()->email;
        $data = DB::select('select r.id from role r where r.name  = ?', [$email]);
        $id = '';
        foreach ($data as $row) {
            $id = $row->id;
        }
        if ($id == 1 || $id == 4 || $id == 5 || $id == 6 || $id == 7)
            return redirect()->route('admin.dashboard');
        else if ($id == 3)
            return redirect()->route('employee.profile');
    }
    return redirect()->route('admin.login');
})->name('login');

//Route::get('/public/dashboard', function () {
//    if (Auth::user()->email == "fahadhasan462@gmail.com") {
//        return "you are an admin why are you going to personal dashboard -_-";
//    } else {
//        return 'kaj kore :P';
//    }
//})->middleware('auth')->name('public.dashboard');

Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('admin.logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('dashboard', 'HomeController@index')->name('admin.dashboard');

Route::get('admin/register', [
    'middleware' => ['auth'],
    'uses' => function () {
        return view('person.register');
    },
])->name('admin.register.get');

Route::post('admin/register/post/all', 'personController@postAction')->middleware('auth')->name('admin.register.post');

//select COLUMN_NAME from ALL_TAB_COLUMNS where TABLE_NAME='PERSON';

Route::get('admin/services/training', function () {
    if (Auth::user()->email == "fahadhasan462@gmail.com") {
        return view('training.training');
    } else {
        return "Access Not Granted";
    }

})->middleware('auth')->name('admin.services.training');

Route::post('admin/services/training/post', 'trainingControl@add')->name('admin.services.training.post')->middleware('auth');

Route::get('admin/services/donor', function () {
    if (Auth::user()->email == "fahadhasan462@gmail.com") {
        return view('doners.doner');
    } else {
        return "Access Not Granted";
    }

})->middleware('auth')->name('admin.services.donor');

Route::post('admin/services/donor/post', 'fundController@add')->middleware('auth')->name('admin.services.donor.post');

Route::get('admin/disable/people', function () {
//    $users = DB::table('person')
//        ->join('getPersonName','person.birth_cer','=','getPersonName.b_cer')
//        ->join('disable_people','disable_people.birth_cer','=','person.birth_cer')
//        ->orderByRaw('birth_cer asc')
//        ->get();
    $users = DB::select('select concat(concat(concat(first_name,\' \'),concat(middle_name,\' \')),last_name) as name,voter_id,sex,religion,BIRTH_CER,city,road,post_office,MARITAL_STATUS,HOUSE_NO,ADDRESS,DISABILITY_ID,DAMAGED_ORGAN from person join pname using (birth_cer) join DISABLE_PEOPLE using (BIRTH_CER)', []);
    if (Auth::user()->email == "fahadhasan462@gmail.com") {
        return view('person.table', ['users' => $users]);
    } else {
        return "Access Not Granted";
    }

})->middleware('auth')->name('admin.show.disabled_people');

Route::get('/admin/employee', function () {

    if (Auth::check()) {
        $email = Auth::user()->email;
        $data = DB::select('select r.id from role r where r.name  = ?', [$email]);
        $id = '';
        foreach ($data as $row) {
            $id = $row->id;
        }
        $data = DB::select('select * from employeeview', []);
        return view('employee.employee', ['employees' => $data]);
    }
    return 'Access Denied';
})->middleware('auth')->name('admin.show.employee');


Route::get('admin/disabled_people', function () {
    return view('person.table');
})->middleware('auth')->name('table.main');


Route::post('admin/disabled_people/delete', 'personController@delete')->middleware('auth')->name('admin.disabled_people.action.delete');

Route::get('admin/show/disabled_people/{id}', 'personController@disabled_people_show')->middleware('auth')->name('admin.disabled_people.show');

/// query builder
Route::get('admin/extra/query/builder', function () {
    if (Auth::user()->email != "fahadhasan462@gmail.com") {
        return "Persmission Denied";
    }
    $table = [];
    $error = "";
    return view('query.query', ['table' => $table, "error" => $error]);
})->middleware('auth')->name('admin.extra.query.builder');
Route::post('admin/extra/query/builder/post', 'queryController@execute')->middleware('auth')->name('admin.extra.query.builder.post');

/// checkers
Route::post('/admin/check/exists/birth/cer', 'personController@checker')->middleware('auth')->name('admin.checker');
Route::post('/admin/check/exists/email', 'personController@email_checker')->middleware('auth')->name('admin.check.exists.email');
Route::post('/admin/check/exists/hbirth/cer', 'personController@help_checker')->middleware('auth')->name('admin.check.exists.hbirth.cer');
Route::post('/admin/check/exists/registration/no', 'personController@reg_checker')->middleware('auth')->name('admin.check.exists.registration.no');
Route::post('/admin/check/exists/employee/id', 'personController@emp_checker')->middleware('auth')->name('admin.check.exists.employee.id');


/// map and offices
Route::get('/admin/extra/office/map', 'mapOfiiceController@get')->middleware('auth')->name('admin.extra.office.map');


/// updaters
Route::post('/admin/disabled_people/add/training', 'updateController@addtraining')->middleware('auth')->name('add.training');
Route::post('/admin/disabled_people/update/equipment', 'updateController@updateequipment')->middleware('auth')->name('update.equipment');
Route::post('/admin/disabled_people/update/health', 'updateController@updatehealth')->middleware('auth')->name('update.health');
Route::post('/admin/disabled_people/update/medical/history', 'updateController@updateMedhis')->middleware('auth')->name('update.med.his');
Route::post('/admin/disabled_people/update/prof/info', 'updateController@updateprofinfo')->middleware('auth')->name('update.prof.info');
Route::post('/admin/disabled_people/update/education/info', 'updateController@updateedu')->middleware('auth')->name('update.edu.info');
Route::post('/admin/disabled_people/update/family/info', 'updateController@updatefamily')->middleware('auth')->name('update.family.info');
Route::post('/admin/disabled_people/update/person/info', 'updateController@updateperson')->middleware('auth')->name('update.person.info');


//actions
Route::get('/admin/employee/actions', 'actionController@get')->middleware('auth')->name('admin.actions');


//search
Route::get('admin/search', 'queryController@getsearch')->middleware('auth')->name('admin.search');
Route::get('/first', function () {
    return view('first');
})->name('home.first');


Route::get('employee/profile', function () {
    if (Auth::check()) {
        $email = Auth::user()->email;
        $data = DB::select('select r.id from role r where r.name  = ?', [$email]);
        $id = '';
        foreach ($data as $row) {
            $id = $row->id;
        }
        if ($id != 1 && $id != 2 && $id != 4 && $id != 5 && $id != 6 && $id != 7) return 'Access Denied';
        $bcer = DB::select('select person.birth_cer from REGISTRATION join PERSON on PERSON.BIRTH_CER = REGISTRATION.BIRTH_CER where REGISTRATION.EMAIL = ?', [$email]);
        $key = '';
        foreach ($bcer as $row) {
            $key = $row->birth_cer;
        }
        //var_dump($key);
        $person = DB::select('select * from person join employee using (birth_cer) where birth_cer  = ?', [$key]);

        $family = DB::select('select * from family join person_family using (family_id) join person using (birth_cer) where birth_cer = ?', [$key]);


        $imageloc = DB::select('select * from imageloc join employee using (birth_cer) where birth_cer = ? ', [$key]);

        $names = DB::table('getpersonname')
            ->where('b_cer', '=', $key)
            ->get();
        return view('employee.profile', ['id' => $id, 'person' => $person, 'email' => $email, 'birth_cer' => $key, 'family' => $family, 'imageloc' => $imageloc, 'names' => $names]);
    }
    return 'Login First';
})->middleware('auth')->name('employee.profile');


Route::get('person/profile', 'personController@disabled_people_profile')->middleware('auth')->name('person.profile');


Route::post('/public/request/taka', 'updateController@requesta')->middleware('auth')->name('public.request.taka');

Route::post('/public/request/equipment', 'updateController@requeste')->middleware('auth')->name('public.request.equip');


Route::get('/admin/dashboard/index', function () {
    if (Auth::check()) {
        $email = Auth::user()->email;
        $data = DB::select('select r.id from role r where r.name  = ?', [$email]);
        $id = '';
        foreach ($data as $row) {
            $id = $row->id;
        }
//        var_dump($id);
        if ($id != 1 && $id != 4 && $id != 5 && $id != 6 && $id != 7) return 'access restricted';
        $bcer = DB::select('select person.birth_cer from REGISTRATION join PERSON on PERSON.BIRTH_CER = REGISTRATION.BIRTH_CER where REGISTRATION.EMAIL = ?', [$email]);
        $key = '';
        foreach ($bcer as $row) {
            $key = $row->birth_cer;
        }
        $imageloc = DB::select('select * from imageloc join employee using (birth_cer) where birth_cer = ? ', [$key]);
        $eunread = DB::select('select count(er.BIRTH_CER)+count(ar.BIRTH_CER) as total from person p join erequest er on (p.birth_cer=er.birth_cer) join arequest ar on (ar.birth_cer=p.birth_cer) where ar.isread = \'no\' or er.isread = \'no\'');

        $names = DB::table('getpersonname')
            ->where('b_cer', '=', $key)
            ->get();
//        $total = (string)$total;
        return view('dashboard.index', ['level' => $id, 'imageloc' => $imageloc, 'names' => $names, 'total' => $eunread]);
    }
})->middleware('auth')->name('dashboard.index');

Route::get('admin/dashboard/register/people', 'actionController@index')->middleware('auth')->name('dashboard.index.register.people');
Route::get('admin/dashboard/disabled/people', 'actionController@index1')->middleware('auth')->name('dashboard.index.disabled.people');
Route::get('admin/dashboard/employees', 'actionController@index2')->middleware('auth')->name('dashboard.index.employees');
Route::get('admin/dashboard/training', 'actionController@index3')->middleware('auth')->name('dashboard.index.training');
Route::get('admin/dashboard/donor', 'actionController@index4')->middleware('auth')->name('dashboard.index.donor');
Route::get('admin/dashboard/query/builder', 'actionController@index5')->middleware('auth')->name('dashboard.query.builder');
Route::get('admin/dashboard/office', 'actionController@index6')->middleware('auth')->name('dashboard.index.office');
Route::post('admin/dashboard/office/post', 'actionController@indexpost6')->middleware('auth')->name('dashboard.index.office.post');
Route::get('admin/dashboard/register/employee', 'actionController@index7')->middleware('auth')->name('dashboard.index.register.employee');
Route::post('admin/dashboard/register/employee/post', 'actionController@indexpost7')->middleware('auth')->name('dashboard.index.register.employee.post');
Route::get('admin/dashboard/messages', 'actionController@index8')->middleware('auth')->name('dashboard.messages');
Route::get('admin/dashboard/game', function () {
    if (Auth::check()) {
        $email = Auth::user()->email;
        $data = DB::select('select r.id from role r where r.name  = ?', [$email]);
        $id = '';
        foreach ($data as $row) {
            $id = $row->id;
        }
        if ($id != 1 && $id != 4 && $id != 5 && $id != 6 && $id != 7) return 'access restricted';
        $bcer = DB::select('select person.birth_cer from REGISTRATION join PERSON on PERSON.BIRTH_CER = REGISTRATION.BIRTH_CER where REGISTRATION.EMAIL = ?', [$email]);
        $key = '';
        foreach ($bcer as $row) {
            $key = $row->birth_cer;
        }
        $imageloc = DB::select('select * from imageloc join employee using (birth_cer) where birth_cer = ? ', [$key]);

        $names = DB::table('getpersonname')
            ->where('b_cer', '=', $key)
            ->get();
        return view('dashboard.game', ['level' => $id, 'imageloc' => $imageloc, 'names' => $names]);
    }
})->middleware('auth')->name('dashboard.index.game');

Route::post('/admin/request/ereq', 'actionController@helper')->middleware('auth')->name('req.equip');
Route::post('/admin/request/areq', 'actionController@helper1')->middleware('auth')->name('req.aquip');
Route::post('/admin/accept/equipment/{birth_cer}', 'actionController@eacc')->middleware('auth')->name('accept.equipment');
Route::post('/admin/accept/money/{birth_cer}', 'actionController@macc')->middleware('auth')->name('accept.money');

Route::get('admin/dashboard/search', function () {
    if (Auth::check()) {
        $email = Auth::user()->email;
        $data = DB::select('select r.id from role r where r.name  = ?', [$email]);
        $id = '';
        foreach ($data as $row) {
            $id = $row->id;
        }
        if ($id != 1 && $id != 4 && $id != 5 && $id != 6 && $id != 7) return 'access restricted';
        $eunread = DB::select('select count(er.BIRTH_CER)+count(ar.BIRTH_CER) as total from person p join erequest er on (p.birth_cer=er.birth_cer) join arequest ar on (ar.birth_cer=p.birth_cer) where ar.isread = \'no\' and er.isread = \'no\'');
        return view('dashboard.index10', ['total' => $eunread, 'level' => $id]);
    }
})->middleware('auth')->name('admin.search');

Route::post('/search/index1', 'searchcontroller@index1')->middleware('auth')->name('search.index1');
Route::post('/search/index2', 'searchcontroller@index2')->middleware('auth')->name('search.index2');
Route::post('/search/index3', 'searchcontroller@index3')->middleware('auth')->name('search.index3');
Route::post('/search/index4', 'searchcontroller@index4')->middleware('auth')->name('search.index4');
Route::post('/search/index5', 'searchcontroller@index5')->middleware('auth')->name('search.index5');
Route::post('/search/index6', 'searchcontroller@index6')->middleware('auth')->name('search.index6');
Route::post('/search/index7', 'searchcontroller@index7')->middleware('auth')->name('search.index7');
Route::post('/search/index8', 'searchcontroller@index8')->middleware('auth')->name('search.index8');
Route::post('/search/index9', 'searchcontroller@index9')->middleware('auth')->name('search.index9');


Route::get('/admin/person/password', 'personController@grabTempPassAndDestroy')->middleware('auth')->name('person.register.helper');

Route::get('/admin/dashboard/stat', 'actionController@stat')->middleware('auth')->name('admin.stat');

Route::post('/admin/disabled_people/insert/medical/history', 'actionController@showinsertmed')->middleware('auth')->name('insert.medical.history');

//Route::get('admin/profile/employee/{bcer}','admindashboard@get')->middleware('auth')->name('employee.edit');

Route::get('admin/dashboard/roles', 'admindashboard@get')->middleware('auth')->name('roles');

Route::post('admin/roles/change', 'admindashboard@gett')->middleware('auth');