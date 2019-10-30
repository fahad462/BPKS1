<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}">

    <!-- SEO
      ================================================== -->
    <title>Admin Dashboard Register a Employee</title>
    <meta name="author" content="fahad hasan"/>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/colors/main.css')}}" id="colors">
</head>

<body>
<div id="loading">
    <img src="{{asset("assets/images/loading.gif")}}" alt="loading">
</div>
<div class="responsive-menu"><a href="#"> <b>BPKS</b></a> <a id="menu-icon" class="but" href="#"><span
                class="ti-menu"><img src="{{ asset('/assets/images/menu.png') }}" alt="image"></span> </a></div>
<br>
<br>
<br>
<div class="flash-message">
    @foreach (['success'] as $msg)
        @if(Session::has('alert-' . $msg))
            <script>
                alert("Data Added Succesfully");
            </script>
        @endif
    @endforeach
    <script>
        @if($error!='')
        alert("{{  $error }}");
        @endif
    </script>
</div>
<div class="flash-message">
    @foreach (['failure'] as $msg)
        @if(Session::has('alert-' . $msg))
            <script>
                alert("Error");
            </script>
        @endif
    @endforeach
</div>
<script>
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#birth-cer").change(function () {
            var a = document.getElementById('birth-cer').value;
            // alert(a);
            // alert('please wait until checking has been done');
            $.post('/admin/check/exists/birth/cer', {
                    "_token": "{{ csrf_token() }}",
                    birth_cer: a
                }
            ).done(function (response) {
                if (response == "ok") {
                }
                else {
                    alert("A Person With This Birth Certificate Already Exists");
                    document.getElementById('birth-cer').value = "";
                }
            }).fail(function () {
                alert("error");
            });
        });

    });

    $(document).ready(function () {
        $("#employee-id").change(function () {
            var a = document.getElementById('employee-id').value;
            // alert(a);
            // alert('please wait until checking has been done');
            $.post('/admin/check/exists/employee/id', {
                    "_token": "{{ csrf_token() }}",
                    employee_id: a
                }
            ).done(function (response) {
                if (response == "ok") {
                }
                else {
                    alert("Information Of this Employee already exists");
                    document.getElementById('employee-id').value = "";
                }
            }).fail(function () {
                alert("error");
            });
        });

    });

    $(document).ready(function () {
        $("#email").change(function () {
            var a = document.getElementById('email').value;
            // alert(a);
            // alert('please wait until checking has been done');
            $.post('/admin/check/exists/email', {
                    "_token": "{{ csrf_token() }}",
                    email: a
                }
            ).done(function (response) {
                if (response == "ok") {
                }
                else {
                    alert("A Person With This Email Already Exists");
                    document.getElementById('email').value = "";
                }
            }).fail(function () {
                alert("error");
            });
        });
    });
</script>
<div class="col-md-1">
    <script>
        function validateForm() {
            /*
            document.getElementById("dis1").hidden=false;
            document.getElementById("dis2").hidden=false;
            document.getElementById("em1").hidden=false;
            document.getElementById("em2").hidden=false;
            document.getElementById("em3").hidden=false;
            document.getElementById("em4").hidden=false;
            */
            return true;
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function ValidateFileUpload() {
            var fuData = document.getElementById('fileChooser');
            var FileUploadPath = fuData.value;
            if (FileUploadPath == '') {
                alert("Please upload an image");
                return false;

            } else {
                var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

                if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                    if (fuData.files && fuData.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#blah').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(fuData.files[0]);
                    }

                }

//The file upload is NOT an image
                else {
                    alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP.");
                    document.getElementById('fileChooser').value = '';
                    return false;
                }
            }
            return true;
        }

        function checkIfExists(vari) {
        }


    </script>
</div>
<div class="container-fluid">
    <div class="row">
        <!-- START LEFT SIDE -->
        <div class="col-sm-3 col-md-2 sidebar">
            <div class="logo">
            </div>
            <ul class="nav nav-sidebar" id="navbar">
                <li><a href="{{route('dashboard.index')}}">Home <span
                                class="sr-only">(current)</span></a></li>
                @php($sum=0)
                @foreach($total as $item=>$item_data)
                    @foreach($item_data as $tuple)
                        @php($sum=$tuple)
                    @endforeach
                @endforeach
                @if($level==1 || $level==5)
                <li>
                    @if($sum!=0)
                        <a href="{{ route('dashboard.messages')  }}"><p
                                    style="color:red;font-weight:bold">{{ __('Requests and Messages ').$sum }}</p></a>
                    @else
                        <a href="{{ route('dashboard.messages')  }}">Requests and Messages </a>
                    @endif
                </li>
                @endif
                @if($level==1)
                    <li>
                        <a href="{{route('roles')}}">Roles</a>
                    </li>
                @endif
                @if($level==1 || $level==5 || $level==4)
                    <li>
                        <a href="{{route('admin.stat')}}">Statictics</a>
                    </li>
                @endif
                {{--@if()--}}
                @if($level==1 || $level==4)
                    <li><a href="{{route('dashboard.index.register.people')}}">Register a Disabled People</a></li>
                @endif
                @if($level==1 || $level==4)
                    <li class="active"><a href="{{route('dashboard.index.register.employee')}}">Register a Employee</a>
                    </li>
                @endif
                @if($level==1 || $level==4)
                    <li><a href="{{route('dashboard.index.disabled.people')}}">People With Disability</a></li>
                @endif
                @if($level==1 || $level==4)
                    <li><a href="{{ route('dashboard.index.employees')  }}">Employees</a></li>
                @endif
                @if($level==1 || $level==7)
                    <li><a href="{{ route('dashboard.index.training')  }}">Add Trainaing</a></li>
                @endif
                @if($level==1 || $level==6)
                    <li><a href="{{ route('dashboard.index.donor')  }}">Register A Donor</a></li>
                @endif
                @if($level==1)
                    <li><a href="{{ route('dashboard.query.builder') }}">Query Builder</a></li>
                @endif
                @if($level==1 || $level==5)
                    <li><a href="{{ route('dashboard.index.office')  }}">Register A Office</a></li>
                @endif
                @if($level==1)
                    <li><a href="{{ route('admin.search')  }}">Search</a></li>
                @endif
                {{--<li><a href="{{ route('dashboard.index.game')  }}">Lets Survive With A WheelChair</a></li>--}}
                <form id="logout-form" action="http://localhost:8000/admin/logout" method="POST"
                      style="display: none;">  @csrf </form>
                <li><a href="#" onclick="document.getElementById('logout-form').submit();">Logout</a></li>
            </ul>
            <div class="copyright">
                <p>
                    ALL RIGHTS RESERVED. BPKS
                </p>
            </div>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main scroll-page">


            <!-- START ABOUT SECTION-->
            <section id="about" class="section wow fadeInUpBig">
                <div class="container-section">
                    <div class="row">
                        <div class="section-title">
                            <h4>Register An Employee</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3>{{ __('Information of Employee. Please Insert Required Fields') }}</h3>
                        </div>
                        <!-- <a href="/admin/register">lala</a> -->
                        <div class="card-body">
                            {{-- action="{{ route('person.store') }}" --}}
                            <form enctype="multipart/form-data" onsubmit='return validateForm()' method="POST"
                                  action="{{ route('dashboard.index.register.employee.post')  }}">
                                @csrf {{-- start database --}}

                                <div class="form-group row">
                                    <label style="color:crimson"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Person') }}</label>

                                    <div class="col-md-6">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fileChooser"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Upload a Photo of the Employee') }}</label>

                                    <div class="col-md-4">
                                        <input onchange="return ValidateFileUpload();" id="fileChooser" type="file"
                                               class="form-control{{ $errors->has('fileChooser') ? ' is-invalid' : '' }}"
                                               name="fileChooser" value="{{ old('fileChooser') }}"
                                               required autofocus>
                                    </div>
                                    <div class="col-md-4">
                                        <img id="blah" style="width:100px;height:100px;" alt="Employees Image"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" value="{{ old('email') }}"
                                               required autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="fname"
                                           class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="fname" type="text"
                                               class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}"
                                               name="fname" value="{{ old('fname') }}"
                                               required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mname"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="mname" type="text"
                                               class="form-control{{ $errors->has('mname') ? ' is-invalid' : '' }}"
                                               name="mname" value="{{ old('mname') }}"
                                               autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="lname" type="text"
                                               class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}"
                                               name="lname" value="{{ old('lname') }}"
                                               required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="voter-id"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Voter ID') }}</label>

                                    <div class="col-md-6">
                                        <input id="voter-id" type="number"
                                               class="form-control{{ $errors->has('voter-id') ? ' is-invalid' : '' }}"
                                               name="voter-id"
                                               value="{{ old('voter-id') }}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="birth-cer"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Bith Certificate NO') }}</label>

                                    <div class="col-md-6">
                                        <input id="birth-cer" type="number"
                                               class="form-control{{ $errors->has('birth-cer') ? ' is-invalid' : '' }}"
                                               name="birth-cer"
                                               value="{{ old('birth-cer') }}" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gender"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                    <div class="col-md-6">
                                        {{-- <input id="gender" type="" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                        name="gender" value="{{ old('gender') }}" required autofocus> --}}
                                        <select id="gender" name="gender"
                                                class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                                value="{{ old('gender') }}"
                                                required autofocus>
                                            <option disabled selected value> -- select an option --</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>


                                </div>
                                <div class="form-group row">
                                    <label for="religion"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}</label>

                                    <div class="col-md-6">
                                        <select id="religion" name="religion"
                                                class="form-control{{ $errors->has('religion') ? ' is-invalid' : '' }}"
                                                value="{{ old('religion') }}"
                                                autofocus>
                                            <option disabled selected value> -- select an option --</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Hinduism">Hinduism</option>
                                            <option value="Christianity">Christianity</option>
                                            <option value="Judaism">Judaism</option>
                                            <option value="Buddhism">Buddhism</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="marital-status"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Marital Status') }}</label>

                                    <div class="col-md-6">
                                        <select id="marital-status" name="marital-status"
                                                class="form-control{{ $errors->has('marital-status') ? ' is-invalid' : '' }}"
                                                value="{{ old('marital-status') }}" required autofocus>
                                            <option disabled selected value> -- select an option --</option>
                                            <option value="Married">Married</option>
                                            <option value="UnMarried">Unmarried</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="city"
                                           class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>


                                    <div class="col-md-6">
                                        <input id="city" type="text"
                                               class="form-control{{ $errors->has('city') ? 'is-invalid' : '' }}"
                                               name="city" value="{{ old('city') }}"
                                               required autofocus>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="post-office"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Post Office') }}</label>

                                    <div class="col-md-6">
                                        <input id="post-office" type="text"
                                               class="form-control{{ $errors->has('post-office') ? ' is-invalid' : '' }}"
                                               name="post-office"
                                               value="{{ old('post-office') }}" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="road-no"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Road NO') }}</label>

                                    <div class="col-md-6">
                                        <input id="road-no" type="number"
                                               class="form-control{{ $errors->has('road-no') ? ' is-invalid' : '' }}"
                                               name="road-no" value="{{ old('road-no') }}"
                                               autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="house-no"
                                           class="col-md-4 col-form-label text-md-right">{{ __('House NO') }}</label>

                                    <div class="col-md-6">
                                        <input id="house-no" type="number"
                                               class="form-control{{ $errors->has('house-no') ? ' is-invalid' : '' }}"
                                               name="house-no"
                                               value="{{ old('house-no') }}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label style="color:crimson"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Family Info of The Person') }}</label>

                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="earning-person"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Total Earning Person') }}</label>

                                    <div class="col-md-6">
                                        <input id="earning-person" type="number"
                                               class="form-control{{ $errors->has('earning-person') ? ' is-invalid' : '' }}"
                                               name="earning-person"
                                               value="{{ old('earning-person') }}" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="yearly"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Yearly Income') }}</label>

                                    <div class="col-md-6">
                                        <input id="yearly" type="number"
                                               class="form-control{{ $errors->has('yearly') ? ' is-invalid' : '' }}"
                                               name="yearly" value="{{ old('yearly') }}"
                                               required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="field"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Primary Field of Earning') }}</label>

                                    <div class="col-md-6">
                                        <input id="field" type="text"
                                               class="form-control{{ $errors->has('field') ? ' is-invalid' : '' }}"
                                               name="field" value="{{ old('field') }}"
                                               required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="father"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Fathers Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="father" type="text"
                                               class="form-control{{ $errors->has('father') ? ' is-invalid' : '' }}"
                                               name="father" value="{{ old('father') }}" required
                                               autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mother"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Mothers Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="mother" type="text"
                                               class="form-control{{ $errors->has('mother') ? ' is-invalid' : '' }}"
                                               name="mother" value="{{ old('mother') }}" required
                                               autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="males"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Total Male') }}</label>
                                    <div class="col-md-6">
                                        {{-- <input id="union" type="" class="form-control{{ $errors->has('birth-cer') ? ' is-invalid' : '' }}"
                                        name="birth-cer" value="{{ old('union') }}" required autofocus> --}}
                                        <input id="males" type="number"
                                               class="form-control{{ $errors->has('males') ? ' is-invalid' : '' }}"
                                               name="males" value="{{ old('males') }}"
                                               required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="females"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Total female') }}</label>
                                    <div class="col-md-6">
                                        {{-- <input id="union" type="" class="form-control{{ $errors->has('birth-cer') ? ' is-invalid' : '' }}"
                                        name="birth-cer" value="{{ old('union') }}" required autofocus> --}}
                                        <input id="females" type="number"
                                               class="form-control{{ $errors->has('females') ? ' is-invalid' : '' }}"
                                               name="females" value="{{ old('females') }}"
                                               required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="spouse"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Spouse or Husband Name') }}</label>
                                    <div class="col-md-6">
                                        {{-- <input id="union" type="" class="form-control{{ $errors->has('birth-cer') ? ' is-invalid' : '' }}"
                                        name="birth-cer" value="{{ old('union') }}" required autofocus> --}}
                                        <input id="spouse" type="text"
                                               class="form-control{{ $errors->has('spouse') ? ' is-invalid' : '' }}"
                                               name="spouse" value="{{ old('spouse') }}"
                                               autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="childrens"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Total Children') }}</label>
                                    <div class="col-md-6">
                                        {{-- <input id="union" type="" class="form-control{{ $errors->has('birth-cer') ? ' is-invalid' : '' }}"
                                        name="birth-cer" value="{{ old('union') }}" required autofocus> --}}
                                        <input id="childrens" type="number"
                                               class="form-control{{ $errors->has('childrens') ? ' is-invalid' : '' }}"
                                               name="childrens"
                                               value="{{ old('childrens') }}" autofocus>
                                    </div>
                                </div>


                                <div id='em1' class="form-group row">
                                    <label for="designation"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>

                                    <div class="col-md-6">
                                        <select id="designation"
                                               class="form-control"
                                               name="designation" required autofocus>
                                            <option disabled selected value>Please Select an Option..</option>
                                            <option value="2">Regular</option>
                                            <option value="4">Data Entry Operator</option>
                                            <option value="5">Office Manager</option>
                                            <option value="6">Donation Sector Manager</option>
                                            <option value="7">Training Manager</option>
                                        </select>
                                    </div>
                                </div>

                                <div id='em1' class="form-group row">
                                    <label for="employee-id"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Employee ID') }}</label>

                                    <div class="col-md-6">
                                        <input id="employee-id" type="number"
                                               class="form-control{{ $errors->has('employee-id') ? ' is-invalid' : '' }}"
                                               name="employee-id"
                                               value="{{ old('employee-id') }}" required autofocus>
                                    </div>
                                </div>
                                <div id='em2' class="form-group row">
                                    <label for="salary"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Salary') }}</label>

                                    <div class="col-md-6">
                                        <input id="salary" type="number"
                                               class="form-control{{ $errors->has('salary') ? ' is-invalid' : '' }}"
                                               name="salary" value="{{ old('salary') }}"
                                               required autofocus>
                                    </div>
                                </div>
                                <div id='em3' class="form-group row">
                                    <label for="join-date"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Joining Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="join-date" type="date"
                                               class="form-control{{ $errors->has('join-date') ? ' is-invalid' : '' }}"
                                               name="join-date"
                                               value="{{ old('join-date') }}" required autofocus>
                                    </div>
                                </div>

                                <div id='em4' class="form-group row">
                                    <label for="acc-no"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Bank Account No') }}</label>

                                    <div class="col-md-6">
                                        <input id="acc-no" type="number"
                                               class="form-control{{ $errors->has('acc-no') ? ' is-invalid' : '' }}"
                                               name="acc-no" value="{{ old('acc-no') }}"
                                               autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dependencies"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Dependencies On Him') }}</label>
                                    <div class="col-md-6">
                                        <input id="dependencies" type="number" min=0
                                               class="form-control{{ $errors->has('dependencies') ? ' is-invalid' : '' }}"
                                               name="dependencies" value="{{ old('dependencies') }}" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="achieve"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Achievement') }}</label>
                                    <div class="col-md-6">
                                        <input id="achieve" type="text"
                                               class="form-control{{ $errors->has('achieve') ? ' is-invalid' : '' }}"
                                               name="achieve" value="{{ old('achieve') }}"
                                               autofocus>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">

                                    <div class="col-md-4 offset-md-4">

                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-lg btn-primary">
                                            {{ __('Save') }}
                                        </button>
                                        <button type="reset" class="btn btn-lg btn-primary">
                                            {{ __('Reset') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<a href="#" class="goto-top"><span class="fa fa-arrow-up"></span></a>
<!-- Javascript Files
    ================================================== -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/typed.js')}}"></script>
<script src="{{asset('assets/js/jquery.easy-pie-chart.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/fancybox/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('assets/js/jquery.isotope.js')}}"></script>
<script src="{{asset('assets/js/materialize.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkdsK7PWcojsO-o_q2tmFOLBfPGL8k8Vg"></script>
<script type="text/javascript" src="{{asset('assets/js/gmap3.js')}}"></script>
<script type="text/javascript">
</script>
<script src="{{asset('assets/js/script.js')}}"></script>

<!-- Style Switcher
================================================== -->
<script src="{{asset('assets/js/switcher.js')}}"></script>

</div>
</body>

</html>




