<!DOCTYPE html>
<html>

<head>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <meta name="author" content="Fahad Hasan">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}"/>
    <link type="text/css" rel="stylesheet" media="all"
          href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i">
    <link type="text/css" rel="stylesheet" media="all"
          href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700,800">
    <link type="text/css" rel="stylesheet" media="all"
          href="{{asset('employee/font/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('employeecss/animate.css')}}">
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('employee/css/materialize.min.css')}}">
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('employee/css/magnific-popup.css')}}">
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('employee/css/owl.carousel.css')}}">
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('employee/css/owl.theme.css')}}">
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('employee/css/owl.transitions.css')}}">
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('employee/style.css')}}">
    <link id="tile-colorscheme-css" type="text/css" rel="stylesheet" media="all"
          href="{{asset('employee/css/color-1.css')}}">
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('employee/css/responsive.css')}}">
    <script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>
</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-wrapper active">
            <div class="spinner-layer">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="main-nav hidden hero-height">
    <div class="menu-close waves-effect waves-light"><span class="fa fa-times"></span></div>
    <ul>
        <li><a href="#0" class="animatescroll-link" onclick="$('html').animatescroll();">Home</a></li>
        <li><a href="#0" class="service-section-nav animatescroll-link"
               onclick="$('#service-section').animatescroll();">Service</a></li>
        <li><a href="#0" class="skill-section-nav animatescroll-link" onclick="$('#skill-section').animatescroll();">Skill</a>
        </li>
        <li><a href="#0" class="education-section-nav animatescroll-link"
               onclick="$('#education-section').animatescroll();">Education</a></li>
        <li><a href="#0" class="experience-section-nav animatescroll-link"
               onclick="$('#experience-section').animatescroll();">Experience</a></li>
        <li><a href="#0" class="portfolio-section-nav animatescroll-link"
               onclick="$('#portfolio-section').animatescroll();">Portfolio</a></li>
        <li><a href="#0" class="reference-section-nav animatescroll-link"
               onclick="$('#reference-section').animatescroll();">Reference</a></li>
        <li><a href="#0" class="client-section-nav animatescroll-link" onclick="$('#client-section').animatescroll();">Client</a>
        </li>
        <li><a href="#0" class="blog-section-nav animatescroll-link"
               onclick="$('#blog-section').animatescroll();">Blog</a></li>
        <li><a href="#0" class="pricing-section-nav animatescroll-link"
               onclick="$('#pricing-section').animatescroll();">Pricing</a></li>
        <li><a href="#0" class="contact-section-nav animatescroll-link"
               onclick="$('#contact-section').animatescroll();">Contact</a></li>
    </ul>
</nav>

<div class="site-header top-section top-section-home image-bg parallax-section" data-image-bg="img/bg/bg-1.jpg">
    <div class="overlay-section"></div>
</div>

<section id="about-section" class="about-section">
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col s12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <div class="col s12 w-block shadow-bg pd-0">
                        <div class="col m5 s12 about-img parallax-layer al-center pd-50">
                            @foreach($imageloc as $image)
                                <div class="about-img-content image-bg shadow-bg layer" data-depth="0.1"
                                     data-image-bg="{{__('/uploads/person/').$image->image_loc}}">
                                </div>
                            @endforeach
                            @foreach($names as $name)
                                <div class="about-name">{{  $name->name }}</div>
                            @endforeach
                            @if($id==1)
                                <div class="about-title">Admin</div>
                            @else
                                <div class="about-title">Employee</div>
                            @endif

                        </div>
                        <div class="col m7 s12 about-data-wrapper pd-50">
                            <div class="about-desc pd-0">
                                <div class="about-section-title">About Yourself</div>
                                <div class="about-data">
                                    <p>
                                    </p>
                                    @foreach($person as $tuple)
                                        <div><span>Address</span>{{  $tuple->address }}</div>
                                        <div><span>Religion</span>{{  $tuple->religion }}</div>
                                        <div><span>Birth Certificate</span>{{  $tuple->birth_cer }}</div>
                                        <div><span>Sex</span>{{  $tuple->sex }}</div>
                                        <div><span>Voter Id</span>{{  $tuple->voter_id }}</div>
                                        <div><span>Email</span>{{ $email }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="about-social col s12 pd-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="service-section" class="service-section">
    <div class="container">
        <div class="row">
            <div class="col s12 section-title">
                <h2>Your Current Job Information</h2>
            </div>

            <div class="col s12 masonry pd-0 mgt-20">

                <div class="table-responsive table-responsive-lg">
                    @php ( $id=1 )
                    <table border="1" class="table table-dark"
                           style="width:100%">
                        <thead>
                        <th>Your Employee ID</th>
                        <th>Current Salary</th>
                        <th>Joining Date</th>
                        <th>Your Salary Is Transported To The Bank Account</th>
                        </thead>
                        @foreach($person as $tuple)
                            <td>{{$tuple->employee_id}}</td>
                            <td>{{$tuple->salaryy}}</td>
                            <td>{{$tuple->joining_date}}</td>
                            <td>{{$tuple->bank_acc_no}}</td>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col s12 back-to-top-wrapper">
                <a class="btn-circle  waves-effect back-to-top tooltipped animatescroll-link wow zoomIn"
                   data-wow-duration="0.7s" data-wow-delay="0.3s" data-wow-offset="0" data-position="top"
                   data-delay="50" data-tooltip="Go To Top" onclick="$('html').animatescroll();" href="#0">
                    <span class="fa fa-angle-up"></span>
                </a>
                <div class="copyright-text">
                    &copy; All rights Reserved. BPKS
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{asset('employee/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('employee/js/animatescroll.js')}}"></script>
<script type="text/javascript" src="{{asset('employee/js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('employee/js/device.min.js')}}"></script>
<script type="text/javascript" src="{{asset('employee/js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('employee/js/jquery.parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('employee/js/imagesloaded.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('employee/js/isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('employee/js/magnific-popup.js')}}"></script>
<script type="text/javascript" src="{{asset('employee/js/masonry.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('employee/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('employee/js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('employee/js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('employee/js/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('employee/js/custom.js')}}"></script>
</body>
</html>
