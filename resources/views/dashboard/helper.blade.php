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
<div class="container-fluid">
    <div class="row">
        <!-- START LEFT SIDE -->
        <div class="col-sm-3 col-md-2 sidebar">
            <div class="logo">
            </div>
            <ul class="nav nav-sidebar" id="navbar">
                <li><a href="{{route('dashboard.index')}}">Home <span class="sr-only">(current)</span></a></li>
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
                <li><a href="{{route('dashboard.index.register.people')}}">Register a Disabled People</a></li>
                <li><a href="{{route('dashboard.index.register.employee')}}">Register a Employee</a></li>
                <li><a href="{{route('dashboard.index.disabled.people')}}">People
                        With Disability</a></li>
                <li><a href="{{ route('dashboard.index.employees')  }}">Employees</a></li>
                <li><a href="{{ route('dashboard.index.training')  }}">Add Trainaing</a></li>
                <li><a href="{{ route('dashboard.index.donor')  }}">Register A Donor</a></li>
                <li class="active"><a href="{{ route('dashboard.query.builder') }}">Query Builder</a></li>
                <li><a href="{{ route('dashboard.index.office')  }}">Register A Office</a></li>
                <li><a href="{{ route('admin.search')  }}">Search</a></li>
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
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main scroll-page">
            <section id="about" class="section wow fadeInUpBig">
                <div class="container-section">
                    <div class="row">
                        <div class="section-title">
                            <h4>Admin Please Provide This Password To The Poeple You Just Registered</h4>
                        </div>
                    </div>
                    <div class="container">
                        <div class="info-icon hvr-trim"><i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="info-text">
                            <span>Password</span>
                            @if(($pass)==NULL)
                                {{__('Oops Unlucky!')}}
                            @else
                                {{ $pass->password  }}
                            @endif
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




