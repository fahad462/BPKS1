<!DOCTYPE html>
<html>

<head>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <meta name="author" content="Fahad Hasan">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Page</title>
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
<!--/ Preloader -->


<!-- Header -->
<header class="header header-hidden shadow-bg">
    <div class="site-logo"><a href="#0" class="animatescroll-link" onclick="$('html').animatescroll();">Dashboard</a>
    </div>
    <div class="menu-bar waves-effect waves-light"><span class="fa fa-bars"></span></div>
    <div class="search-open waves-effect waves-light"><span class="fa fa-search"></span></div>
    <div class="search-area search-area-hidden clearfix">
        <div class="search-input">
            <form role="search" method="get" action="#0">
                <fieldset>
                    <input type="search" name="s" placeholder="Search...">
                </fieldset>
            </form>
        </div>
    </div>
</header>
<!--/ Header -->


<!-- Nav Menu -->
<nav class="main-nav hidden hero-height">
    <div class="menu-close waves-effect waves-light"><span class="fa fa-times"></span></div>
    <ul>
        <li><a href="#0" class="animatescroll-link" onclick="$('html').animatescroll();">About</a></li>
        <li><a href="#0" class="service-section-nav animatescroll-link"
               onclick="$('#service-section').animatescroll();">Disabilities</a></li>
        <li><a href="#0" class="skill-section-nav animatescroll-link" onclick="$('#skill-section').animatescroll();">Family
                Information</a>
        </li>
        <li><a href="#0" class="education-section-nav animatescroll-link"
               onclick="$('#education-section').animatescroll();">Education</a></li>
        <li><a href="#0" class="experience-section-nav animatescroll-link"
               onclick="$('#experience-section').animatescroll();">Professional Information</a></li>
        <li><a href="#0" class="portfolio-section-nav animatescroll-link"
               onclick="$('#portfolio-section').animatescroll();">Medical History</a></li>
        <li><a href="#0" class="reference-section-nav animatescroll-link"
               onclick="$('#reference-section').animatescroll();">Equipment You Use
            </a></li>
        <li><a href="#0" class="client-section-nav animatescroll-link" onclick="$('#client-section').animatescroll();">Registered
                Trainings</a>
        </li>
        <li><a href="#0" class="blog-section-nav animatescroll-link"
               onclick="$('#blog-section').animatescroll();">Health Information</a></li>
        <li><a href="#0" class="pricing-section-nav animatescroll-link"
               onclick="$('#money').animatescroll();">Allowance Of MOney</a></li>
        <li><a href="#0" class="contact-section-nav animatescroll-link"
               onclick="$('#equipment').animatescroll();">Request For Equipment</a></li>
        <form id="logout-form" action="http://localhost:8000/admin/logout" method="POST"
              style="display: none;">  @csrf </form>
        <li><a href="#0" onclick="document.getElementById('logout-form').submit();">Logout</a></li>
    </ul>
</nav>
<!--/ Nav Menu -->


<!-- Top Section -->
<div class="site-header top-section top-section-home image-bg parallax-section"
     data-image-bg="{{asset('img/bg/bg-1.jpg')}}">
    <div class="overlay-section"></div>
</div>
<!--/ Top Section -->


<!-- About Section -->
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
                            @foreach($pname as $name)
                                <div class="about-name">{{ $name->name }}</div>
                            @endforeach
                            <div class="about-title">Disabled Person</div>
                        </div>
                        <div class="col m7 s12 about-data-wrapper pd-50">
                            <div class="about-desc pd-0">
                                <div class="about-section-title">About Yourself</div>
                                <div class="about-data">
                                    <p>
                                    </p>
                                    @foreach($persons as $person)
                                        <div><span>Voter Id</span>{{$person->voter_id}}</div>
                                        <div><span>Address</span>{{$person->address}}</div>
                                        <div><span>Religion</span>{{$person->religion}}</div>
                                        <div><span>Gender</span>{{$person->sex}}</div>
                                        <div><span>Marital Status</span>{{$person->marital_status}}</div>
                                        <div><span>Email</span>{{$email}}</div>
                                        {{--<div><span>Website</span>http://www.envato.com</div>--}}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="about-social col s12 pd-0">
                            {{--<a class="waves-effect waves-light" href="#0"><span class="fa fa-bomb"></span></a>--}}
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
                <h2>Your Registered Disabilities</h2>
            </div>

            <div class="col s12 masonry pd-0 mgt-20">
                <table class="table table-bordered table-dark">
                    <thead>
                    <th>Disabilities</th>
                    </thead>
                    <tbody>
                    @foreach($disabili as $disi)
                        <td>{{ $disi->dis_name  }}</td>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--/ Service Section -->


<!-- Skill Section -->
<section id="skill-section" class="skill-section">
    <div class="container">
        <div class="row">
            <div class="col s12 section-title">
                <h2>Family Information</h2>
            </div>
            <div class="col s12">
                <div class="col s12 section-content skill-wrapper w-block shadow-bg pdt-50 pdr-40 pdb-50 pdl-40">
                    {{--<div class="table-responsive table-responsive-lg">--}}
                    @php ( $id=1 )
                    <table border="1" class="table table-bordered"
                           style="width:100%">
                        <tr>
                            <th>
                                Family Id
                            </th>
                            <th>
                                Primary Field of Earnings
                            </th>
                            <th>
                                Yearly Income
                            </th>
                            <th>
                                No. Of Active Earing Person
                            </th>
                            <th>
                                Fathers Name
                            </th>
                            <th>
                                Mothers Name
                            </th>
                            <th>
                                Total Male
                            </th>
                            <th>
                                Total Female
                            </th>
                            <th>
                                Spouse Name
                            </th>
                            <th>
                                Number of Childrens
                            </th>
                        </tr>

                        @foreach ($familys as $user)
                            <tr>
                                <td>
                                    <p>
                                        {{$user->family_id}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{$user->primary_field_of_earing }}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{$user->pyearly_income }}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{$user->active_earning_person}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{$user->father}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{$user->mother}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{$user->female_person}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{$user->spouse_name}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{$user->post_office}}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{$user->children_no}}
                                    </p>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{--</div>--}}

                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Skill Section -->


<!-- Education Section -->
<section id="education-section" class="education-section">
    <div class="container">
        <div class="row">
            <div class="col s12 section-title">
                <h2>Education</h2>
            </div>
            <div class="col s12">
                <div class="col s12 section-content pd-0">
                    @foreach($educations as $education)
                        <ul class="timeline">

                            <!-- Single Education - Left Side -->
                            <li class="timeline-inverted wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.3s"
                                data-wow-offset="0">
                                <div class="timeline-badge">
                                    <a><i class="fa fa-circle"></i></a>
                                </div>
                                <div class="timeline-panel w-block shadow-bg pd-30">
                                    <div class="timeline-tag">
                                        School
                                    </div>
                                    <div class="timeline-title timeline-title-alt">
                                        {{ _('School Name: ').$education->school }}
                                    </div>
                                    <div class="timeline-time">{{ _('Passing Year: ').$education->s_year  }}</div>
                                    <div class="timeline-time">{{ _('Result: ').$education->s_res  }}</div>
                                </div>
                            </li>

                            @if($education->college!="")
                                <li class="timeline wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.3s"
                                    data-wow-offset="0">
                                    <div class="timeline-badge">
                                        <a><i class="fa fa-circle"></i></a>
                                    </div>
                                    <div class="timeline-panel w-block shadow-bg pd-30">
                                        <div class="timeline-tag">
                                            College
                                        </div>
                                        <div class="timeline-title timeline-title-alt">
                                            {{ _('College Name: ').$education->college }}
                                        </div>
                                        <div class="timeline-time">{{ _('Passing Year: ').$education->c_year  }}</div>
                                        <div class="timeline-time">{{ _('Result: ').$education->c_res  }}</div>
                                    </div>
                                </li>
                            @endif
                            @if($education->university!="")
                                <li class="timeline-inverted wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.3s"
                                    data-wow-offset="0">
                                    <div class="timeline-badge">
                                        <a><i class="fa fa-circle"></i></a>
                                    </div>
                                    <div class="timeline-panel w-block shadow-bg pd-30">
                                        <div class="timeline-tag">
                                            University
                                        </div>
                                        <div class="timeline-title timeline-title-alt">
                                            {{ _('University Name: ').$education->university }}
                                        </div>
                                        <div class="timeline-time">{{ _('Passing Year: ').$education->u_year  }}</div>
                                        <div class="timeline-time">{{ _('Result: ').$education->u_res  }}</div>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Education Section -->


<!-- Experience Section -->
<section id="experience-section" class="experience-section">
    <div class="container">
        <div class="row">
            <div class="col s12 section-title">
                <h2>Professional Information</h2>
                <br>
                <br>
            </div>
            <div class="col s12">
                {{--<div class="col s12 section-content pd-0">--}}
                <div class="table-responsive table-responsive-lg">
                    @php ( $id=1 )
                    <table border="1" class="table table-bordered table-dark table-hover"
                           style="width:100%">

                        <tr>
                            <th>
                                Present Occupation
                            </th>
                            <th>
                                Joinnig Date
                            </th>
                            <th>
                                Dependencies On Him
                            </th>
                            <th>
                                Monthly Income
                            </th>
                            <th>
                                Achievement
                            </th>
                        </tr>

                        @foreach ($prof as $row)
                            <tr>
                                @foreach($row as $tuple=>$tuple_val)
                                    <td>
                                        <p>
                                            {{ $tuple_val }}
                                        </p>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            {{--</div>--}}
        </div>
    </div>
</section>
<!--/ Experience Section -->


<!-- Portfolio Section -->
<section id="portfolio-section" class="portfolio-section">
    <div class="container">
        <div class="row">
            <div class="col s12 section-title">
                <h2>Medical History</h2>
                <br>
                <br>
            </div>
            <div class="col s12">
                <div class="table-responsive table-responsive-lg">
                    @php ( $id=1 )
                    <table border="1" class="table table-striped table-bordered table-dark table-hover"
                           style="width:100%">
                        <tr>
                            <th>
                                Cost
                            </th>
                            <th>
                                Hospital
                            </th>
                            <th>
                                Consultant
                            </th>
                            <th>
                                Treatment start date
                            </th>
                            <th>
                                Treatment final date
                            </th>
                            <th>
                                Medichine name
                            </th>
                            <th>
                                Treatment Type
                            </th>
                        </tr>

                        @foreach ($med_cur as $row)
                            <tr>
                                @foreach($row as $tuple=>$tuple_val)
                                    <td>
                                        <p>
                                            {{ $tuple_val }}
                                        </p>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Portfolio Section -->


<!-- Reference Section -->
<section id="reference-section" class="reference-section">
    <div class="container">
        <div class="row">
            <div class="col s12 section-title">
                <h2>Equipment You Use</h2>
                <br>
                <br>
            </div>
            <div class="col s12">
                <div class="table-responsive table-responsive-lg">
                    @php ( $id=1 )
                    <table border="1" class="table table-striped table-bordered table-dark table-hover"
                           style="width:100%">
                        <tr>
                            <th>
                                Equipment Issue Date
                            </th>
                            <th>
                                Equiment Cost
                            </th>
                            <th>
                                Equipment Type
                            </th>
                            <th>
                                Present Condition
                            </th>
                            <th>
                                Feedback
                            </th>
                            <th>
                                Further Needed
                            </th>
                        </tr>

                        @foreach ($equip as $row)
                            <tr>
                                @foreach($row as $tuple=>$tuple_val)
                                    <td>
                                        <p>
                                            {{ $tuple_val }}
                                        </p>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Reference Section -->


<!-- Client Section -->
<section id="client-section" class="client-section">
    <div class="container">
        <div class="row">
            <div class="col s12 section-title">
                <h2>Your Registered With These Trainings</h2>
            </div>
            <div class="col s12 client-wrapper">
                {{--<div class="col s12 client-carousel w-block shadow-bg pd-0">--}}
                <div class="table-responsive table-responsive-lg">
                    @php ( $id=1 )
                    <table border="1" class="table table-striped table-bordered table-dark table-hover"
                           style="width:100%">
                        <tr>
                            <th>
                                Trainer ID
                            </th>
                            <th>
                                Further Needed
                            </th>
                            <th>
                                Achivement
                            </th>
                            <th>
                                Feedback
                            </th>
                        </tr>

                        @foreach ($train as $row)
                            <tr>
                                @foreach($row as $tuple=>$tuple_val)
                                    <td>
                                        <p>
                                            {{ $tuple_val }}
                                        </p>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
    {{--</div>--}}
</section>
<!--/ Client Section -->


<!-- Blog Section -->
<section id="blog-section" class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col s12 section-title">
                <h2>Your Health Information</h2>
                <br>
                <br>
            </div>

            <div class="table-responsive table-responsive-lg">
                @php ( $id=1 )
                <table border="1" class="table table-striped table-bordered table-dark table-hover"
                       style="width:100%">

                    <tr>
                        <th>
                            Blood group
                        </th>
                        <th>
                            Blood pressure
                        </th>
                        <th>
                            Heart beat
                        </th>
                        <th>
                            Drugs taken
                        </th>
                        <th>
                            Height
                        </th>
                        <th>
                            Weight
                        </th>
                    </tr>

                    @foreach ($health_info as $row)
                        <tr>
                            @foreach($row as $tuple=>$tuple_val)
                                <td>
                                    <p>
                                        {{ $tuple_val }}
                                    </p>
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>

<section id="money" class="contact-section">
    <div class="container">
        <section id="money" class="row">
            <div class="col s12 section-title">
                <h2>Request For Allowance of Money</h2>
                <br>
                <br>
            </div>
            <div class="col s12 w-block shadow-bg pd-40">
                <form id="c-form" class="c-form" action="#0" method="post"
                      autocomplete="off">
                    <fieldset>
                        <input id="subject" type="text" name="subject" class="c-form-input" required
                               placeholder="Subject">
                        <input id="amount" name="amount" type="number" class="c-form-input" required placeholder="Amount">
                        {{--<select id="atype" required>--}}
                        {{--<option value="onetime">One Time</option>--}}
                        {{--<option value="regular">Regular</option>--}}
                        {{--</select>--}}
                        <textarea id="message" name="message" class="c-form-input" required
                                  placeholder="Message"></textarea>
                        <button onclick="return requesta();" class="btn-custom waves-effect" type="button"
                                name="button">Send Request
                        </button>
                        <script>
                            function requesta() {
                                var a = confirm('Are you sure to Request?');
                                if (a == false) return a;
                                else {
                                    var aa = '{{$birth_cer}}';
                                    var tid = document.getElementById('subject').value;
                                    var tid1 = document.getElementById('amount').value;
                                    var tid2 = document.getElementById('message').value;
                                    // alert(tid + tid1 + tid2);
                                    if (tid == "" || tid1 == "" || tid2 == "") {

                                        alert('Please Fill All Inputs');
                                        return 0;
                                    }
                                    $.post('/public/request/taka', {
                                            "_token": "{{ csrf_token() }}",
                                            birth: aa,
                                            subject: tid,
                                            amount: tid1,
                                            message: tid2
                                        }
                                    ).done(function (data) {
                                        alert('Your Request Was Sent');
                                        if (data == 'notok') {
                                            alert('failed');

                                        } else {
                                            alert('success');
                                            location.reload();
                                        }

                                    }).fail(function () {
                                        alert("Failed Please Try Again Later");
                                    });
                                }
                            }
                        </script>
                        <span id="c-form-spinner" class="fa fa-circle-o-notch "></span>
                    </fieldset>
                </form>
            </div>
        </section>
        <section id="equipment" class="contact-section">
            <div class="col s12 section-title">
                <h2>Request For Equipment</h2>
                <br>
                <br>
            </div>
            <div class="col s12 w-block shadow-bg pd-40">
                <form id="c-form1" class="c-form" action="#0" method="post"
                      autocomplete="off">
                    <fieldset>

                        <input id="etype" type="text" name="subjec1t" class="c-form-input" required
                               placeholder="Equiment Name">
                        <textarea id="message1" name="message1" class="c-form-input" required
                                  placeholder="Message"></textarea>
                        <button onclick="return requestaa();" class="btn-custom waves-effect" type="button"
                                name="button">Send Request
                        </button>
                        <script>
                            function requestaa() {
                                var a = confirm('Are you sure to Request?');
                                if (a == false) return a;
                                else {
                                    var aa = '{{$birth_cer}}';
                                    var tid = document.getElementById('etype').value;
                                    var tid1 = document.getElementById('message1').value;
                                    if (tid == "" || tid1 == "") {
                                        alert('Please Fill All Inputs');
                                        return 0;
                                    }
                                    $.post('/public/request/equipment', {
                                            "_token": "{{ csrf_token() }}",
                                            birth: aa,
                                            etype: tid,
                                            message: tid1
                                        }
                                    ).done(function (data) {
                                        alert('Your Request Was Sent');
                                        if (data == 'notok') {
                                            alert('failed');

                                        } else {
                                            alert('success');
                                            location.reload();
                                        }

                                    }).fail(function () {
                                        alert("Failed Please Try Again Later");
                                    });
                                }
                            }
                        </script>
                        <span id="c-form-spinner" class="fa fa-circle-o-notch "></span>
                    </fieldset>
                </form>
            </div>

        </section>
    </div>
    <!--/ Contact Section -->


    <!-- Footer Section -->
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
    <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA2HHs3D24pZzCk6EgJQHEcSstKy8vAOls"></script>
</body>
</html>