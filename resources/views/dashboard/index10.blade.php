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
                    <li><a href="{{ route('dashboard.index.donor')  }}">Register A Donor</a></li>
                @endif
                @if($level==1)
                    <li><a href="{{ route('dashboard.query.builder') }}">Query Builder</a></li>
                @endif
                @if($level==1 || $level==5)
                    <li><a href="{{ route('dashboard.index.office')  }}">Register A Office</a></li>
                @endif
                @if($level==1)
                    <li class="active"><a href="{{ route('admin.search')  }}">Search</a></li>
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
                            <h4>Search</h4>
                        </div>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <form target="_blank" method="POST" action="{{ route('search.index1')  }}">
                                @csrf {{-- start database --}}

                                <div class="form-group row mb-0">
                                    <label
                                            class="col-md-4 col-form-label text-md-right">{{ __('Search People') }}</label>
                                    <div class="col-md-4 offset-md-4">
                                        <input placeholder="Enter A String" type="text" name="allsearch" required>
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                    </div>
                                </div>
                            </form>
                        </div>


                        <div class="card-body">
                            <form target="_blank" method="POST" action=" {{ route('search.index2')  }} ">
                                @csrf
                                <div class="form-group row">
                                    <label for="fileChooser"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Search People By Name And Gender') }}</label>
                                    <div class="col-md-4">
                                        <input placeholder="Enter Name" type="text" name="pname" required>
                                        <select class="select-dropdown" name="gender" required>
                                            <option value="male">male</option>
                                            <option value="female">female</option>
                                            <option value="other">other</option>
                                            {{--<option value="audi">Audi</option>--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-4 offset-md-4">
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            {{ __('Search') }}
                                        </button>
                                        <button type="reset" class="btn btn-sm btn-primary">
                                            {{ __('Reset') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <form method="POST" action=" {{ route('search.index3')  }} " target="_blank">
                                @csrf {{-- start database --}}

                                <div class="form-group row">
                                    <label
                                            class="col-md-4 col-form-label text-md-right">{{ __('Search People By Disability') }}</label>
                                    <div class="col-md-4">
                                        <input placeholder="Enter Disability" type="text" name="disabili" required>

                                    </div>
                                </div>


                                <div class="form-group row mb-0">

                                    <div class="col-md-4 offset-md-4">

                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            {{ __('Search') }}
                                        </button>
                                        <button type="reset" class="btn btn-sm btn-primary">
                                            {{ __('Reset') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <form method="POST" action=" {{ route('search.index4')  }}  " target="_blank">
                                @csrf {{-- start database --}}

                                <div class="form-group row">
                                    <label for="fileChooser"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Search People By Education') }}</label>
                                </div>
                                <div class="form-group row mb-0">

                                    <div class="col-md-4 offset-md-4">

                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <select class="select-dropdown" name="dispeople">
                                            <option value="{{ __('Illiterate Disabled People') }}">{{ __('Illiterate Disabled People') }}</option>
                                            <option value="{{ __('Disabled People Studying In School') }}">{{ __('Disabled People Studying In School') }}</option>
                                            <option value="{{ __('Disabled People Studying In College') }}">{{ __('Disabled People Studying In College') }}</option>
                                            <option value="{{ __('Disabled People Studying In University') }}">{{ __('Disabled People Studying In University') }}</option>
                                        </select>
                                        <button class="btn btn-sm btn-primary" id="edulala">Search</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <form method="POST" action=" {{ route('search.index5')  }} " target="_blank">
                                @csrf {{-- start database --}}

                                <div class="form-group row mb-0">
                                    <label
                                            class="col-md-4 col-form-label text-md-right">{{ __('Search People By Area') }}</label>
                                    <div class="col-md-4 offset-md-4">
                                        <input placeholder="Enter Area" type="text" name="area" required>
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6 offset-md-4">

                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="card-body">
                            <form method="POST" action=" {{ route('search.index6')  }} " target="_blank">
                                @csrf {{-- start database --}}

                                <div class="form-group row mb-0">
                                    <label
                                            class="col-md-4 col-form-label text-md-right">{{ __('Search People By Office') }}</label>
                                    <div class="col-md-4 offset-md-4">
                                        <input placeholder="Enter Office" type="text" name="area1" required>
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6 offset-md-4">

                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="card-body">
                            <form method="POST" action=" {{ route('search.index7')  }} " target="_blank">
                                @csrf {{-- start database --}}

                                <div class="form-group row mb-0">
                                    <label
                                            class="col-md-4 col-form-label text-md-right">{{ __('Search Employees Of BPKS') }}</label>
                                    <div class="col-md-4 offset-md-4">
                                        <input placeholder="Enter Name" type="text" name="empname" required>
                                        <select class="select-dropdown" name="slt" required>
                                            <option value="disabled">Employee With Disability</option>
                                            <option value="notdisabled">Regular Employee</option>
                                        </select>
                                        <input placeholder="Minimum Salary" type="number" required name="slry">
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                    </div>
                                </div>
                            </form>
                        </div>


                        <div class="card-body">
                            <form method="POST" action=" {{ route('search.index8')  }} " target="_blank">
                                @csrf {{-- start database --}}

                                <div class="form-group row mb-0">
                                    <label
                                            class="col-md-4 col-form-label text-md-right">{{ __('Search Families with Disabled People') }}</label>
                                    <div class="col-md-4 offset-md-4">
                                        <input placeholder="Yearly Income Less Than" type="number" name="yearylin">
                                        <input placeholder="Earning Person Less Than" type="number" name="earning4">
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="card-body">
                            <form method="POST" action=" {{ route('search.index9')  }} " target="_blank">
                                @csrf {{-- start database --}}
                                <div class="form-group row mb-0">
                                    <label
                                            class="col-md-4 col-form-label text-md-right">{{ __('Search People With Monthly Income') }}</label>
                                    <div class="col-md-4 offset-md-4">
                                        <input placeholder="Monthly Income Less Than" type="number" name="monthly"
                                               required>
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
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




