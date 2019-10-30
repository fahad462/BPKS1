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
    <div class="flash-message">
        @foreach (['success'] as $msg)
            @if(Session::has('alert-' . $msg))
                <script>
                    alert("Data Added Succesfully");
                </script>
            @endif
        @endforeach
    </div>
    <div class="flash-message">
        @foreach (['failure'] as $msg)
            @if(Session::has('alert-' . $msg))
                <script>
                    echo('{{ Session::get('alert-failure')->id()  }}');
                </script>
            @endif
        @endforeach
    </div>
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
                    <li><a href="{{ route('dashboard.index.donor')  }}">Register A Donor</a></li>
                @endif
                @if($level==1)
                    <li><a href="{{ route('dashboard.query.builder') }}">Query Builder</a></li>
                @endif
                @if($level==1 || $level==5)
                    <li class="active"><a href="{{ route('dashboard.index.office')  }}">Register A Office</a></li>
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
            <section id="about" class="section wow fadeInUpBig">
                <div class="container-section">
                    <div class="row">
                        <div class="section-title">
                            <h4>Register A Office</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3>{{ __('Register a Office') }}</h3>
                        </div>
                        <div class="card-body">
                            {{-- action="{{ route('person.store') }}" --}}
                            <form method="POST" action="{{ route('dashboard.index.office.post') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="nof-emp"
                                           class="col-md-4 col-form-label text-md-right">{{ __('No Of Employee') }}</label>

                                    <div class="col-md-6">
                                        <input id="nof-emp" type="text"
                                               class="form-control{{ $errors->has('nof-emp') ? ' is-invalid' : '' }}"
                                               name="nof-emp" value="{{ old('nof-emp') }}"
                                               required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nof-emp"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Properties') }}</label>

                                    <div class="col-md-6">
                                        <input id="property" type="text"
                                               class="form-control{{ $errors->has('property') ? ' is-invalid' : '' }}"
                                               name="property" value="{{ old('property') }}"
                                               required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office-add"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Office Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="office-add" type="text"
                                               class="form-control{{ $errors->has('office-add') ? ' is-invalid' : '' }}"
                                               name="office-add" value="{{ old('office-add') }}"
                                               required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office-type"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Office Type') }}</label>

                                    <div class="col-md-6">
                                        <input id="office-type" type="text"
                                               class="form-control{{ $errors->has('office-type') ? ' is-invalid' : '' }}"
                                               name="office-type" value="{{ old('office-type') }}" required
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