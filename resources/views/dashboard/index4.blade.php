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
                    alert("Person Data Added Succesfully");
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
                <li ><a href="{{route('dashboard.index')}}">Home <span
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
                    <li class="active" ><a href="{{ route('dashboard.index.training')  }}">Add Trainaing</a></li>
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
            <section id="about" class="section wow fadeInUpBig">
                <div class="container-section">
                    <div class="row">
                        <div class="section-title">
                            <h4>Add a Training</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3>{{ __('Register a new Training') }}</h3>
                        </div>
                        <!-- <a href="/admin/register">lala</a> -->
                        <div class="card-body">
                            {{-- action="{{ route('person.store') }}" --}}
                            <form method="POST" action="{{ route('admin.services.training.post')  }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="training-id"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Training Id') }}</label>
                                    <div class="col-md-6">
                                        <input id="training-id" type="number"
                                               class="form-control{{ $errors->has('training-id') ? ' is-invalid' : '' }}"
                                               name="training-id" value="{{ old('training-id') }}"
                                               required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="trainer-name"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Trainer Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="trainer-name" type="text"
                                               class="form-control{{ $errors->has('trainer-name') ? ' is-invalid' : '' }}"
                                               name="trainer-name"
                                               value="{{ old('trainer-name') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cccost"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Cost') }}</label>

                                    <div class="col-md-6">
                                        <input id="cccost" type="number"
                                               class="form-control{{ $errors->has('cccost') ? ' is-invalid' : '' }}"
                                               name="cccost"
                                               value="{{ old('cccost') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tadd"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Traiing Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="tadd" type="text"
                                               class="form-control{{ $errors->has('tadd') ? 'is-invalid' : '' }}"
                                               name="tadd" value="{{ old('tadd') }}"
                                               required autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="contact"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Contact No') }}</label>
                                    <div class="col-md-6">
                                        <input id="contact" type="number"
                                               class="form-control{{ $errors->has('contact') ? 'is-invalid' : '' }}"
                                               name="contact" value="{{ old('contact') }}"
                                               required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="feedback"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Feedback') }}</label>

                                    <div class="col-md-6">
                                        <input id="feedback" type="text"
                                               class="form-control{{ $errors->has('feedback') ? ' is-invalid' : '' }}"
                                               name="feedback"
                                               value="{{ old('feedback') }}" autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="types"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Type Of the Training') }}</label>

                                    <div class="col-md-6">
                                        <input id="types" type="text"
                                               class="form-control{{ $errors->has('types') ? ' is-invalid' : '' }}"
                                               name="types" value="{{ old('types') }}"
                                               required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="start-date"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Training Start Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="start-date" type="date"
                                               class="form-control{{ $errors->has('start-date') ? ' is-invalid' : '' }}"
                                               name="start-date"
                                               value="{{ old('start-date') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="end-date"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Training End Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="end-date" type="date"
                                               class="form-control{{ $errors->has('end-date') ? ' is-invalid' : '' }}"
                                               name="end-date"
                                               value="{{ old('end-date') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="capa"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Training Capacity') }}</label>

                                    <div class="col-md-6">
                                        <input minvalue=1 id="capa" type="number"
                                               class="form-control{{ $errors->has('capa') ? ' is-invalid' : '' }}"
                                               name="capa"
                                               value="{{ old('capa') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alloc"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Currently Allocated') }}</label>

                                    <div class="col-md-6">
                                        <input minvalue=0 id="alloc" type="number"
                                               class="form-control{{ $errors->has('alloc') ? ' is-invalid' : '' }}"
                                               name="alloc"
                                               value="{{ old('alloc') }}" required autofocus>
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




