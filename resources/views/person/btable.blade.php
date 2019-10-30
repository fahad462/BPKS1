<!DOCTYPE html>
<html lang="en')}}">
<head>
    <title>Table V03</title>
    <meta charset="UTF-8')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1')}}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('/images1/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/vendor1/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/vendor1/animate/animate.css')}}'">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/vendor1/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/vendor1/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/css1/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css1/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="table100 ver2 m-b-110">
        <table data-vertable="ver2">
            <thead>
            <tr class="row100 head">
                <th class="column100 column1" data-column="column1">Name</th>
                <th class="column100 column2" data-column="column2">Voter ID</th>
                <th class="column100 column3" data-column="column3">Birth Certificate</th>
                <th class="column100 column4" data-column="column4">Sex</th>
                <th class="column100 column5" data-column="column5">Religion</th>
                <th class="column100 column6" data-column="column6">Marital Status</th>
                <th class="column100 column7" data-column="column7">City</th>
                <th class="column100 column8" data-column="column8">Road</th>
                <th class="column100 column9" data-column="column9">Post Office</th>
                <th class="column100 column10" data-column="column10">House No</th>
                <th class="column100 column11" colspan="2" data-column="column11">Action</th>
            </tr>
            </thead>
            @php ($id=1)
            @foreach ($users as $user)
                <tbody>
                <tr class="row100">
                    <td class="column100 column1" data-column="column1"><p id={{strval($id).'vote'}}>{{$user->name}} </p>
                    </td>
                    <td class="column100 column2" data-column="column2"><p id={{strval($id).'vote'}}>
                            {{$user->voter_id}} </p></td>
                    <td class="column100 column3" data-column="column3"><p id={{strval($id).'birth'}}>
                            {{$user->birth_cer}} </p></td>
                    <td class="column100 column4" data-column="column4"><p id={{strval($id).'sex'}}>{{$user->sex}} </p></td>
                    <td class="column100 column5" data-column="column5"><p id={{strval($id).'rel'}}>{{$user->religion}} </p>
                    </td>
                    <td class="column100 column6" data-column="column6"><p id={{strval($id).'mar'}}>
                            {{$user->marital_status}} </p></td>
                    <td class="column100 column7" data-column="column7"><p id={{strval($id).'city'}}>{{$user->city}} </p>
                    </td>
                    <td class="column100 column8" data-column="column8"><p id={{strval($id).'road'}}>{{$user->road}} </p>
                    </td>
                    <td class="column100 column9" data-column="column9"><p id={{strval($id).'post'}}>
                            {{$user->post_office}} </p></td>
                    <td class="column100 column10" data-column="column10"><p id={{strval($id).'house'}}>
                            {{$user->house_no}} </p></td>
                    <td class="column100 column11" data-column="column11"><a target="_blank" href={{
                    '/admin/show/disabled_people/'.$user->birth_cer }} id={{$id.'s'}}>Show</a></td>
                </tr>
                </tbody>
                @php ($id=$id+1)
            @endforeach
        </table>
    </div>
</div>
</div>
</div>


<!--===============================================================================================-->
<script src="{{asset('/vendor1/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('/vendor1/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('/vendor1/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('/vendor1/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('/js1/main.js')}}"></script>

</body>
</html>