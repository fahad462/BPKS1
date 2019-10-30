<!DOCTYPE html>
<html lang="en">
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- lala -->
    <script src={{ asset('js/bootstrap.min.js') }}></script>
    <!-- Extra plugin js -->
    <script src={{ asset('vendors/counter-up/waypoints.min.js') }}></script>
    <script src={{ asset('vendors/counter-up/jquery.counterup.min.js') }}></script>
    <script src={{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}></script>
    <script src={{ asset('vendors/isotope/isotope.pkgd.min.js') }}></script>
    <script src={{ asset('vendors/owl-carousel/owl.carousel.min.js') }}></script>

    <script src={{ asset('vendors/style-switcher/styleswitcher.js') }}></script>
    <script src={{ asset('vendors/style-switcher/switcher-active.js') }}></script>
    <script src={{ asset('vendors/animate-css/wow.min.js') }}></script>

    <!--gmaps Js-->
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE'></script>
    <script src={{asset('js/gmaps.min.js')}}></script>

    <!-- contact js -->
    <script src={{asset('js/jquery.form.js')}}></script>
    <script src={{asset('js/jquery.validate.min.js')}}></script>
    <script src={{asset('js/contact.js')}}></script>

    <script src={{asset('js/theme.js')}}></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/fav-icon.png" type="image/x-icon"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Disabled People</title>

    <!-- Icon css link -->
    <link href={{asset('vendors/material-icon/css/materialdesignicons.min.css')}} rel="stylesheet">
    <link href={{asset('css/font-awesome.min.css')}} rel="stylesheet">
    <link href={{asset('vendors/linears-icon/style.css')}} rel="stylesheet">
    <!-- Bootstrap -->
    <link href={{asset('css/bootstrap.min.css')}} rel="stylesheet">

    <!-- Extra plugin css -->
    <link href={{asset('vendors/owl-carousel/assets/owl.carousel.css')}} rel="stylesheet">
    <link href={{asset('vendors/animate-css/animate.css')}} rel="stylesheet">

    <link href={{asset('css/style.css')}} rel="stylesheet">
    <link href={{asset('css/responsive.css')}} rel="stylesheet">

    <link rel="stylesheet" href={{asset('css/colors/default.css')}} title="default">
    <link rel="alternate stylesheet" href={{asset('css/colors/orange.css')}} title="orange">
    <link rel="alternate stylesheet" href={{asset('css/colors/pink.css')}} title="pink">
    <link rel="alternate stylesheet" href={{asset('css/colors/violet.css')}} title="violet">
    <link rel="alternate stylesheet" href={{asset('css/colors/blue.css')}} title="blue">
    <link rel="alternate stylesheet" href={{asset('css/colors/past.css')}} title="past">
    <style>
        .header_area {
            background-color: #d2be8854;
        }

        .dropbtn {
            background-color: antiquewhite;
            color: black;
            font-size: 16px;
            border: none;
            cursor: hand;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: indianred;
        }
    </style>
    <style>
        .modal-header, h4, .close {
            background-color: #218254;
            color: white !important;
            text-align: center;
            font-size: 30px;
        }

        .modal-footer {
            background-color: #f9f9f9;
        }
    </style>
</head>
@foreach($persons as $person)
    <body class="dark_bg" data-offset="80" data-scroll-animation="true" data-spy="scroll"
          data-target="#bs-example-navbar-collapse-1">
    <!--================ Frist header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button aria-expanded="false" class="navbar-toggle collapsed"
                            data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
                            <span class="sr-only">
                                Toggle navigation
                            </span>
                        <span class="icon-bar">
                            </span>
                        <span class="icon-bar">
                            </span>
                        <span class="icon-bar">
                            </span>
                    </button>
                </div>
                {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<li class="active">--}}
                            {{--<a href="#about">--}}
                                {{--About--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#skill">--}}
                                {{--Family Info--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#education">--}}
                                {{--Educational Info--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#service">--}}
                                {{--Professional Info--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#portfolio">--}}
                                {{--Medical History--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#news">--}}
                                {{--Health Information--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#contact">--}}
                                {{--Equipment--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#nuru">--}}
                                {{--Attached Training--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </header>
    <!--================End Footer Area =================-->
    <!--================Total container Area =================-->
    <div class="container main_container">
        <div class="content_inner_bg row m0">
            <section class="about_person_area pad" id="about">
                <div class="row">
                    <div class="col-md-5">
                        <div class="person_img">
                            @foreach($imageloc as $image)
                                <img src={{ __('/uploads/person/').$image->image_loc  }}>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row person_details">
                            <div class="person_information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <p style="font-size:15px">Name</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p style="font-size:15px">Address</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p style="font-size:15px">Religion</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p style="font-size:15px">Disability Id</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p style="font-size:15px">Disabilities</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">
                                            @foreach($pname as $name)
                                                <p style="font-size:15px">{{ $name->name  }}</p>
                                            @endforeach
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p style="font-size:15px">{{ $person->address }}</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p style="font-size:15px">{{ $person->religion }}</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p style="font-size:15px">{{ $person->disability_id }}</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            @foreach($disabili as $disi)
                                                {{ $disi->dis_name  }}
                                            @endforeach
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>--}}
                                        <script>
                                            //var a = document.getElementById('deleter');
                                            function deletewar() {
                                                var a = confirm('Are you sure to delete this profile?');
                                                if (a == false) return a;
                                                else {
                                                    var aa = '{{$birth_cer}}';
                                                    alert(aa);
                                                    $.post('/admin/disabled_people/delete', {
                                                            "_token": "{{ csrf_token() }}",
                                                            birth: aa,
                                                        }
                                                    ).done(function (data) {
                                                        alert('deletion succesful');
                                                        window.location.href = '{{route('dashboard.index.disabled.people')}}';
                                                    }).fail(function () {
                                                        alert("deletion error Please Try Again");
                                                    });
                                                    {{--window.location('{{route('admin.show.disabled_people')}}');--}}
                                                }
                                            };
                                        </script>
                                    <li>
                                        <button onclick="return deletewar()" type="button"
                                                class="btn-danger btn-sm btn">Delete
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm" id="myBtn">Update</button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header" style="padding:5px 5px;">
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            &times
                                                        </button>
                                                        <h4>Update Personal Information</h4>
                                                    </div>
                                                    {{--<span class="glyphicon glyphicon-lock"></span>--}}
                                                    <div class="modal-body" style="padding:40px 50px;">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label for="fname"><span
                                                                            class="glyphicon"></span>
                                                                    Name</label>
                                                                <input type="text" class="form-control" id="fname"
                                                                       placeholder="Enter First Name">
                                                                <input type="text" class="form-control" id="mname"
                                                                       placeholder="Enter Middle Name">
                                                                <input type="text" class="form-control" id="lname"
                                                                       placeholder="Enter Last Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="a"><span
                                                                            class="glyphicon"></span>
                                                                    Address</label>
                                                                <input type="text" class="form-control" id="city"
                                                                       placeholder="Enter City">
                                                                <input type="text" class="form-control" id="road"
                                                                       placeholder="Enter Road No.">
                                                                <input type="text" class="form-control" id="postof"
                                                                       placeholder="Enter Post Office">
                                                                <input type="text" class="form-control" id="house"
                                                                       placeholder="Enter House No.">
                                                            </div>

                                                            <div class="form-group">
                                                                {{--<label for="a"><span--}}
                                                                {{--class="glyphicon"></span>--}}
                                                                {{--</label>--}}
                                                                <input type="text" class="form-control" id="vote"
                                                                       placeholder="Voter ID">
                                                                <input type="text" class="form-control" id="gender"
                                                                       placeholder="Enter Gender">
                                                                <input type="text" class="form-control" id="religion"
                                                                       placeholder="Enter Religion">
                                                                <input type="text" class="form-control" id="marital"
                                                                       placeholder="Enter Marital Status">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="a"><span
                                                                            class="glyphicon"></span> Add a Disability
                                                                    Or Organs Which wasnot Added Before
                                                                </label>
                                                                <input type="text" class="form-control" id="disab"
                                                                       placeholder="New Disabilities">
                                                                <select class="form-control" id="s1">
                                                                    <option disabled selected value> -- select an option
                                                                        --
                                                                    </option>
                                                                    <option value="Autisam">Autism</option>
                                                                    <option value="Blind">Blind</option>
                                                                    <option value="Lame">Lame</option>
                                                                    <option value="Deaf">Deaf</option>
                                                                </select>
                                                                <input type="text" class="form-control" id="organ"
                                                                       placeholder="New Damaged Organs">
                                                                <select class="form-control" id="s2">
                                                                    <option disabled selected value> -- select an option
                                                                        --
                                                                    </option>
                                                                    <option value="Hand">Hand</option>
                                                                    <option value="Leg">Leg</option>
                                                                    <option value="Brain">Brain</option>
                                                                    <option value="Face">Face</option>
                                                                    <option value="Spine">Spine</option>
                                                                </select>
                                                            </div>
                                                            {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>--}}

                                                            <script>
                                                                function updatePerson() {
                                                                    var a = confirm('Are you sure to update?');
                                                                    if (a == false) return a;
                                                                    else {
                                                                        var aa = '{{$birth_cer}}';
                                                                        // alert(aa);
                                                                        var tid = document.getElementById('organ').value;
                                                                        var tid1 = document.getElementById('disab').value;
                                                                        var tid2 = document.getElementById('house').value;
                                                                        var tid3 = document.getElementById('city').value;
                                                                        var tid4 = document.getElementById('road').value;
                                                                        var tid5 = document.getElementById('postof').value;
                                                                        var tid6 = document.getElementById('fname').value;
                                                                        var tid7 = document.getElementById('mname').value;
                                                                        var tid8 = document.getElementById('lname').value;
                                                                        var tid9 = document.getElementById('vote').value;
                                                                        var tid10 = document.getElementById('gender').value;
                                                                        var tid11 = document.getElementById('marital').value;
                                                                        var tid12 = document.getElementById('religion').value;
                                                                        // alert('akaka');
                                                                        $.post('/admin/disabled_people/update/person/info', {
                                                                                "_token": "{{ csrf_token() }}",
                                                                                birth: aa,
                                                                                organ: tid,
                                                                                disab: tid1,
                                                                                house: tid2,
                                                                                city: tid3,
                                                                                road: tid4,
                                                                                postof: tid5,
                                                                                fname: tid6,
                                                                                mname: tid7,
                                                                                lname: tid8,
                                                                                vote: tid9,
                                                                                gender: tid10,
                                                                                marital: tid11,
                                                                                religion: tid12
                                                                            }
                                                                        ).done(function (data) {
                                                                            alert('data updated succesfully');
                                                                            location.reload();
                                                                        }).fail(function () {
                                                                            alert("error check your inserted data");
                                                                        });

                                                                    }
                                                                };
                                                            </script>
                                                            <button type="button"
                                                                    onclick="return updatePerson()"
                                                                    class="btn btn-success btn-block">
                                                                <span class="glyphicon glyphicon-off"></span> Update
                                                            </button>
                                                            <script>
                                                                $(document).ready(function () {

                                                                    $("#s1").change(function () {
                                                                        var a = document.getElementById('s1').value;
                                                                        // b = b + ' ' + a;
                                                                        document.getElementById('disab').value = document.getElementById('disab').value + ' ' + a;
                                                                        document.getElementById('s1').value = '';
                                                                    });
                                                                });

                                                                $(document).ready(function () {

                                                                    $("#s2").change(function () {
                                                                        var a = document.getElementById('s2').value;
                                                                        // b = b + ' ' + a;
                                                                        document.getElementById('organ').value = document.getElementById('organ').value + ' ' + a;
                                                                        document.getElementById('s2').value = '';
                                                                    });
                                                                });
                                                            </script>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit"
                                                                class="btn btn-danger btn-danger pull-left"
                                                                data-dismiss="modal"><span
                                                                    class="glyphicon glyphicon-remove"></span> Cancel
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <script>
                                            $(document).ready(function () {
                                                $("#myBtn").click(function () {
                                                    $("#myModal").modal();
                                                });
                                            });
                                        </script>
                                    </li>
                                    <li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @if(sizeof($mreq)!=0)
                <section class="myskill_area pad" id="skill">
                    <div class="main_title">
                        <h2>
                            Money Allowance Request
                        </h2>
                    </div>
                    <div class="row">
                        <center>
                            <div align="center" class="col-md-6 wow fadeInUp animated">
                                <div class="table-responsive table-responsive-lg">
                                    @php ( $id=1 )
                                    <table border="1" class="table table-striped table-bordered table-dark table-hover"
                                           style="width:100%">
                                        <thead>
                                        @foreach($mreq as $req)
                                            @foreach($req as $lala=>$lala_val)
                                                <th>{{  $lala }}</th>
                                            @endforeach
                                        @endforeach
                                        </thead>
                                        <tbody>
                                        @foreach($mreq as $req=>$req_val)
                                            <tr>
                                                @foreach($req_val as $lala=>$lala_val)
                                                    <td>{{  $lala_val }}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <button id="lalal1" onclick="return oops()" type="button">Accept</button>
                                    <script>
                                        function oops() {
                                            var cn = confirm('Are you sure?');
                                            if (cn == false) return 0;
                                            var aa = '{{$birth_cer}}';
                                            $.post('{{__('/admin/accept/money/').$birth_cer }}', {
                                                    "_token": "{{ csrf_token() }}",
                                                    birth: aa,
                                                }
                                            ).done(function (data) {
                                                if (data == 'notenough' || data == 'notenoughlala')
                                                    alert('not enough equipment stored');
                                                else
                                                    alert('request accepted ');
                                                location.reload();
                                            }).fail(function () {
                                                alert("error check your inserted data");
                                            });
                                        }

                                    </script>
                                </div>
                            </div>
                        </center>
                    </div>
                </section>
            @endif

            @if(sizeof($ereq)!=0)
                <section class="myskill_area pad" id="skill">
                    <div class="main_title">
                        <h2>
                            Equipment Request
                        </h2>
                    </div>
                    <div class="row">
                        <center>
                            <div align="center" class="col-md-6 wow fadeInUp animated">
                                <div align="center" class="table-responsive table-responsive-sm">
                                    @php ( $id=1 )
                                    <table align="center" border="1"
                                           class="table table-striped table-bordered table-dark"
                                           style="width:100%;margin-left: auto;margin-right: auto">
                                        <thead>
                                        @foreach($ereq as $req)
                                            @foreach($req as $lala=>$lala_val)
                                                <th>{{  $lala }}</th>
                                            @endforeach
                                        @endforeach
                                        </thead>
                                        <tbody>
                                        @foreach($ereq as $req=>$req_val)
                                            <tr>
                                                @foreach($req_val as $lala=>$lala_val)
                                                    <td>{{  $lala_val }}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <button onclick="return acce()" type="button" class="btn btn-sm btn-danger" id="accept">
                                    Accept
                                </button>
                                <script>
                                    function acce() {
                                        var cn = confirm('Are you sure?');
                                        if (cn == false) return 0;
                                        var aa = '{{$birth_cer}}';
                                        $.post('{{__('/admin/accept/equipment/').$birth_cer }}', {
                                                "_token": "{{ csrf_token() }}",
                                                birth: aa,
                                            }
                                        ).done(function (data) {
                                            if (data == 'notenough' || data == 'notenoughlala')
                                                alert('not enough equipment stored');
                                            else
                                                alert('request accepted ');
                                            location.reload();
                                        }).fail(function () {
                                            alert("error check your inserted data");
                                        });
                                    }

                                </script>
                            </div>
                        </center>
                    </div>
                </section>
            @endif
            <section class="myskill_area pad" id="skill">
                <div class="main_title">
                    <h2>
                        Family Information
                    </h2>
                </div>
                <div class="row">
                    <!-- <div class="col-md-6 wow fadeInUp animated"> -->
                    @if(sizeof($familys)==0)
                        <center>
                            <div align="center" class="col-md-6 wow fadeInUp animated">
                                <h1><p>Family Data Not Found</p></h1>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" id="myBtn11">Insert</button>

                            {{--<!-- Modal -->--}}
                            {{--<div class="modal fade" id="myModal11" role="dialog">--}}
                            {{--<div class="modal-dialog">--}}

                            {{--<!-- Modal content-->--}}
                            {{--<div class="modal-content">--}}
                            {{--<div class="modal-header" style="padding:5px 5px;">--}}
                            {{--<button type="button" class="close" data-dismiss="modal">--}}
                            {{--&times--}}
                            {{--</button>--}}
                            {{--<h4>Insert Family Information</h4>--}}
                            {{--</div>--}}
                            {{--<span class="glyphicon glyphicon-lock"></span>--}}
                            {{--<div class="modal-body" style="padding:40px 50px;">--}}
                            {{--<form role="form">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="faname"><span--}}
                            {{--class="glyphicon"></span>--}}
                            {{--Father and Mothers Name</label>--}}
                            {{--<input required type="text" class="form-control" id="faname"--}}
                            {{--placeholder="Enter Fathers Name">--}}
                            {{--<input required type="text" class="form-control" id="maname"--}}
                            {{--placeholder="Enter Mothers Name">--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="spousename"><span--}}
                            {{--class="glyphicon"></span>--}}
                            {{--Spouse And Childrens</label>--}}
                            {{--<input type="text" class="form-control" id="spousename"--}}
                            {{--placeholder="Enter Spouse Name">--}}
                            {{--<input type="number" class="form-control" id="childs"--}}
                            {{--placeholder="Enter No.of Children">--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                            {{--<label><span--}}
                            {{--class="glyphicon"></span>--}}
                            {{--Earning Information</label>--}}
                            {{--<input required type="text" class="form-control" id="field"--}}
                            {{--placeholder="Enter Primary Fields of Earnings">--}}
                            {{--<input type="number" required class="form-control" id="income"--}}
                            {{--placeholder="Yearly Income">--}}
                            {{--<input type="number" required class="form-control" id="active"--}}
                            {{--placeholder="No. Of Active Earing Person">--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                            {{--<label for="a"><span--}}
                            {{--class="glyphicon"></span>Total Male and Female--}}
                            {{--</label>--}}
                            {{--<input type="number" required class="form-control" id="males"--}}
                            {{--placeholder="Total No. of Males">--}}

                            {{--<input required type="number" class="form-control" id="females"--}}
                            {{--placeholder="Total No. of Females">--}}
                            {{--</div>--}}

                            {{--<button--}}
                            {{--type="button"--}}
                            {{--onclick="return updatefamil()"--}}
                            {{--class--}}
                            {{--="btn btn-success btn-block">--}}
                            {{--<span class="glyphicon glyphicon-off"> </span> Insert--}}
                            {{--</button>--}}

                            {{--<script>--}}
                            {{--function updatefamil() {--}}
                            {{--var a = confirm('Are you sure to Insert?');--}}
                            {{--if (a == false) return a;--}}
                            {{--else {--}}
                            {{--var aa = '{{$birth_cer}}';--}}

                            {{--// alert(aa);--}}
                            {{--var tid = document.getElementById('active').value;--}}
                            {{--var tid1 = document.getElementById('income').value;--}}
                            {{--var tid2 = document.getElementById('field').value;--}}
                            {{--var tid3 = document.getElementById('spousename').value;--}}
                            {{--var tid4 = document.getElementById('maname').value;--}}
                            {{--var tid5 = document.getElementById('faname').value;--}}
                            {{--var tid6 = document.getElementById('males').value;--}}
                            {{--var tid7 = document.getElementById('females').value;--}}
                            {{--var tid8 = document.getElementById('childs').value;--}}
                            {{--if (tid == "" || tid1 == "" || tid2 == "" || tid4 == "" || tid5 == "" || tid7 == "") {--}}
                            {{--alert('Please Insert Into All Fields');--}}
                            {{--return 0;--}}
                            {{--}--}}
                            {{--// alert('akaka');--}}
                            {{--// return 0;--}}
                            {{--$.post('/admin/disabled_people/insert/family/info', {--}}
                            {{--"_token": "{{ csrf_token() }}",--}}
                            {{--birth: aa,--}}
                            {{--active: tid,--}}
                            {{--income: tid1,--}}
                            {{--field: tid2,--}}
                            {{--spousename: tid3,--}}
                            {{--maname: tid4,--}}
                            {{--faname: tid5,--}}
                            {{--males: tid6,--}}
                            {{--females: tid7,--}}
                            {{--childs: tid8--}}
                            {{--}--}}
                            {{--).done(function (data) {--}}
                            {{--alert('data updated succesfully');--}}
                            {{--location.reload();--}}
                            {{--}).fail(function () {--}}
                            {{--alert("error check your inserted data");--}}
                            {{--});--}}
                            {{--}--}}
                            {{--};--}}
                            {{--</script>--}}

                            {{--</form>--}}
                            {{--</div>--}}
                            {{--<div class="modal-footer">--}}
                            {{--<button type="submit" class="btn btn-danger btn-danger pull-left"--}}
                            {{--data-dismiss="modal"><span--}}
                            {{--class="glyphicon glyphicon-remove"> </span>--}}
                            {{--Cancel--}}
                            {{--</button>--}}
                            {{--<script>--}}
                            {{--$(document).ready(function () {--}}
                            {{--$("#myBtn11").click(function () {--}}
                            {{--$("#myModal11").modal();--}}
                            {{--});--}}
                            {{--});--}}
                            {{--</script>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </center>
                    @else
                        <div class="table-responsive table-responsive-lg">
                            @php ( $id=1 )
                            <table border="1" class="table table-striped table-bordered table-dark table-hover"
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
                                                {{$user->male_person}}
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
                                                {{$user->children_no}}
                                            </p>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" id="myBtn1">Update</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="padding:5px 5px;">
                                        <button type="button" class="close" data-dismiss="modal">
                                            &times;
                                        </button>
                                        <h4>Update Family Information</h4>
                                    </div>
                                    {{--<span class="glyphicon glyphicon-lock"></span>--}}
                                    <div class="modal-body" style="padding:40px 50px;">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="faname"><span
                                                            class="glyphicon"></span>
                                                    Father and Mothers Name</label>
                                                <input type="text" class="form-control" id="faname"
                                                       placeholder="Enter Fathers Name">
                                                <input type="text" class="form-control" id="maname"
                                                       placeholder="Enter Mothers Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="spousename"><span
                                                            class="glyphicon"></span>
                                                    Spouse And Childrens</label>
                                                <input type="text" class="form-control" id="spousename"
                                                       placeholder="Enter Spouse Name">
                                                <input type="number" class="form-control" id="childs"
                                                       placeholder="Enter No.of Children">
                                            </div>

                                            <div class="form-group">
                                                <label><span
                                                            class="glyphicon"></span>
                                                    Earning Information</label>
                                                <input type="text" class="form-control" id="field"
                                                       placeholder="Enter Primary Fields of Earnings">
                                                <input type="number" class="form-control" id="income"
                                                       placeholder="Yearly Income">
                                                <input type="number" class="form-control" id="active"
                                                       placeholder="No. Of Active Earing Person">
                                            </div>

                                            <div class="form-group">
                                                <label for="a"><span
                                                            class="glyphicon"></span>Total Male and Female
                                                </label>
                                                <input type="number" class="form-control" id="males"
                                                       placeholder="Total No. of Males">

                                                <input type="number" class="form-control" id="females"
                                                       placeholder="Total No. of Females">
                                            </div>

                                            <button
                                                    type="button"
                                                    onclick="return updatefamil()"
                                                    class
                                                    ="btn btn-success btn-block">
                                        <span
                                                class
                                                ="glyphicon glyphicon-off"> </span> Insert
                                            </button>

                                            <script>
                                                function updatefamil() {
                                                    var a = confirm('Are you sure to update?');
                                                    if (a == false) return a;
                                                    else {
                                                        var aa = '{{$birth_cer}}';
                                                        // alert(aa);
                                                        var tid = document.getElementById('active').value;
                                                        var tid1 = document.getElementById('income').value;
                                                        var tid2 = document.getElementById('field').value;
                                                        var tid3 = document.getElementById('spousename').value;
                                                        var tid4 = document.getElementById('maname').value;
                                                        var tid5 = document.getElementById('faname').value;
                                                        var tid6 = document.getElementById('males').value;
                                                        var tid7 = document.getElementById('females').value;
                                                        var tid8 = document.getElementById('childs').value;
                                                        // alert('akaka');
                                                        $.post('/admin/disabled_people/update/family/info', {
                                                                "_token": "{{ csrf_token() }}",
                                                                birth: aa,
                                                                active: tid,
                                                                income: tid1,
                                                                field: tid2,
                                                                spousename: tid3,
                                                                maname: tid4,
                                                                faname: tid5,
                                                                males: tid6,
                                                                females: tid7,
                                                                childs: tid8
                                                            }
                                                        ).done(function (data) {
                                                            alert('data updated succesfully');
                                                            location.reload();
                                                        }).fail(function () {
                                                            alert("error check your inserted data");
                                                        });

                                                    }
                                                };
                                            </script>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger btn-danger pull-left"
                                                data-dismiss="modal"><span class="glyphicon glyphicon-remove"> </span>
                                            Cancel
                                        </button>
                                        <script>
                                            $(document).ready(function () {
                                                $("#myBtn1").click(function () {
                                                    $("#myModal1").modal();
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </section>

            <section class="education_area pad" id="education">

                <div class="main_title">
                    <h2>
                        Education
                    </h2>
                </div>
                @if(sizeof($educations)==0)
                    <div align="center" class="col-md-6 wow fadeInUp animated">
                        <h1><p>Education Info Not Found</p></h1>
                    </div>

                    {{--<button type="button" class="btn btn-danger btn-sm" id="myBtn22">Insert</button>--}}

                <!-- Modal -->
                    {{--<div class="modal fade" id="myModal22" role="dialog">--}}
                    {{--<div class="modal-dialog">--}}

                    {{--<!-- Modal content-->--}}
                    {{--<div class="modal-content">--}}
                    {{--<div class="modal-header" style="padding:5px 5px;">--}}
                    {{--<button type="button" class="close" data-dismiss="modal">--}}
                    {{--&times--}}
                    {{--</button>--}}
                    {{--<h4>Insert Education Information</h4>--}}
                    {{--</div>--}}
                    {{--<span class="glyphicon glyphicon-lock"></span>--}}
                    {{--<div class="modal-body" style="padding:40px 50px;">--}}
                    {{--<form role="form">--}}
                    {{--<div class="form-group">--}}
                    {{--<label><span--}}
                    {{--class="glyphicon"></span>--}}
                    {{--School</label>--}}
                    {{--<input type="text" class="form-control" id="schoolname"--}}
                    {{--placeholder="School Name">--}}
                    {{--<label><span--}}
                    {{--class="glyphicon"></span>Passing Year--}}
                    {{--</label>--}}
                    {{--<input type="date" class="form-control" id="schoolpass"--}}
                    {{--placeholder="Passing Year">--}}
                    {{--<input type="text" class="form-control" id="schoolresult"--}}
                    {{--placeholder="Result">--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<label><span--}}
                    {{--class="glyphicon"></span>--}}
                    {{--College</label>--}}
                    {{--<input type="text" class="form-control" id="collegename"--}}
                    {{--placeholder="College Name">--}}
                    {{--<label><span--}}
                    {{--class="glyphicon"></span>Passing Year--}}
                    {{--</label>--}}
                    {{--<input type="date" class="form-control" id="collegepass"--}}
                    {{--placeholder="Passing Year">--}}
                    {{--<input type="text" class="form-control" id="collegeresult"--}}
                    {{--placeholder="Result">--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--<label><span--}}
                    {{--class="glyphicon"></span>--}}
                    {{--University</label>--}}
                    {{--<input type="text" class="form-control" id="universityname"--}}
                    {{--placeholder="University Name">--}}
                    {{--<label><span--}}
                    {{--class="glyphicon"></span>Passing Year--}}
                    {{--</label>--}}
                    {{--<input type="date" class="form-control" id="universitypass"--}}
                    {{--placeholder="Passing Year">--}}
                    {{--<input type="text" class="form-control" id="universityresult"--}}
                    {{--placeholder="Result">--}}
                    {{--</div>--}}
                    {{--<script>--}}
                    {{--function updateedu() {--}}
                    {{--var a = confirm('Are you sure to Insert?');--}}
                    {{--if (a == false) return a;--}}
                    {{--else {--}}
                    {{--var aa = '{{$birth_cer}}';--}}
                    {{--// alert(aa);--}}
                    {{--var tid = document.getElementById('schoolname').value;--}}
                    {{--var tid1 = document.getElementById('schoolpass').value;--}}
                    {{--var tid2 = document.getElementById('schoolresult').value;--}}
                    {{--var tid3 = document.getElementById('collegename').value;--}}
                    {{--var tid4 = document.getElementById('collegepass').value;--}}
                    {{--var tid5 = document.getElementById('collegeresult').value;--}}
                    {{--var tid6 = document.getElementById('universityname').value;--}}
                    {{--var tid7 = document.getElementById('universitypass').value;--}}
                    {{--var tid8 = document.getElementById('universityresult').value;--}}
                    {{--// alert('akaka');--}}
                    {{--$.post('/admin/disabled_people/insert/education/info', {--}}
                    {{--"_token": "{{ csrf_token() }}",--}}
                    {{--birth: aa,--}}
                    {{--sname: tid,--}}
                    {{--spyear: tid1,--}}
                    {{--sres: tid2,--}}
                    {{--college: tid3,--}}
                    {{--cpyear: tid4,--}}
                    {{--cres: tid5,--}}
                    {{--university: tid6,--}}
                    {{--upyear: tid7,--}}
                    {{--ures: tid8--}}
                    {{--}--}}
                    {{--).done(function (data) {--}}
                    {{--alert('data inserted succesfully');--}}
                    {{--location.reload();--}}
                    {{--}).fail(function () {--}}
                    {{--alert("error check your inserted data");--}}
                    {{--});--}}

                    {{--}--}}
                    {{--};--}}
                    {{--</script>--}}
                    {{--<button type="button" onclick="return updateedu()"--}}
                    {{--class="btn btn-success btn-block">--}}
                    {{--<span class="glyphicon glyphicon-off"></span> Insert--}}
                    {{--</button>--}}
                    {{--</form>--}}
                    {{--</div>--}}
                    {{--<div class="modal-footer">--}}
                    {{--<button type="submit"--}}
                    {{--class="btn btn-danger btn-danger pull-left"--}}
                    {{--data-dismiss="modal"><span--}}
                    {{--class="glyphicon glyphicon-remove"></span> Cancel--}}
                    {{--</button>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <script>
                        $(document).ready(function () {
                            $("#myBtn22").click(function () {
                                $("#myModal22").modal();
                            });
                        });
                    </script>
                @else
                    @foreach($educations as $education)

                        <div class="education_inner_area">

                            <div class="education_item wow fadeInUp animated" data-line="S">
                                <a href="#">
                                    <h4>
                                        School
                                    </h4>
                                </a>
                                <h4>
                                    {{ _('School Name: ').$education->school }}
                                </h4>
                                <p>
                                <h4>
                                    {{ _('Passing Year: ').$education->s_year  }}
                                </h4>
                                <h4>
                                    {{ _('Result: ').$education->s_res  }}
                                </h4>
                                <br>
                                <br>
                                <br>
                                </p>
                            </div>

                            @if($education->college!="")
                                <div class="education_item wow fadeInUp animated" data-line="C">
                                    <a href="#">
                                        <h4>
                                            College
                                        </h4>
                                    </a>
                                    <h4>
                                        {{ _('College Name: ').$education->college }}
                                    </h4>
                                    <p>
                                    <h4>
                                        {{ _('Passing Year: ').$education->c_year  }}
                                    </h4>
                                    <h4>
                                        {{ _('Result: ').$education->c_res  }}
                                    </h4>
                                    <br>
                                    <br>
                                    <br>
                                    </p>
                                </div>
                            @endif

                            @if($education->university!="")
                                <div class="education_item wow fadeInUp animated" data-line="U">
                                    <a href="#">
                                        <h4>
                                            University
                                        </h4>
                                    </a>
                                    <h4>
                                        {{ _('University Name: ').$education->university }}
                                    </h4>
                                    <p>
                                    <h4>
                                        {{ _('Passing Year: ').$education->u_year  }}
                                    </h4>
                                    <h4>
                                        {{ _('Result: ').$education->u_res  }}
                                    </h4>
                                    <br>
                                    <br>
                                    <br>
                                    </p>
                                </div>
                            @endif

                        </div>
                        <button type="button" class="btn btn-danger btn-sm" id="myBtn2">Update</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="padding:5px 5px;">
                                        <button type="button" class="close" data-dismiss="modal">
                                            &times;
                                        </button>
                                        <h4>Update Education Information</h4>
                                    </div>
                                    {{--<span class="glyphicon glyphicon-lock"></span>--}}
                                    <div class="modal-body" style="padding:40px 50px;">
                                        <form role="form">
                                            <div class="form-group">
                                                <label><span
                                                            class="glyphicon"></span>
                                                    School</label>
                                                <input type="text" class="form-control" id="schoolname"
                                                       placeholder="School Name">
                                                <label><span
                                                            class="glyphicon"></span>Passing Year
                                                </label>
                                                <input type="date" class="form-control" id="schoolpass"
                                                       placeholder="Passing Year">
                                                <input type="text" class="form-control" id="schoolresult"
                                                       placeholder="Result">
                                            </div>

                                            <div class="form-group">
                                                <label><span
                                                            class="glyphicon"></span>
                                                    College</label>
                                                <input type="text" class="form-control" id="collegename"
                                                       placeholder="College Name">
                                                <label><span
                                                            class="glyphicon"></span>Passing Year
                                                </label>
                                                <input type="date" class="form-control" id="collegepass"
                                                       placeholder="Passing Year">
                                                <input type="text" class="form-control" id="collegeresult"
                                                       placeholder="Result">
                                            </div>

                                            <div class="form-group">
                                                <label><span
                                                            class="glyphicon"></span>
                                                    University</label>
                                                <input type="text" class="form-control" id="universityname"
                                                       placeholder="University Name">
                                                <label><span
                                                            class="glyphicon"></span>Passing Year
                                                </label>
                                                <input type="date" class="form-control" id="universitypass"
                                                       placeholder="Passing Year">
                                                <input type="text" class="form-control" id="universityresult"
                                                       placeholder="Result">
                                            </div>
                                            <script>
                                                function updateedu() {
                                                    var a = confirm('Are you sure to update?');
                                                    if (a == false) return a;
                                                    else {
                                                        var aa = '{{$birth_cer}}';
                                                        // alert(aa);
                                                        var tid = document.getElementById('schoolname').value;
                                                        var tid1 = document.getElementById('schoolpass').value;
                                                        var tid2 = document.getElementById('schoolresult').value;
                                                        var tid3 = document.getElementById('collegename').value;
                                                        var tid4 = document.getElementById('collegepass').value;
                                                        var tid5 = document.getElementById('collegeresult').value;
                                                        var tid6 = document.getElementById('universityname').value;
                                                        var tid7 = document.getElementById('universitypass').value;
                                                        var tid8 = document.getElementById('universityresult').value;
                                                        // alert('akaka');
                                                        $.post('/admin/disabled_people/update/education/info', {
                                                                "_token": "{{ csrf_token() }}",
                                                                birth: aa,
                                                                sname: tid,
                                                                spyear: tid1,
                                                                sres: tid2,
                                                                college: tid3,
                                                                cpyear: tid4,
                                                                cres: tid5,
                                                                university: tid6,
                                                                upyear: tid7,
                                                                ures: tid8
                                                            }
                                                        ).done(function (data) {
                                                            alert('data updated succesfully');
                                                            location.reload();
                                                        }).fail(function () {
                                                            alert("error check your inserted data");
                                                        });

                                                    }
                                                };
                                            </script>
                                            <button type="button" onclick="return updateedu()"
                                                    class="btn btn-success btn-block">
                                                <span class="glyphicon glyphicon-off"></span> Update
                                            </button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit"
                                                class="btn btn-danger btn-danger pull-left"
                                                data-dismiss="modal"><span
                                                    class="glyphicon glyphicon-remove"></span> Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function () {
                                $("#myBtn2").click(function () {
                                    $("#myModal2").modal();
                                });
                            });
                        </script>
                    @endforeach
                @endif
            </section>


            <section class="service_area" id="service">
                <div class="main_title">
                    <h2>
                        Professional Info
                    </h2>
                </div>
                <div class="service_inner row">

                    @if(sizeof($prof)==0)
                        <center>
                            <div align="center" class="col-md-6 wow fadeInUp animated">
                                <h1><p>Professional Info Not Found</p></h1>
                            </div>
                        </center>
                        {{--<button type="button" class="btn btn-danger btn-sm" id="myBtn33">Insert</button>--}}

                    <!-- Modal -->
                        {{--<div class="modal fade" id="myModal33" role="dialog">--}}
                        {{--<div class="modal-dialog">--}}

                        {{--<!-- Modal content-->--}}
                        {{--<div class="modal-content">--}}
                        {{--<div class="modal-header" style="padding:5px 5px;">--}}
                        {{--<button type="button" class="close" data-dismiss="modal">--}}
                        {{--&times--}}
                        {{--</button>--}}
                        {{--<h4>Insert Professional Information</h4>--}}
                        {{--</div>--}}
                        {{--<span class="glyphicon glyphicon-lock"></span>--}}
                        {{--<div class="modal-body" style="padding:40px 50px;">--}}
                        {{--<form role="form">--}}
                        {{--<div class="form-group">--}}
                        {{--<label><span--}}
                        {{--class="glyphicon"></span>--}}
                        {{--Professional Info</label>--}}
                        {{--<input type="text" required class="form-control" id="occupation"--}}
                        {{--placeholder="Present Occupation">--}}
                        {{--<label><span--}}
                        {{--class="glyphicon"></span>Joining Date--}}
                        {{--</label>--}}
                        {{--<input type="date" class="form-control" id="joindate"--}}
                        {{--placeholder="Joining Date">--}}
                        {{--<input type="text" required class="form-control" id="dependencies"--}}
                        {{--placeholder="Dependencies On Him">--}}
                        {{--<input type="number" required class="form-control" id="mincome"--}}
                        {{--placeholder="Monthly Income">--}}
                        {{--<input type="text" class="form-control" id="pachieve"--}}
                        {{--placeholder="Professional Achievement">--}}
                        {{--</div>--}}
                        {{--<button type="button" onclick="return updateprof()"--}}
                        {{--class="btn btn-success btn-block">--}}
                        {{--<span class="glyphicon glyphicon-off"></span> Insert--}}
                        {{--</button>--}}
                        {{--<script>--}}
                        {{--//var a = document.getElementById('deleter');--}}
                        {{--function updateprof() {--}}
                        {{--var a = confirm('Are you sure to insert?');--}}
                        {{--if (a == false) return a;--}}
                        {{--else {--}}
                        {{--var aa = '{{$birth_cer}}';--}}
                        {{--// alert(aa);--}}
                        {{--var tid = document.getElementById('occupation').value;--}}
                        {{--var tid1 = document.getElementById('joindate').value;--}}
                        {{--var tid2 = document.getElementById('dependencies').value;--}}
                        {{--var tid3 = document.getElementById('mincome').value;--}}
                        {{--var tid4 = document.getElementById('pachieve').value;--}}
                        {{--// alert('akaka');--}}

                        {{--$.post('/admin/disabled_people/insert/prof/info', {--}}
                        {{--"_token": "{{ csrf_token() }}",--}}
                        {{--birth: aa,--}}
                        {{--occupation: tid,--}}
                        {{--joindate: tid1,--}}
                        {{--dependencies: tid2,--}}
                        {{--mincome: tid3,--}}
                        {{--pachieve: tid4,--}}
                        {{--}--}}
                        {{--).done(function (data) {--}}
                        {{--alert('data inserted succesfully');--}}
                        {{--location.reload();--}}
                        {{--}).fail(function () {--}}
                        {{--alert("error check your inserted data");--}}
                        {{--});--}}
                        {{--}--}}
                        {{--};--}}
                        {{--</script>--}}
                        {{--</form>--}}
                        {{--</div>--}}
                        {{--<div class="modal-footer">--}}
                        {{--<button type="submit"--}}
                        {{--class="btn btn-danger btn-danger pull-left"--}}
                        {{--data-dismiss="modal"><span--}}
                        {{--class="glyphicon glyphicon-remove"></span> Cancel--}}
                        {{--</button>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        <script>
                            $(document).ready(function () {
                                $("#myBtn33").click(function () {
                                    $("#myModal33").modal();
                                });
                            });
                        </script>
                    @else
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


                        <button type="button" class="btn btn-danger btn-sm" id="myBtn3">Update</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal3" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="padding:5px 5px;">
                                        <button type="button" class="close" data-dismiss="modal">
                                            &times;
                                        </button>
                                        <h4>Update Professional Information</h4>
                                    </div>
                                    <span class="glyphicon glyphicon-lock"></span>
                                    <div class="modal-body" style="padding:40px 50px;">
                                        <form role="form">
                                            <div class="form-group">
                                                <label><span
                                                            class="glyphicon"></span>
                                                    Professional Info</label>
                                                <input type="text" class="form-control" id="occupation"
                                                       placeholder="Present Occupation">
                                                <label><span
                                                            class="glyphicon"></span>Joining Date
                                                </label>
                                                <input type="date" class="form-control" id="joindate"
                                                       placeholder="Joining Date">
                                                <input type="text" class="form-control" id="dependencies"
                                                       placeholder="Dependencies On Him">
                                                <input type="number" class="form-control" id="mincome"
                                                       placeholder="Monthly Income">
                                                <input type="text" class="form-control" id="pachieve"
                                                       placeholder="Professional Achievement">
                                            </div>
                                            <button type="button" onclick="return updateprof()"
                                                    class="btn btn-success btn-block">
                                                <span class="glyphicon glyphicon-off"></span> Update
                                            </button>
                                            <script>
                                                //var a = document.getElementById('deleter');
                                                function updateprof() {
                                                    var a = confirm('Are you sure to update?');
                                                    if (a == false) return a;
                                                    else {
                                                        var aa = '{{$birth_cer}}';
                                                        // alert(aa);
                                                        var tid = document.getElementById('occupation').value;
                                                        var tid1 = document.getElementById('joindate').value;
                                                        var tid2 = document.getElementById('dependencies').value;
                                                        var tid3 = document.getElementById('mincome').value;
                                                        var tid4 = document.getElementById('pachieve').value;
                                                        // alert('akaka');
                                                        $.post('/admin/disabled_people/update/prof/info', {
                                                                "_token": "{{ csrf_token() }}",
                                                                birth: aa,
                                                                occupation: tid,
                                                                joindate: tid1,
                                                                dependencies: tid2,
                                                                mincome: tid3,
                                                                pachieve: tid4,
                                                            }
                                                        ).done(function (data) {
                                                            alert('data updated succesfully');
                                                            location.reload();
                                                        }).fail(function () {
                                                            alert("error check your inserted data");
                                                        });

                                                    }
                                                };
                                            </script>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit"
                                                class="btn btn-danger btn-danger pull-left"
                                                data-dismiss="modal"><span
                                                    class="glyphicon glyphicon-remove"></span> Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function () {
                                $("#myBtn3").click(function () {
                                    $("#myModal3").modal();
                                });
                            });
                        </script>
                    @endif
                </div>
            </section>


            <section class="portfolio_area pad" id="portfolio">
                <div class="main_title">
                    <h2>
                        Medical History
                    </h2>
                </div>
                <div class="row">
                    @if(sizeof($med_cur)==0)
                        <center>
                            <div align="center" class="col-md-6 wow fadeInUp animated">
                                <h1><p>Medical Info Not Found</p></h1>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" id="myBtn44">Insert</button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal44" role="dialog">
                                <div class="modal-dialog">

                                    <div class="modal-content">
                                        <div class="modal-header" style="padding:5px 5px;">
                                            <button type="button" class="close" data-dismiss="modal">
                                                &times;
                                            </button>
                                            <h4>Insert Medical History</h4>
                                        </div>
                                        <div class="modal-body" style="padding:40px 50px;">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label><span
                                                                class="glyphicon"></span>
                                                        Medical History</label>
                                                    <input type="text" class="form-control" id="consultant"
                                                           placeholder="Consultant">
                                                    <input type="text" class="form-control" id="hospital"
                                                           placeholder="Hospital">
                                                    <input type="number" class="form-control" id="tcost"
                                                           placeholder="Treatment Cost">
                                                    <input type="text" class="form-control" id="ttype"
                                                           placeholder="Treatment Type">
                                                    <input type="text" class="form-control" id="medichine"
                                                           placeholder="Medichines">
                                                    <label><span
                                                                class="glyphicon"></span>Treatment Start Date
                                                    </label>
                                                    <input type="date" class="form-control" id="tsdate"
                                                           placeholder="Treatment Start Date">
                                                    <label><span
                                                                class="glyphicon"></span>Treatment End Date
                                                    </label>
                                                    <input type="date" class="form-control" id="tedate"
                                                           placeholder="Treatment End Date">
                                                </div>
                                                <button type="button" onclick="return updatemed()"
                                                        class="btn btn-success btn-block">
                                                    <span class="glyphicon glyphicon-off"></span> Insert
                                                </button>
                                                <script>
                                                    //var a = document.getElementById('deleter');
                                                    function updatemed() {
                                                        var a = confirm('Are you sure to insert?');
                                                        if (a == false) return a;
                                                        else {
                                                            var aa = '{{$birth_cer}}';
                                                            // alert(aa);
                                                            var tid = document.getElementById('consultant').value;
                                                            var tid1 = document.getElementById('hospital').value;
                                                            var tid2 = document.getElementById('tcost').value;
                                                            var tid3 = document.getElementById('ttype').value;
                                                            var tid4 = document.getElementById('medichine').value;
                                                            var tid5 = document.getElementById('tsdate').value;
                                                            var tid6 = document.getElementById('tedate').value;
                                                            // alert('akaka');
                                                            $.post('/admin/disabled_people/insert/medical/history', {
                                                                    "_token": "{{ csrf_token() }}",
                                                                    birth: aa,
                                                                    consultant: tid,
                                                                    hospital: tid1,
                                                                    tcost: tid2,
                                                                    ttype: tid3,
                                                                    medichine: tid4,
                                                                    tsdate: tid5,
                                                                    tedate: tid6
                                                                }
                                                            ).done(function (data) {
                                                                if (data == 'ok') {
                                                                    alert('data inserted succesfully');
                                                                    location.reload();
                                                                }
                                                                else {
                                                                    alert('failed please check your data');
                                                                }
                                                            }).fail(function () {
                                                                alert("error check your inserted data");
                                                            });
                                                        }
                                                    };
                                                </script>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit"
                                                    class="btn btn-danger btn-danger pull-left"
                                                    data-dismiss="modal"><span
                                                        class="glyphicon glyphicon-remove"></span> Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $(document).ready(function () {
                                    $("#myBtn44").click(function () {
                                        $("#myModal44").modal();
                                    });
                                });
                            </script>
                        </center>
                    @else
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

                        <button type="button" class="btn btn-danger btn-sm" id="myBtn4">Update</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal4" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="padding:5px 5px;">
                                        <button type="button" class="close" data-dismiss="modal">
                                            &times
                                        </button>
                                        <h4>Update Medical History</h4>
                                    </div>
                                    {{--<span class="glyphicon glyphicon-lock"></span>--}}
                                    <div class="modal-body" style="padding:40px 50px;">
                                        <form role="form">
                                            <div class="form-group">
                                                <label><span
                                                            class="glyphicon"></span>
                                                    Medical History</label>
                                                <input type="text" class="form-control" id="consultant"
                                                       placeholder="Consultant">
                                                <input type="text" class="form-control" id="hospital"
                                                       placeholder="Hospital">
                                                <input type="number" class="form-control" id="tcost"
                                                       placeholder="Treatment Cost">
                                                <input type="text" class="form-control" id="ttype"
                                                       placeholder="Treatment Type">
                                                <input type="text" class="form-control" id="medichine"
                                                       placeholder="Medichines">
                                                <label><span
                                                            class="glyphicon"></span>Treatment Start Date
                                                </label>
                                                <input type="date" class="form-control" id="tsdate"
                                                       placeholder="Treatment Start Date">
                                                <label><span
                                                            class="glyphicon"></span>Treatment End Date
                                                </label>
                                                <input type="date" class="form-control" id="tedate"
                                                       placeholder="Treatment End Date">
                                            </div>
                                            <button type="button" onclick="return updatemed()"
                                                    class="btn btn-success btn-block">
                                                <span class="glyphicon glyphicon-off"></span> Update
                                            </button>
                                            <script>
                                                //var a = document.getElementById('deleter');
                                                function updatemed() {
                                                    var a = confirm('Are you sure to update?');
                                                    if (a == false) return a;
                                                    else {
                                                        var aa = '{{$birth_cer}}';
                                                        // alert(aa);
                                                        var tid = document.getElementById('consultant').value;
                                                        var tid1 = document.getElementById('hospital').value;
                                                        var tid2 = document.getElementById('tcost').value;
                                                        var tid3 = document.getElementById('ttype').value;
                                                        var tid4 = document.getElementById('medichine').value;
                                                        var tid5 = document.getElementById('tsdate').value;
                                                        var tid6 = document.getElementById('tedate').value;
                                                        // alert('akaka');
                                                        $.post('/admin/disabled_people/update/medical/history', {
                                                                "_token": "{{ csrf_token() }}",
                                                                birth: aa,
                                                                consultant: tid,
                                                                hospital: tid1,
                                                                tcost: tid2,
                                                                ttype: tid3,
                                                                medichine: tid4,
                                                                tsdate: tid5,
                                                                tedate: tid6
                                                            }
                                                        ).done(function (data) {
                                                            alert('data updated succesfully');
                                                            location.reload();
                                                        }).fail(function () {
                                                            alert("error check your inserted data");
                                                        });

                                                    }
                                                };
                                            </script>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit"
                                                class="btn btn-danger btn-danger pull-left"
                                                data-dismiss="modal"><span
                                                    class="glyphicon glyphicon-remove"></span> Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function () {
                                $("#myBtn4").click(function () {
                                    $("#myModal4").modal();
                                });
                            });
                        </script>
                    @endif
                </div>

            </section>


            <section class="portfolio_area pad" id="news">
                <div class="main_title">
                    <h2>
                        Health Information
                    </h2>
                </div>

                <div class="row">
                    @if(sizeof($health_info)==0)
                        <center>
                            <div align="center" class="col-md-6 wow fadeInUp animated">
                                <h1><p>Health Info Not Found</p></h1>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm" id="myBtn5">Insert</button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal5" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header" style="padding:5px 5px;">
                                            <button type="button" class="close" data-dismiss="modal">
                                                &times;
                                            </button>
                                            <h4>Insert Health Information</h4>
                                        </div>
                                        {{--<span class="glyphicon glyphicon-lock"></span>--}}
                                        <div class="modal-body" style="padding:40px 50px;">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label><span
                                                                class="glyphicon"></span>
                                                        Health Information</label>
                                                    <input type="text" class="form-control" id="bloodgrp"
                                                           placeholder="Blood Group">
                                                    <input type="number" class="form-control" id="bloodp"
                                                           placeholder="Blood Pressure">
                                                    <input type="number" class="form-control" id="hbeat"
                                                           placeholder="Average HeartBeat Rate">
                                                    <input type="text" class="form-control" id="drugs"
                                                           placeholder="Continuous Used Drugs">
                                                    <input type="number" class="form-control" id="height"
                                                           placeholder="Height">
                                                    <input type="number" class="form-control" id="weight"
                                                           placeholder='Weight'>
                                                </div>
                                                <button type="button" onclick="return updatehealth()"
                                                        class="btn btn-success btn-block">
                                                    <span class="glyphicon glyphicon-off"></span> Insert
                                                </button>

                                                <script>
                                                    //var a = document.getElementById('deleter');
                                                    function updatehealth() {
                                                        var a = confirm('Are you sure to Insert?');
                                                        if (a == false) return a;
                                                        else {
                                                            var aa = '{{$birth_cer}}';
                                                            // alert(aa);
                                                            var tid = document.getElementById('bloodgrp').value;
                                                            var tid1 = document.getElementById('bloodp').value;
                                                            var tid2 = document.getElementById('hbeat').value;
                                                            var tid3 = document.getElementById('drugs').value;
                                                            var tid4 = document.getElementById('height').value;
                                                            var tid5 = document.getElementById('weight').value;
                                                            // alert('akaka');
                                                            $.post('/admin/disabled_people/insert/health', {
                                                                    "_token": "{{ csrf_token() }}",
                                                                    birth: aa,
                                                                    bloodgrp: tid,
                                                                    bloodp: tid1,
                                                                    hbeat: tid2,
                                                                    drugs: tid3,
                                                                    height: tid4,
                                                                    weight: tid5,

                                                                }
                                                            ).done(function (data) {
                                                                alert('data updated succesfully');
                                                                {{--window.location.href = '{{route('admin.show.disabled_people')}}';--}}
                                                                location.reload();
                                                            }).fail(function () {
                                                                alert("error check your inserted data");
                                                            });
                                                            {{--window.location('{{route('admin.show.disabled_people')}}');--}}
                                                            // location.reload();
                                                        }
                                                    };
                                                </script>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit"
                                                    class="btn btn-danger btn-danger pull-left"
                                                    data-dismiss="modal"><span
                                                        class="glyphicon glyphicon-remove"></span> Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $(document).ready(function () {
                                    $("#myBtn5").click(function () {
                                        $("#myModal5").modal();
                                    });
                                });
                            </script>
                        </center>
                    @else
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

                        <button type="button" class="btn btn-danger btn-sm" id="myBtn5">Update</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal5" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="padding:5px 5px;">
                                        <button type="button" class="close" data-dismiss="modal">
                                            &times;
                                        </button>
                                        <h4>Update Health Information</h4>
                                    </div>
                                    {{--<span class="glyphicon glyphicon-lock"></span>--}}
                                    <div class="modal-body" style="padding:40px 50px;">
                                        <form role="form">
                                            <div class="form-group">
                                                <label><span
                                                            class="glyphicon"></span>
                                                    Health Information</label>
                                                <input type="text" class="form-control" id="bloodgrp" required
                                                       placeholder="Blood Group">
                                                <input type="number" class="form-control" id="bloodp" required
                                                       placeholder="Blood Pressure">
                                                <input type="number" class="form-control" id="hbeat" required
                                                       placeholder="Average HeartBeat Rate">
                                                <input type="text" class="form-control" id="drugs"
                                                       placeholder="Continuous Used Drugs">
                                                <input type="number" class="form-control" id="height" required
                                                       placeholder="Height">
                                                <input type="number" class="form-control" id="weight" required
                                                       placeholder='Weight'>
                                            </div>
                                            <button type="button" onclick="return updatehealth()"
                                                    class="btn btn-success btn-block">
                                                <span class="glyphicon glyphicon-off"></span> Update
                                            </button>

                                            <script>
                                                //var a = document.getElementById('deleter');
                                                function updatehealth() {
                                                    var a = confirm('Are you sure to update?');
                                                    if (a == false) return a;
                                                    else {
                                                        var aa = '{{$birth_cer}}';
                                                        // alert(aa);
                                                        var tid = document.getElementById('bloodgrp').value;
                                                        var tid1 = document.getElementById('bloodp').value;
                                                        var tid2 = document.getElementById('hbeat').value;
                                                        var tid3 = document.getElementById('drugs').value;
                                                        var tid4 = document.getElementById('height').value;
                                                        var tid5 = document.getElementById('weight').value;
                                                        // alert('akaka');
                                                        $.post('/admin/disabled_people/update/health', {
                                                                "_token": "{{ csrf_token() }}",
                                                                birth: aa,
                                                                bloodgrp: tid,
                                                                bloodp: tid1,
                                                                hbeat: tid2,
                                                                drugs: tid3,
                                                                height: tid4,
                                                                weight: tid5,

                                                            }
                                                        ).done(function (data) {
                                                            alert('data updated succesfully');
                                                            {{--window.location.href = '{{route('admin.show.disabled_people')}}';--}}
                                                            location.reload();
                                                        }).fail(function () {
                                                            alert("error check your inserted data");
                                                        });
                                                        {{--window.location('{{route('admin.show.disabled_people')}}');--}}
                                                        // location.reload();
                                                    }
                                                };
                                            </script>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit"
                                                class="btn btn-danger btn-danger pull-left"
                                                data-dismiss="modal"><span
                                                    class="glyphicon glyphicon-remove"></span> Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function () {
                                $("#myBtn5").click(function () {
                                    $("#myModal5").modal();
                                });
                            });
                        </script>
                    @endif
                </div>
            </section>


            <section class="contact_area pad" id="contact">
                <div class="main_title">
                    <h2>
                        Equipment
                    </h2>
                </div>
                <div class="row">
                    @if(sizeof($equip)==0)
                        <center>
                            <div align="center" class="col-md-6 wow fadeInUp animated">
                                <h1><p>Equipment Info Not Found</p></h1>
                            </div>
                        </center>
                        <button type="button" class="btn btn-danger btn-sm" id="myBtn6">Insert</button>

                        <!-- Modal -->
                        {{--<div class="modal fade" id="myModal6" role="dialog">--}}
                            {{--<div class="modal-dialog">--}}

                                {{--<!-- Modal content-->--}}
                                {{--<div class="modal-content">--}}
                                    {{--<div class="modal-header" style="padding:5px 5px;">--}}
                                        {{--<button type="button" class="close" data-dismiss="modal">--}}
                                            {{--&times;--}}
                                        {{--</button>--}}
                                        {{--<h4>Insert Equipment Info</h4>--}}
                                    {{--</div>--}}
                                    {{--<span class="glyphicon glyphicon-lock"></span>--}}
                                    {{--<div class="modal-body" style="padding:40px 50px;">--}}
                                        {{--<form role="form">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label><span--}}
                                                            {{--class="glyphicon"></span>--}}
                                                    {{--Equipment</label>--}}
                                                {{--<input type="text" class="form-control" id="etype" required--}}
                                                       {{--placeholder="Equipment Type">--}}
                                                {{--<input type="number" class="form-control" id="ecost" required--}}
                                                       {{--placeholder="Equipment Cost">--}}
                                                {{--<label><span--}}
                                                            {{--class="glyphicon"></span>--}}
                                                    {{--Equipment Issue Date</label>--}}
                                                {{--<input type="date" class="form-control" id="eidate" required--}}
                                                       {{--placeholder="Issue Date">--}}
                                                {{--<input type="text" class="form-control" id="epc" required--}}
                                                       {{--placeholder="Present Condition">--}}
                                            {{--</div>--}}
                                            {{--<button type="button" onclick="return updateeqip()"--}}
                                                    {{--class="btn btn-success btn-block">--}}
                                                {{--<span class="glyphicon glyphicon-off"></span> Insert--}}
                                            {{--</button>--}}
                                            {{--<script>--}}
                                                {{--//var a = document.getElementById('deleter');--}}
                                                {{--function updateeqip() {--}}
                                                    {{--var a = confirm('Are you sure Insert?');--}}
                                                    {{--if (a == false) return a;--}}
                                                    {{--else {--}}
                                                        {{--var aa = '{{$birth_cer}}';--}}
                                                        {{--// alert(aa);--}}
                                                        {{--var tid = document.getElementById('etype').value;--}}
                                                        {{--var tid1 = document.getElementById('ecost').value;--}}
                                                        {{--var tid2 = document.getElementById('eidate').value;--}}
                                                        {{--var tid3 = document.getElementById('epc').value;--}}
                                                        {{--// alert('akaka');--}}
                                                        {{--$.post('/admin/disabled_people/insert/equipment', {--}}
                                                                {{--"_token": "{{ csrf_token() }}",--}}
                                                                {{--birth: aa,--}}
                                                                {{--etype: tid,--}}
                                                                {{--ecost: tid1,--}}
                                                                {{--eidate: tid2,--}}
                                                                {{--epc: tid3,--}}

                                                            {{--}--}}
                                                        {{--).done(function (data) {--}}
                                                            {{--alert('data Inserted succesfully');--}}
                                                            {{--window.location.href = '{{route('admin.show.disabled_people')}}';--}}
                                                            {{--location.reload();--}}
                                                        {{--}).fail(function () {--}}
                                                            {{--alert("error check your inserted data");--}}
                                                        {{--});--}}
                                                        {{--window.location('{{route('admin.show.disabled_people')}}');--}}
                                                        {{--// location.reload();--}}
                                                    {{--}--}}
                                                {{--};--}}
                                            {{--</script>--}}
                                        {{--</form>--}}
                                    {{--</div>--}}
                                    {{--<div class="modal-footer">--}}
                                        {{--<button type="submit"--}}
                                                {{--class="btn btn-danger btn-danger pull-left"--}}
                                                {{--data-dismiss="modal"><span--}}
                                                    {{--class="glyphicon glyphicon-remove"></span> Cancel--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <script>
                            $(document).ready(function () {
                                $("#myBtn6").click(function () {
                                    $("#myModal6").modal();
                                });
                            });
                        </script>
                    @else
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

                        {{--<button type="button" class="btn btn-danger btn-sm" id="myBtn6">Update</button>--}}

                    <!-- Modal -->
                        {{--<div class="modal fade" id="myModal6" role="dialog">--}}
                        {{--<div class="modal-dialog">--}}

                        {{--<!-- Modal content-->--}}
                        {{--<div class="modal-content">--}}
                        {{--<div class="modal-header" style="padding:5px 5px;">--}}
                        {{--<button type="button" class="close" data-dismiss="modal">--}}
                        {{--&times--}}
                        {{--</button>--}}
                        {{--<h4>Update Equipment Info</h4>--}}
                        {{--</div>--}}
                        {{--<div class="modal-body" style="padding:40px 50px;">--}}
                        {{--<form role="form">--}}
                        {{--<div class="form-group">--}}
                        {{--<label><span--}}
                        {{--class="glyphicon"></span>--}}
                        {{--Equipment</label>--}}
                        {{--<input type="text" class="form-control" id="etype"--}}
                        {{--placeholder="Equipment Type">--}}
                        {{--<input type="number" class="form-control" id="ecost"--}}
                        {{--placeholder="Equipment Cost">--}}
                        {{--<label><span--}}
                        {{--class="glyphicon"></span>--}}
                        {{--Equipment Issue Date</label>--}}
                        {{--<input type="date" class="form-control" id="eidate"--}}
                        {{--placeholder="Issue Date">--}}
                        {{--<input type="text" class="form-control" id="epc"--}}
                        {{--placeholder="Present Condition">--}}
                        {{--</div>--}}
                        {{--<button type="button" onclick="return updateeqip()"--}}
                        {{--class="btn btn-success btn-block">--}}
                        {{--<span class="glyphicon glyphicon-off"></span> Update--}}
                        {{--</button>--}}
                        {{--<script>--}}
                        {{--//var a = document.getElementById('deleter');--}}
                        {{--function updateeqip() {--}}
                        {{--var a = confirm('Are you sure to Add this training?');--}}
                        {{--if (a == false) return a;--}}
                        {{--else {--}}
                        {{--var aa = '{{$birth_cer}}';--}}
                        {{--// alert(aa);--}}
                        {{--var tid = document.getElementById('etype').value;--}}
                        {{--var tid1 = document.getElementById('ecost').value;--}}
                        {{--var tid2 = document.getElementById('eidate').value;--}}
                        {{--var tid3 = document.getElementById('epc').value;--}}
                        {{--// alert('akaka');--}}
                        {{--$.post('/admin/disabled_people/update/equipment', {--}}
                        {{--"_token": "{{ csrf_token() }}",--}}
                        {{--birth: aa,--}}
                        {{--etype: tid,--}}
                        {{--ecost: tid1,--}}
                        {{--eidate: tid2,--}}
                        {{--epc: tid3,--}}

                        {{--}--}}
                        {{--).done(function (data) {--}}
                        {{--alert('data updated succesfully');--}}
                        {{--window.location.href = '{{route('admin.show.disabled_people')}}';--}}
                        {{--location.reload();--}}
                        {{--}).fail(function () {--}}
                        {{--alert("error check your inserted data");--}}
                        {{--});--}}
                        {{--window.location('{{route('admin.show.disabled_people')}}');--}}
                        {{--// location.reload();--}}
                        {{--}--}}
                        {{--};--}}
                        {{--</script>--}}
                        {{--</form>--}}
                        {{--</div>--}}
                        {{--<div class="modal-footer">--}}
                        {{--<button type="submit"--}}
                        {{--class="btn btn-danger btn-danger pull-left"--}}
                        {{--data-dismiss="modal"><span--}}
                        {{--class="glyphicon glyphicon-remove"></span> Cancel--}}
                        {{--</button>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        <script>
                            $(document).ready(function () {
                                $("#myBtn6").click(function () {
                                    $("#myModal6").modal();
                                });
                            });
                        </script>
                    @endif
                </div>
            </section>
            <section class="contact_area pad" id="nuru">
                <div class="main_title">
                    <h2>
                        Attached Training
                    </h2>
                </div>
                <div class="row">
                    @if(sizeof($train)==0)
                        <center>
                            <div align="center" class="col-md-6 wow fadeInUp animated">
                                <h1><p>Training info Not Found</p></h1>
                            </div>
                        </center>

                    @else

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
                    @endif

                    <button type="button" class="btn btn-danger btn-sm" id="myBtn7">Add a Training</button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal7" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="padding:5px 5px;">
                                    <button type="button" class="close" data-dismiss="modal">
                                        &times
                                    </button>
                                    <h4>Attachted Training</h4>
                                </div>
                                {{--<span class="glyphicon glyphicon-lock"></span>--}}
                                <div class="modal-body" style="padding:40px 50px;">
                                    <form role="form">
                                        <div class="form-group">
                                            <label><span
                                                        class="glyphicon"></span>
                                                Training</label>
                                            <input type="text" class="form-control" id="training"
                                                   placeholder="Training ID">
                                        </div>
                                        <button type="button" onclick="return addtraining()"
                                                class="btn btn-success btn-block">
                                            <span class="glyphicon glyphicon-off"></span> Add a Training
                                        </button>
                                        <script>
                                            //var a = document.getElementById('deleter');
                                            function addtraining() {
                                                var a = confirm('Are you sure to Add this training?');
                                                if (a == false) return a;
                                                else {
                                                    var aa = '{{$birth_cer}}';
                                                    // alert(aa);
                                                    var tid = document.getElementById('training').value;
                                                    $.post('/admin/disabled_people/add/training', {
                                                            "_token": "{{ csrf_token() }}",
                                                            birth: aa,
                                                            training: tid
                                                        }
                                                    ).done(function (data) {
                                                        alert('Training Added succesful');
                                                        {{--window.location.href = '{{route('admin.show.disabled_people')}}';--}}
                                                        location.reload();
                                                    }).fail(function () {
                                                        alert("error check if there is such training id");
                                                    });
                                                    {{--window.location('{{route('admin.show.disabled_people')}}');--}}
                                                }
                                            };
                                        </script>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit"
                                            class="btn btn-danger btn-danger pull-left"
                                            data-dismiss="modal"><span
                                                class="glyphicon glyphicon-remove"></span> Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        $(document).ready(function () {
                            $("#myBtn7").click(function () {
                                $("#myModal7").modal();
                            });
                        });
                    </script>

                </div>
            </section>


            <div class="mapBox row m0" data-lat="37.3818288" data-lon="-122.0658212" data-zoom="13" id="mapBox">
            </div>
            <!--================End Map Area =================-->
        </div>
    </div>
    <!--================End Total container Area =================-->
    <!--================footer Area =================-->
    <footer class="footer_area">
        <div class="footer_inner">
            <div class="container">
            </div>
        </div>
        <div class="footer_copyright">
            <div class="container">
                <div class="pull-left">
                    <h5>
                    </h5>
                </div>
                <div class="pull-right">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="#about">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="#skill">
                                Family Info
                            </a>
                        </li>
                        <li>
                            <a href="#education">
                                Educational Info
                            </a>
                        </li>
                        <li>
                            <a href="#service">
                                Professional Info
                            </a>
                        </li>
                        <li>
                            <a href="#portfolio">
                                Medical History
                            </a>
                        </li>
                        <li>
                            <a href="#news">
                                Health Information
                            </a>
                        </li>
                        <li>
                            <a href="#contact">
                                Equipment
                            </a>
                        </li>
                        <li>
                            <a href="#nuru">
                                Attached Training
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </body>
@endforeach
</html>