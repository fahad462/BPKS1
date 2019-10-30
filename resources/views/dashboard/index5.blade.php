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
<script>
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<div class="col-md-1">
    {{--<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>--}}
    <div class="flash-message">
        @foreach (['success'] as $msg)
            @if(Session::has('alert-' . $msg))
                <script>
                    alert("Donor Data Added Succesfully");
                </script>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->
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
                    <li class="active" ><a href="{{ route('dashboard.index.donor')  }}">Register A Donor</a></li>
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
        <div class="col-md-1">
            <script>

                $(document).ready(function () {
                    $("#check").change(function () {
                        var val = document.getElementById('check').value;
                        // var val = decision.options[decision.selectedIndex].value;
                        alert(val);
                        if (val == "People") {
                            document.getElementById('donor-name').disabled = false;
                            document.getElementById('passport').disabled = false;
                            // document.getElementById('donor-name').required=true;
                            document.getElementById('org-name').disabled = true;
                            document.getElementById('org-type').disabled = true;
                            document.getElementById('reg-no').disabled = true;
                            // document.getElementById("orgi").removeAttribute("required");
                            // document.getElementById("orgi1").removeAttribute("required");
                            // document.getElementById("orgi2").removeAttribute("required");
                        } else if (val == "Organisation") {
                            document.getElementById('org-name').disabled = false;
                            document.getElementById('org-type').disabled = false;
                            document.getElementById('reg-no').disabled = false;
                            document.getElementById('donor-name').disabled = true;
                            document.getElementById('passport').disabled = true;
                            // document.getElementById("orgi").required=true;
                            // document.getElementById("orgi1").required=true;
                            // document.getElementById("orgi2").required=true;
                            // document.getElementById("donor-name").removeAttribute("required");
                        }
                    });
                });

            </script>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main scroll-page">
            <section id="about" class="section wow fadeInUpBig">
                <div class="container-section">
                    <div class="row">
                        <div class="section-title">
                            <h4>Register A Donor</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3>{{ __('Register a Donor') }}</h3>
                        </div>
                        <div class="card-body">
                            {{-- action="{{ route('person.store') }}" --}}
                            <form method="POST" action="{{ route('admin.services.donor.post') }}">
                                @csrf

                                {{-- start database --}}


                                <div class="form-group row">
                                    <label for="check"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Is donor is a people or organization?') }}</label>

                                    <div class="col-md-6">
                                        <select id="check" name="check"
                                                class="form-control{{ $errors->has('check') ? ' is-invalid' : '' }}"
                                                value="{{ old('check') }}" required autofocus>
                                            <option disabled selected value>Select Donor Type...</option>
                                            <option value="People">People</option>
                                            <option value="Organisation">Organisation</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="transition-id"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Donation Transition ID') }}</label>

                                    <div class="col-md-6">
                                        <input id="transition-id" type="number"
                                               class="form-control{{ $errors->has('transition-id') ? ' is-invalid' : '' }}"
                                               name="transition-id" value="{{ old('transition-id') }}"
                                               required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="perspective"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Perspective of the Donor') }}</label>

                                    <div class="col-md-6">
                                        <input id="perspective" type="text"
                                               class="form-control{{ $errors->has('perspective') ? ' is-invalid' : '' }}"
                                               name="perspective" value="{{ old('perspective') }}"
                                               required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="donation-duration"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Donation Interval') }}</label>

                                    <div class="col-md-6">
                                        <input id="donation-duration" type="text"
                                               class="form-control{{ $errors->has('donation-duration') ? ' is-invalid' : '' }}"
                                               name="donation-duration" value="{{ old('donation-duration') }}"
                                               required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="postal-code"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Donor Postal Code') }}</label>

                                    <div class="col-md-6">
                                        <input id="postal-code" type="number"
                                               class="form-control{{ $errors->has('postal-code') ? ' is-invalid' : '' }}"
                                               name="postal-code" value="{{ old('postal-code') }}"
                                               autofocus>
                                    </div>
                                </div>


                                <div id="pupil" class="form-group row">
                                    <label for="donor-name"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Donor Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="donor-name" type="text"
                                               class="form-control{{ $errors->has('donor-name') ? ' is-invalid' : '' }}"
                                               name="donor-name" value="{{ old('donor-name') }}"
                                               required autofocus>
                                    </div>
                                </div>

                                <div id="pupil1" class="form-group row">
                                    <label for="passport"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Passport No') }}</label>
                                    <div class="col-md-6">
                                        <input id="passport" type="text"
                                               class="form-control{{ $errors->has('passport') ? ' is-invalid' : '' }}"
                                               name="passport" value="{{ old('passport') }}"
                                               autofocus>
                                    </div>
                                </div>

                                <div id="orgi" class="form-group row">
                                    <label for="org-name"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Organization Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="org-name" type="text"
                                               class="form-control{{ $errors->has('org-name') ? ' is-invalid' : '' }}"
                                               name="org-name"
                                               value="{{ old('org-name') }}" required autofocus>
                                    </div>
                                </div>

                                <div  id="orgi1" class="form-group row">
                                    <label for="org-type"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Organization Type') }}</label>

                                    <div class="col-md-6">
                                        <input id="org-type" type="text"
                                               class="form-control{{ $errors->has('org-type') ? ' is-invalid' : '' }}"
                                               name="org-type"
                                               value="{{ old('org-type') }}" required autofocus>
                                    </div>
                                </div>

                                <div id="orgi2" class="form-group row">
                                    <label for="reg-no"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Govt Registration No of the organization') }}</label>

                                    <div class="col-md-6">
                                        <input id="reg-no" type="number"
                                               class="form-control{{ $errors->has('reg-no') ? ' is-invalid' : '' }}"
                                               name="reg-no"
                                               value="{{ old('reg-no') }}" required autofocus>
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
<script src="{{asset('assets/js/switcher.js')}}"></script>

</div>
</body>

</html>




