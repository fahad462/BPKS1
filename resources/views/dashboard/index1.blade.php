<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}">

    <!-- SEO
      ================================================== -->
    <title>Admin Dashboard Register a Disabled People</title>
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

            </script>
        @endif
    @endforeach
    <script>
        @if($error!="")
        alert("{{  $error }}");
        @endif
    </script>
</div>
<div class="flash-message">
    @foreach (['failure'] as $msg)
        @if(Session::has('alert-' . $msg))
            <script>
                alert("failed");
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

    $(document).ready(function () {
        $("#hbirth-cer").change(function () {
            var a = document.getElementById('hbirth-cer').value;
            // alert(a);
            // alert('please wait until checking has been done');
            $.post('/admin/check/exists/hbirth/cer', {
                    "_token": "{{ csrf_token() }}",
                    hbirth_cer: a
                }
            ).done(function (response) {
                if (response == "ok") {
                }
                else {
                    alert("Birth Certificate for Helping Hand Already Exists");
                    document.getElementById('hbirth-cer').value = "";
                }
            }).fail(function () {
                alert("error");
            });
        });
    });

    $(document).ready(function () {
        $("#registration-no").change(function () {
            var a = document.getElementById('registration-no').value;
            // alert(a);
            // alert('please wait until checking has been done');
            $.post('/admin/check/exists/registration/no', {
                    "_token": "{{ csrf_token() }}",
                    registration_no: a
                }
            ).done(function (response) {
                if (response == "ok") {
                }
                else {
                    alert("This registation number cannot be inserted");
                    document.getElementById('registration-no').value = "";
                }
            }).fail(function () {
                alert("error");
            });
        });
    });
    $(document).ready(function () {

        $("#selector").change(function () {
            var a = document.getElementById('selector').value;
            // b = b + ' ' + a;
            var res = document.getElementById('disabilities').value.search(a);
            if (res != -1) return 0;
            document.getElementById('disabilities').value = document.getElementById('disabilities').value + ' ' + a;
            document.getElementById('selector').value = '';
        });
    });

    $(document).ready(function () {

        $("#selector1").change(function () {
            var a = document.getElementById('selector1').value;
            var res = document.getElementById('damaged-organs').value.search(a);
            if (res != -1) return 0;
            // b = b + ' ' + a;
            document.getElementById('damaged-organs').value = document.getElementById('damaged-organs').value + ' ' + a;
            document.getElementById('selector1').value = '';
        });
    });


</script>
<div class="col-md-1">
    {{--<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>--}}
    <script>
        function changess() {
            var e = document.getElementById("isemployee");
            var val = e.options[e.selectedIndex].value;
            var flag = true;
            //alert(val);
            if (val == 'No') {
                //alert(':)');
                document.getElementById("acc-no").disabled = true;
                document.getElementById("salary").disabled = true;
                document.getElementById("employee-id").disabled = true;
                document.getElementById("join-date").disabled = true;
                document.getElementById("designation").disabled = true;
                // document.getElementById("designation").disabled = true;
                document.getElementById("join-date").removeAttribute("required");
                document.getElementById("employee-id").removeAttribute("required");
                document.getElementById("salary").removeAttribute("required");
                document.getElementById("designation").removeAttribute("required");

                document.getElementById("monthly-income").required = true;
                document.getElementById("monthly-income").disabled = false;
                document.getElementById("jjoin-date").required = true;
                document.getElementById("jjoin-date").disabled = false;
                flag = false;
            }
            else {
                document.getElementById("acc-no").disabled = false;
                document.getElementById("occupation").readOnly = true
                document.getElementById("occupation").value = 'BPKS';
                // document.getElementById("occupation").readonly = true;
                document.getElementById("salary").disabled = false;
                document.getElementById("employee-id").disabled = false;
                document.getElementById("join-date").disabled = false;
                document.getElementById("designation").disabled = false;
                document.getElementById("join-date").required = true;
                document.getElementById("jjoin-date").required = false;
                document.getElementById("jjoin-date").disabled = true;
                document.getElementById("monthly-income").required = false;
                document.getElementById("monthly-income").disabled = true;
                document.getElementById("employee-id").required = true;
                document.getElementById("salary").required = true;
                document.getElementById("designation").required = true;
            }
        }

        function changes() {
            var e = document.getElementById("isdisabledpeople");
            var val = e.options[e.selectedIndex].value;
            var flag = true;
            //alert(val);
            if (val == 'No') {
                //alert(':)');
                document.getElementById("disabilities").disabled = true;
                document.getElementById("damaged-organs").disabled = true;
                document.getElementById("disabilities").removeAttribute("required");
                document.getElementById("damaged-organs").removeAttribute("required");
                flag = false;
            }
            else {
                document.getElementById("disabilities").disabled = false;
                document.getElementById("damaged-organs").disabled = false;
                document.getElementById("disabilities").required = true;
                document.getElementById("damaged-organs").required = true;
            }
        }

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
                if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {
                    if (fuData.files && fuData.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#blah').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(fuData.files[0]);
                    }
                }
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
                                        style="color:red;font-weight:bold">{{ __('Requests and Messages ').$sum }}</p>
                            </a>
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
                        <a href="{{route('admin.stat')}}">Statictics
                            People</a>
                    </li>
                @endif
                {{--@if()--}}
                @if($level==1 || $level==4)
                    <li class="active"><a href="{{route('dashboard.index.register.people')}}">Register a Disabled
                            People</a></li>
                @endif
                @if($level==1 || $level==4)
                    <li><a href="{{route('dashboard.index.register.employee')}}">Register a Employee</a></li>
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
            <section id="about" class="section  wow fadeInUpBig">
                <div class="container-section">
                    <div class="row">
                        <div class="section-title">
                            <h4>Register A Disabled People</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('Information of Person. Please Insert Required Fields') }}</h4>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" onsubmit='return validateForm()' method="POST"
                                  action="{{ route('admin.register.post')  }}">
                                @csrf

                                <div class="form-group row">
                                    <label style="color:crimson"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Person') }}</label>

                                    <div class="col-md-6">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fileChooser"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Upload a Photo of the Person') }}</label>

                                    <div class="col-md-4">
                                        <input onchange="return ValidateFileUpload();" id="fileChooser" type="file"
                                               class="form-control{{ $errors->has('fileChooser') ? ' is-invalid' : '' }}"
                                               name="fileChooser" value="{{ old('fileChooser') }}"
                                               required autofocus>
                                    </div>
                                    <div class="col-md-4">
                                        <img id="blah" style="width:100px;height:100px;" alt="Persons Image"/>
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

                                <div class="form-group row" id='dis1'>
                                    <label for="disabilities"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Disabilities') }}</label>
                                    <div class="col-md-6">
                                        <input id="disabilities" name="disabilities" type="text"
                                               class="form-control{{ $errors->has('disabilities') ? ' is-invalid' : ''}}"
                                               value="{{ old('disabilities') }}" required autofocus>
                                        <select id="selector" name="selector"
                                                class="form-control{{ $errors->has('selector') ? ' is-invalid' : '' }}"
                                                value="{{ old('selector') }}" autofocus>
                                            <option disabled selected value> -- select an option --</option>
                                            <option value="Autisam">Autism</option>
                                            <option value="Blind">Blind</option>
                                            <option value="Lame">Lame</option>
                                            <option value="Deaf">Deaf</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row" id="dis2">
                                    <label for="damaged-organs"
                                           class="col-md-4 col-form-label text-md-right">{{ __('damaged-organs') }}</label>

                                    <div class="col-md-6">
                                        <input id="damaged-organs" type=""
                                               class="form-control{{ $errors->has('damaged-organs') ? ' is-invalid' : '' }}"
                                               name="damaged-organs" value="{{ old('damaged-organs') }}" required
                                               autofocus>
                                        <select id="selector1" name="selector1"
                                                class="form-control{{ $errors->has('selector1') ? ' is-invalid' : '' }}"
                                                value="{{ old('selector1') }}" autofocus>
                                            <option disabled selected value> -- select an option --</option>
                                            <option value="Hand">Hand</option>
                                            <option value="Leg">Leg</option>
                                            <option value="Brain">Brain</option>
                                            <option value="Face">Face</option>
                                            <option value="Spine">Spine</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- employee --}}
                                <div class="form-group row">
                                    <label for="isemployee"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Is The Person Is a employee of BPKS?') }}</label>

                                    <div class="col-md-6">
                                        {{-- <input id="isdisabledpeople" type="checkbox" class="form-control{{ $errors->has('isdisabledpeople') ? ' is-invalid' : '' }}"
                                        name="isdisabledpeople" value="{{ old('isdisabledpeople') }}" autofocus> --}} {{-- {{__('Do
                You Have Personal Disability?')}}<br> --}}
                                        <select onchange="return changess()" id="isemployee" name="isemployee"
                                                class="form-control{{ $errors->has('isemployee') ? ' is-invalid' : '' }}"
                                                value="{{ old('isemployee') }}" required autofocus>
                                            <option disabled selected value> -- select an option --</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>

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
                                        <input id="childrens" type="number"
                                               class="form-control{{ $errors->has('childrens') ? ' is-invalid' : '' }}"
                                               name="childrens"
                                               value="{{ old('childrens') }}" autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label style="color:crimson"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Professional Information') }}</label>
                                    <div class="col-md-6">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="occupation"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Present Occupation') }}</label>
                                    <div class="col-md-6">
                                        <input id="occupation" type="text"
                                               class="form-control{{ $errors->has('occupation') ? ' is-invalid' : '' }}"
                                               name="occupation"
                                               value="{{ old('occupation') }}" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jjoin-date"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Joining Date') }}</label>
                                    <div class="col-md-6">
                                        <input id="jjoin-date" type="date"
                                               class="form-control{{ $errors->has('jjoin-date') ? ' is-invalid' : '' }}"
                                               name="jjoin-date"
                                               value="{{ old('jjoin-date') }}" required autofocus>
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
                                    <label for="monthly-income"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Monthly Income') }}</label>
                                    <div class="col-md-6">
                                        <input id="monthly-income" type="number"
                                               class="form-control{{ $errors->has('monthly-income') ? ' is-invalid' : '' }}"
                                               name="monthly-income" value="{{ old('monthly-income') }}" required
                                               autofocus>

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


                                <div class="form-group row">
                                    <label for="hbirth-cer"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Is Helping Hand Information Available?') }}</label>
                                    <div class="col-md-6">
                                        <select required class="select-dropdown form-control" id="helperselector"
                                                name="helperselector">
                                            <option selected disabled value>Please Select...</option>
                                            <option value="no">NO</option>
                                            <option value="yes">YES</option>
                                        </select>
                                    </div>
                                </div>

                                <script>
                                    $(document).ready(function () {
                                        $("#helperselector").change(function () {
                                            if (document.getElementById('helperselector').value == 'no') {
                                                document.getElementById('hbirth-cer').disabled = true;
                                                document.getElementById('helper-name').disabled = true;
                                                document.getElementById('helper-address').disabled = true;
                                                document.getElementById('genderr').disabled = true;
                                                document.getElementById("feedback").disabled = true;
                                                document.getElementById('types-of-help').disabled = true;
                                                document.getElementById('relation').disabled = true;
                                                document.getElementById('service-provided').disabled = true;
                                            }
                                            else {
                                                document.getElementById('hbirth-cer').disabled = false;
                                                document.getElementById('helper-name').disabled = false;
                                                document.getElementById('helper-address').disabled = false;
                                                document.getElementById('genderr').disabled = false;
                                                document.getElementById("feedback").disabled = false;
                                                document.getElementById('types-of-help').disabled = false;
                                                document.getElementById('relation').disabled = false;
                                                document.getElementById('service-provided').disabled = false;
                                            }
                                        });
                                    });
                                </script>

                                <div class="form-group row">
                                    <label style="color:crimson"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Information of Helping Hand') }}</label>
                                    <div class="col-md-6">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="hbirth-cer"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Birth Certificate for Helping Hand') }}</label>
                                    <div class="col-md-6">
                                        <input id="hbirth-cer" type="number"
                                               class="form-control{{ $errors->has('hbirth-cer') ? ' is-invalid' : '' }}"
                                               name="hbirth-cer"
                                               value="{{ old('achieve') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="helper-name"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Helper Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="helper-name" type="text"
                                               class="form-control{{ $errors->has('helper-name') ? ' is-invalid' : '' }}"
                                               name="helper-name"
                                               value="{{ old('achieve') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="helper-address"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Helper Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="helper-address" type="text" , value='Dhaka'
                                               class="form-control{{ $errors->has('helper-address') ? ' is-invalid' : '' }}"
                                               name="helper-address" value="{{ old('achieve') }}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="genderr"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                    <div class="col-md-6">
                                        <select id="genderr" name="genderr"
                                                class="form-control{{ $errors->has('genderr') ? ' is-invalid' : '' }}"
                                                value="{{ old('genderr') }}"
                                                required autofocus>
                                            <option disabled selected value> -- select an option --</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="relation"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Relation') }}</label>
                                    <div class="col-md-6">
                                        <input id="relation" type="text"
                                               class="form-control{{ $errors->has('relation') ? ' is-invalid' : '' }}"
                                               name="relation"
                                               value="{{ old('relation') }}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="feedback"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Feedback') }}</label>
                                    <div class="col-md-6">
                                        <input id="feedback" type="text"
                                               class="form-control{{ $errors->has('feedback') ? ' is-invalid' : '' }}"
                                               name="feedback"
                                               value="{{ old('feedback') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="types-of-help"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Type Of Help') }}</label>
                                    <div class="col-md-6">
                                        <input id="types-of-help" type="text"
                                               class="form-control{{ $errors->has('types-of-help') ? ' is-invalid' : '' }}"
                                               name="types-of-help"
                                               value="{{ old('types-of-help') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="service-provided"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Service Provided') }}</label>
                                    <div class="col-md-6">
                                        <input id="service-provided" type="text"
                                               class="form-control{{ $errors->has('service-provided') ? ' is-invalid' : '' }}"
                                               name="service-provided" value="{{ old('service-provided') }}" required
                                               autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="hbirth-cer"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Is The Person Is Illiterate?') }}</label>
                                    <div class="col-md-6">
                                        <select required class="select-dropdown form-control" id="eduselector"
                                                name="eduselector">
                                            <option selected disabled value>Please Select...</option>
                                            <option value="no">NO</option>
                                            <option value="yes">YES</option>
                                        </select>
                                    </div>
                                </div>

                                <script>
                                    $(document).ready(function () {
                                        $("#eduselector").change(function () {
                                            if (document.getElementById('eduselector').value == 'yes') {
                                                document.getElementById('school').disabled = true;
                                                document.getElementById('registration-no').disabled = true;
                                                document.getElementById('sresult').disabled = true;
                                                document.getElementById('spyear').disabled = true;
                                                document.getElementById('college').disabled = true;
                                                document.getElementById("cresult").disabled = true;
                                                document.getElementById('cpyear').disabled = true;
                                                document.getElementById('university').disabled = true;
                                                document.getElementById('uresult').disabled = true;
                                                document.getElementById('upyear').disabled = true;
                                            }
                                            else {
                                                document.getElementById('registration-no').disabled = false;
                                                document.getElementById('school').disabled = false;
                                                document.getElementById('sresult').disabled = false;
                                                document.getElementById('spyear').disabled = false;
                                                document.getElementById('college').disabled = false;
                                                document.getElementById("cresult").disabled = false;
                                                document.getElementById('cpyear').disabled = false;
                                                document.getElementById('university').disabled = false;
                                                document.getElementById('uresult').disabled = false;
                                                document.getElementById('upyear').disabled = false;
                                            }
                                        });
                                    });
                                </script>

                                <div class="form-group row">
                                    <label style="color:crimson"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Information of Education') }}</label>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="registration-no"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Regitration No') }}</label>

                                    <div class="col-md-6">
                                        <input id="registration-no" type="number"
                                               class="form-control{{ $errors->has('regitration-no') ? ' is-invalid' : '' }}"
                                               name="registration-no"
                                               value="{{ old('registration-no') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="school"
                                           class="col-md-4 col-form-label text-md-right">{{ __('School Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="school" type="text"
                                               class="form-control{{ $errors->has('school') ? ' is-invalid' : '' }}"
                                               name="school"
                                               value="{{ old('school') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="sresult"
                                           class="col-md-4 col-form-label text-md-right">{{ __('School Result') }}</label>

                                    <div class="col-md-6">
                                        <input id="sresult" type="text"
                                               class="form-control{{ $errors->has('sresult') ? ' is-invalid' : '' }}"
                                               name="sresult"
                                               value="{{ old('sresult') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="spyear"
                                           class="col-md-4 col-form-label text-md-right">{{ __('School Passing Year') }}</label>

                                    <div class="col-md-6">
                                        <input id="spyear" type="date"
                                               class="form-control{{ $errors->has('spyear') ? ' is-invalid' : '' }}"
                                               name="spyear"
                                               value="{{ old('spyear') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="college"
                                           class="col-md-4 col-form-label text-md-right">{{ __('College Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="college" type="text"
                                               class="form-control{{ $errors->has('college') ? ' is-invalid' : '' }}"
                                               name="college"
                                               value="{{ old('college') }}" autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="cresult"
                                           class="col-md-4 col-form-label text-md-right">{{ __('College Result') }}</label>

                                    <div class="col-md-6">
                                        <input id="cresult" type="text"
                                               class="form-control{{ $errors->has('cresult') ? ' is-invalid' : '' }}"
                                               name="cresult"
                                               value="{{ old('cresult') }}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cpyear"
                                           class="col-md-4 col-form-label text-md-right">{{ __('College Passing Year') }}</label>

                                    <div class="col-md-6">
                                        <input id="cpyear" type="date"
                                               class="form-control{{ $errors->has('cpyear') ? ' is-invalid' : '' }}"
                                               name="cpyear"
                                               value="{{ old('cpyear') }}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="university"
                                           class="col-md-4 col-form-label text-md-right">{{ __('University Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="university" type="text"
                                               class="form-control{{ $errors->has('university') ? ' is-invalid' : '' }}"
                                               name="university"
                                               value="{{ old('university') }}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="uresult"
                                           class="col-md-4 col-form-label text-md-right">{{ __('University Result') }}</label>

                                    <div class="col-md-6">
                                        <input id="uresult" type="text"
                                               class="form-control{{ $errors->has('uresult') ? ' is-invalid' : '' }}"
                                               name="uresult"
                                               value="{{ old('uresult') }}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="upyear"
                                           class="col-md-4 col-form-label text-md-right">{{ __('University Passing Year') }}</label>

                                    <div class="col-md-6">
                                        <input id="upyear" type="date"
                                               class="form-control{{ $errors->has('upyear') ? ' is-invalid' : '' }}"
                                               name="upyear"
                                               value="{{ old('upyear') }}" autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="medselector"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Is Medical TreatMent Information Available??') }}</label>
                                    <div class="col-md-6">
                                        <select required class="select-dropdown form-control" id="medselector"
                                                name="medselector">
                                            <option selected disabled value>Please Select...</option>
                                            <option value="no">NO</option>
                                            <option value="yes">YES</option>
                                        </select>
                                    </div>
                                </div>

                                <script>
                                    $(document).ready(function () {
                                        $("#medselector").change(function () {
                                            if (document.getElementById('medselector').value == 'no') {
                                                document.getElementById('hospital').disabled = true;
                                                document.getElementById('cost').disabled = true;
                                                document.getElementById('consultant').disabled = true;
                                                document.getElementById('treatment-start-date').disabled = true;
                                                document.getElementById('treatment-final-date').disabled = true;
                                                document.getElementById('Medichine').disabled = true;
                                                document.getElementById("ttype").disabled = true;
                                            }
                                            else {
                                                document.getElementById('hospital').disabled = false;
                                                document.getElementById('cost').disabled = false;
                                                document.getElementById('consultant').disabled = false;
                                                document.getElementById('treatment-start-date').disabled = false;
                                                document.getElementById('treatment-final-date').disabled = false;
                                                document.getElementById('Medichine').disabled = false;
                                                document.getElementById("ttype").disabled = false;
                                            }
                                        });
                                    });
                                </script>

                                <div class="form-group row">
                                    <label style="color:crimson"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Information of Medical Treatment') }}</label>
                                    <div class="col-md-6">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cost"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Cost') }}</label>

                                    <div class="col-md-6">
                                        <input id="cost" type="number"
                                               class="form-control{{ $errors->has('cost') ? ' is-invalid' : '' }}"
                                               name="cost"
                                               value="{{ old('cost') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="hospital"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Hospital Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="hospital" type="text"
                                               class="form-control{{ $errors->has('hospital') ? ' is-invalid' : '' }}"
                                               name="hospital"
                                               value="{{ old('hospital') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="consultant"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Consultant') }}</label>

                                    <div class="col-md-6">
                                        <input id="consultant" type="text"
                                               class="form-control{{ $errors->has('consultant') ? ' is-invalid' : '' }}"
                                               name="consultant"
                                               value="{{ old('consultant') }}" required autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="treatment-start-date"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Treatment start Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="treatment-start-date" type="date"
                                               class="form-control{{ $errors->has('treatment-start-date') ? ' is-invalid' : '' }}"
                                               name="treatment-start-date"
                                               value="{{ old('treatment-start-date') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="treatment-final-date"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Treatment Final Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="treatment-final-date" type="date"
                                               class="form-control{{ $errors->has('treatment-final-date') ? ' is-invalid' : '' }}"
                                               name="treatment-final-date"
                                               value="{{ old('treatment-final-date') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Medichine"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Medichine Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="Medichine" type="text"
                                               class="form-control{{ $errors->has('Medichine') ? ' is-invalid' : '' }}"
                                               name="Medichine"
                                               value="{{ old('Medichine') }}"
                                        >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ttype"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Treatment Type') }}</label>

                                    <div class="col-md-6">
                                        <input id="ttype" type="text"
                                               class="form-control{{ $errors->has('ttype') ? ' is-invalid' : '' }}"
                                               name="ttype"
                                               value="{{ old('ttype') }}" required autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label style="color:crimson"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Information of Health') }}</label>
                                    <div class="col-md-6">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="blood-group"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                                    <div class="col-md-6">
                                        <input id="blood-group" type="text"
                                               class="form-control{{ $errors->has('blood-group') ? ' is-invalid' : '' }}"
                                               name="blood-group"
                                               value="{{ old('blood-group') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="blood-pressure"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Blood Pressure') }}</label>

                                    <div class="col-md-6">
                                        <input id="blood-pressure" type="text"
                                               class="form-control{{ $errors->has('blood-pressure') ? ' is-invalid' : '' }}"
                                               name="blood-pressure"
                                               value="{{ old('blood-pressure') }}" required autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="heart-bit"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Heart Beat Rate') }}</label>

                                    <div class="col-md-6">
                                        <input id="heart-bit" type="number"
                                               class="form-control{{ $errors->has('heart-bit') ? ' is-invalid' : '' }}"
                                               name="heart-bit"
                                               value="{{ old('heart-bit') }}" required autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="drugs"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Drugs Taken') }}</label>

                                    <div class="col-md-6">
                                        <input id="drugs" type="text"
                                               class="form-control{{ $errors->has('drugs') ? ' is-invalid' : '' }}"
                                               name="drugs"
                                               value="{{ old('drugs') }}" autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="height"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Height') }}</label>

                                    <div class="col-md-6">
                                        <input id="height" type="number"
                                               class="form-control{{ $errors->has('height') ? ' is-invalid' : '' }}"
                                               name="height"
                                               value="{{ old('height') }}" required autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="weight"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Weight') }}</label>

                                    <div class="col-md-6">
                                        <input id="weight" type="number"
                                               class="form-control{{ $errors->has('weight') ? ' is-invalid' : '' }}"
                                               name="weight"
                                               value="{{ old('weight') }}" required autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="equipselector"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Is Equipment Information Available??') }}</label>
                                    <div class="col-md-6">
                                        <select required class="select-dropdown form-control" id="equipselector"
                                                name="equipselector">
                                            <option selected disabled value>Please Select...</option>
                                            <option value="no">NO</option>
                                            <option value="yes">YES</option>
                                        </select>
                                    </div>
                                </div>

                                <script>
                                    $(document).ready(function () {
                                        $("#equipselector").change(function () {
                                            if (document.getElementById('equipselector').value == 'no') {
                                                document.getElementById('issue_date').disabled = true;
                                                document.getElementById('ecost').disabled = true;
                                                document.getElementById('type').disabled = true;
                                                document.getElementById('condition').disabled = true;
                                                document.getElementById('efeedback').disabled = true;
                                                document.getElementById('need').disabled = true;
                                            }
                                            else {
                                                document.getElementById('issue_date').disabled = false;
                                                document.getElementById('ecost').disabled = false;
                                                document.getElementById('type').disabled = false;
                                                document.getElementById('condition').disabled = false;
                                                document.getElementById('efeedback').disabled = false;
                                                document.getElementById('need').disabled = false;
                                            }
                                        });
                                    });
                                </script>

                                <div class="form-group row">
                                    <label style="color:crimson"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Information of Equipment') }}</label>
                                    <div class="col-md-6">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="issue_date"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Equipment Issue Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="issue_date" type="date"
                                               class="form-control{{ $errors->has('issue_date') ? ' is-invalid' : '' }}"
                                               name="issue_date"
                                               value="{{ old('issue_date') }}" required autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="ecost"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Equipment Cost') }}</label>

                                    <div class="col-md-6">
                                        <input id="ecost" type="number"
                                               class="form-control{{ $errors->has('ecost') ? ' is-invalid' : '' }}"
                                               name="ecost"
                                               value="{{ old('ecost') }}" required autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="type"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Equipment Type') }}</label>

                                    <div class="col-md-6">
                                        <input id="type" type="text"
                                               class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}"
                                               name="type"
                                               value="{{ old('type') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="condition"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Present Condition') }}</label>

                                    <div class="col-md-6">
                                        <input id="condition" type="text"
                                               class="form-control{{ $errors->has('condition') ? ' is-invalid' : '' }}"
                                               name="condition"
                                               value="{{ old('condition') }}" required autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="efeedback"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Feedback') }}</label>

                                    <div class="col-md-6">
                                        <input id="efeedback" type="text"
                                               class="form-control{{ $errors->has('efeedback') ? ' is-invalid' : '' }}"
                                               name="efeedback"
                                               value="{{ old('efeedback') }}" required autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="need"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Further Need') }}</label>

                                    <div class="col-md-6">
                                        <input id="need" type="text"
                                               class="form-control{{ $errors->has('need') ? ' is-invalid' : '' }}"
                                               name="need"
                                               value="{{ old('need') }}" autofocus>
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
        <!-- END CONTENT  -->
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




