<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Home</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">

<div class="preloader">
    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
    </div>
</div>
<style>
    .popup {
        margin: 70px auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        width: 30%;
        position: relative;
        transition: all 5s ease-in-out;
    }

    .popup h2 {
        margin-top: 0;
        color: #333;
        font-family: Tahoma, Arial, sans-serif;
    }

    .popup .close {
        position: absolute;
        top: 20px;
        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }

    .popup .close:hover {
        color: #06D85F;
    }

    .popup .content {
        max-height: 30%;
        overflow: auto;
    }

    @media screen and (max-width: 700px) {
        .box {
            width: 70%;
        }

        .popup {
            width: 70%;
        }
    }
</style>
@if(Auth::check() && $level == 1)

@endif
<!--Mainmenu-area-->
<div class="mainmenu-area" data-spy="affix" data-offset-top="100">
    <div class="container">
        <!--Logo-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand logo">
                <h2>BPKS</h2>
            </a>
        </div>
        <!--Logo/-->
        <nav class="collapse navbar-collapse" id="primary-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#home-page">Home</a></li>
                <li><a href="#service-page">Service</a></li>
                <li><a href="#team-page">Team</a></li>
                <li><a href="#contact-page">Contact</a></li>
                @if(Auth::check())
                    @if($level==1)
                        <li><a href=" {{route('admin.dashboard')}} ">Admin Panel</a></li>
                    @elseif($level==4)
                        <li><a href=" {{route('admin.dashboard')}} ">Employee Panel</a></li>
                    @elseif($level==5)
                        <li><a href=" {{route('admin.dashboard')}} ">Employee Panel</a></li>
                    @elseif($level==6)
                        <li><a href=" {{route('admin.dashboard')}} ">Employee Panel</a></li>
                    @elseif($level==7)
                        <li><a href=" {{route('admin.dashboard')}} ">Employee Panel</a></li>
                    @endif
                    @if($level==2 || $level==1 || $level==5 || $level==6 || $level==4 || $level==7)
                        <li><a href=" {{route('employee.profile')}} ">Your Profile</a></li>
                    @elseif($level==3)
                        <li><a href=" {{route('person.profile')}} ">Your Profile</a></li>
                    @endif
                    <form id="logout-form" action="http://localhost:8000/admin/logout" method="POST"
                          style="display: none;">  @csrf </form>
                    <li><a href="#" onclick="document.getElementById('logout-form').submit();">Logout</a></li>
                @else
                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>

<header class="header-area overlay full-height relative v-center" id="home-page">
    <div class="absolute anlge-bg"></div>
    <div class="container">
        <div class="row v-center">
            <div class="col-xs-12 col-md-7 header-text">
                <h2>An Organisation Of And By The Disabled People</h2>
                <p>Bangladesh ProtibandhiKallyanSomity (BPKS) came into being in 1985 as an initiative of Mr. Abdus
                    Sattar Dulal, the current chief executive officer (Executive Director)of BPKS. It is registered with
                    Bangladesh Government as a voluntary non-profit making disabled people organization. BPKS works
                    nationwide with a unique approach called PSID (Persons with Disabilities Self-Initiative to
                    Development) introduced in 1996. PSID is a consumer-driven, rights-based, holistic approach that
                    empowers persons with all types of disabilities to take responsibility for the initiation,
                    participation and ownership of the development process.</p>
                <a href="https://www.youtube.com/watch?v=csaY-G8W6Zc" target="_blank" class="button white">Watch
                    video</a>
            </div>
            <div class="hidden-xs hidden-sm col-md-5 text-right">
                <div class="screen-box screen-slider">
                    <div class="item">
                        <img src="images/screen-1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/screen-2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/screen-3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/screen-4.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/screen-5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="gray-bg section-padding" id="service-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="box">
                    <div class="box-icon">
                        <img src="images/service-icon-1.png" alt="">
                    </div>
                    <h4>VISION</h4>
                    <p>BPKS envisions a nation in which all disabled people live with freedom and dignity in a
                        barrier-free family and society, and are able to contribute equally to their own and universal
                        development.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="box">
                    <div class="box-icon">
                        <img src="images/service-icon-2.png" alt="">
                    </div>
                    <h4>MISSION</h4>
                    <p>BPKS is a non-governmental and voluntary disabled people’s organization, committed to directly
                        promote disabled people’s capacities and universal rights, organizations and policies and
                        practices..</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="box">
                    <div class="box-icon">
                        <img src="images/service-icon-3.png" alt="">
                    </div>
                    <h4>GOAL</h4>
                    <p>To safeguard the principles and rights of disabled people and increase their access to
                        opportunities and participation through establishing and strengthening disabled people’s
                        organizations.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-padding gray-bg" id="team-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div class="page-title">
                    <h2>CSE-302 Database Group</h2>
                    <p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-team">
                    <div class="team-photo">
                        <img src="images/vaia.png" alt="">
                    </div>
                    <h4>Maj. Arafat</h4>
                    <h6>201614006</h6>
                    <ul class="social-menu">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-team">
                    <div class="team-photo">
                        <img src="images/shanto.png" alt="">
                    </div>
                    <h4>Md. Shalahuddin</h4>
                    <h6>201614013</h6>
                    <ul class="social-menu">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-team">
                    <div class="team-photo">
                        <img src="images/nuru.png" alt="">
                    </div>
                    <h4>Noor Mohammed Asif</h4>
                    <h6>201614017</h6>
                    <ul class="social-menu">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-team">
                    <div class="team-photo">
                        <img src="images/imtiaz.png" alt="">
                    </div>
                    <h4>Imtiaz Ahmed</h4>
                    <h6>201614030</h6>
                    <ul class="social-menu">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-team">
                    <div class="team-photo">
                        <img src="images/umair.png" alt="">
                    </div>
                    <h4>Umair Sifat</h4>
                    <h6>201614015</h6>
                    <ul class="social-menu">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-team">
                    <div class="team-photo">
                        <img src="images/zim.png" alt="">
                    </div>
                    <h4>Fardin Momtaj</h4>
                    <h6>201614012</h6>
                    <ul class="social-menu">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer-area relative sky-bg" id="contact-page">
    <div class="absolute footer-bg"></div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Contact with us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <address class="side-icon-boxes">
                        <div class="side-icon-box">
                            <div class="side-icon">
                                <img src="images/location-arrow.png" alt="">
                            </div>
                            <p><strong>Address: </strong> BPKS Complex, H#17, Ward#01 Lane, Hatimbag Dhakkhinkhan,
                                Dhaka North City Corporation, Dhaka -1230, Bangladesh. <br/>USA</p>
                        </div>
                        <div class="side-icon-box">
                            <div class="side-icon">
                                <img src="images/phone-arrow.png" alt="">
                            </div>
                            <br><strong>Telephone: </strong>
                            <a href="callto:8802-58953915">+8802-58953915</a> <br/>
                            <a href="callto:8802-589500771">+8802-589500771</a> </br>
                            <a href="callto:8802-589555311">+8802-58955531</a>
                            </p>
                        </div>
                        <div class="side-icon-box">
                            <div class="side-icon">
                                <img src="images/mail-arrow.png" alt="">
                            </div>
                            <p><strong>E-mail: </strong>
                                <a href="mailto:info@bpksbd.org">info@bpksbd.org</a> <br/>
                            </p>
                        </div>
                    </address>
                </div>
                <div class="col-xs-12 col-md-8">
                    <form action="process.php" id="contact-form" method="post" class="contact-form">
                        <div class="form-double">
                            <input type="text" id="form-name" name="form-name" placeholder="Your name"
                                   class="form-control" required="required">
                            <input type="email" id="form-email" name="form-email" class="form-control"
                                   placeholder="E-mail address" required="required">
                        </div>
                        <input type="text" id="form-subject" name="form-subject" class="form-control"
                               placeholder="Message topic">
                        <textarea name="message" id="form-message" name="form-message" rows="5" class="form-control"
                                  placeholder="Your message" required="required"></textarea>
                        <button type="sibmit" class="button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 pull-right">
                    <ul class="social-menu text-right x-left">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-google"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a href="#"><i class="ti-github"></i></a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <p>For Contact With BPKS Use this Social Media Links</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>&copy;Copyright 2018 All right reserved. Bangladesh Protibondi Kollan shongstha <i
                                class="ti-heart" aria-hidden="true"></i> by <a>BPKS</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!--Vendor-JS-->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<!--Plugin-JS-->
<script src="js/owl.carousel.min.js"></script>
<script src="js/contact-form.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/scrollUp.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/wow.min.js"></script>
<!--Main-active-JS-->
<script src="js/main.js"></script>
</body>

</html>
