<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}">

    <!-- SEO
      ================================================== -->
    <title>Admin Dashboard Register a Employee</title>
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
<style>
    .modal-header, h4, .close {
        background-color: #e6a871;
        color: white !important;
        text-align: center;
        font-size: 30px;
    }

    .modal-footer {
        background-color: #f9f9f9;
    }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
                        <a class="active"  href="{{ route('dashboard.messages')  }}"><p
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
        <br>
        <br>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main scroll-page">

            <section id="portfolio" class="section wow fadeInUp">
                <div class="container-section">
                    <div class="row">
                        <h4>Request And Messages</h4>
                        <br>
                        <br>
                    </div>
                    <div style="clear:both;"></div>
                    <div id="portfolio-page">
                        @foreach($persons as $person)
                            <div class="tile scale-anm web all">
                                <a id="{{ $person->birth_cer  }}" onclick="modall(this)" href="#"> <img
                                            src="{{__('/uploads/person/').$person->image_loc}}" alt="image"/></a>
                            </div>
                            {{--<p>{{$person->pname}}</p>--}}
                        @endforeach


                        <div class="modal fade" id="myModal6" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="padding:5px 5px;">
                                        <button type="button" class="close" data-dismiss="modal">
                                            &times
                                        </button>
                                        <h4>Show Request Content</h4>
                                    </div>
                                    <div class="modal-body" style="padding:40px 50px;">
                                        <div class="form-group">
                                            <label>Subject :</label>
                                            <label id="subject"><span
                                                        class="glyphicon"></span>
                                                Requested Equipment</label>
                                            <br>
                                            <br>
                                            <label>Message: </label>
                                            <label id="message"><span
                                                        class="glyphicon"></span>
                                                Message: </label>
                                        </div>
                                        <button id="btn1" type="button" onclick=""
                                                class="btn btn-success btn-block">
                                            <span class="glyphicon glyphicon-off"></span> Show This Person
                                        </button>
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
                            function modall(anchor) {
                                // alert(anchor.id);
                                var aa = anchor.id;
                                $.post('/admin/request/ereq', {
                                        "_token": "{{ csrf_token() }}",
                                        birth: aa,
                                    }
                                ).done(function (data) {
                                    var jsondata = JSON.stringify(data);
                                    jsondata = JSON.parse(jsondata);
                                    // console.log(jsondata['req']['etype'] + ' ' + jsondata['req']['message']);
                                    document.getElementById('subject').innerHTML = jsondata['req']['etype'];
                                    document.getElementById('message').innerHTML = jsondata['req']['message'];
                                    $('#btn1').click(function () {
                                        // alert('lala');
                                        @foreach($persons as $person)
                                        window.open('{{ __('/admin/show/disabled_people/') }}' + anchor.id);
                                        @endforeach
                                    });
                                    // alert('data catched');
                                }).fail(function () {
                                    alert("error");
                                });
                                $("#myModal6").modal();
                            }
                        </script>

                        @foreach($mpersons as $person)
                            <div class="tile scale-anm bcards all">
                                <a id="{{ $person->birth_cer.__('1')  }}" onclick="modal2(this)"> <img
                                            src="{{__('/uploads/person/').$person->image_loc}}" alt="image"/></a>
                            </div>
                            {{--<p>{{$person->pname}}</p>--}}
                        @endforeach

                        <div class="modal fade" id="myModal7" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="padding:5px 5px;">
                                        <button type="button" class="close" data-dismiss="modal">
                                            &times
                                        </button>
                                        <h4>Show Request Content</h4>
                                    </div>
                                    <div class="modal-body" style="padding:40px 50px;">
                                        <div class="form-group">
                                            <label>Subject :</label>
                                            <label id="subject1"><span
                                                        class="glyphicon"></span>
                                                Subject</label>
                                            <br>
                                            <br>
                                            <label>Amount :</label>
                                            <label id="amount"><span
                                                        class="glyphicon"></span>
                                                Amount</label>
                                            <br>
                                            <br>
                                            <label>Message: </label>
                                            <label id="message1"><span
                                                        class="glyphicon"></span>
                                                Message: </label>
                                        </div>
                                        <button id="myBtn2" type="button"
                                                class="btn btn-success btn-block">
                                            <span class="glyphicon glyphicon-off"></span> Show This Person
                                        </button>
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
                            function modal2(anchor) {
                                // alert(anchor.id);
                                var aa = anchor.id;
                                $.post('/admin/request/areq', {
                                        "_token": "{{ csrf_token() }}",
                                        birth: aa,
                                    }
                                ).done(function (data) {
                                    var jsondata = JSON.stringify(data);
                                    jsondata = JSON.parse(jsondata);
                                    // console.log(jsondata['req']['etype'] + ' ' + jsondata['req']['message']);
                                    document.getElementById('subject1').innerHTML = jsondata['req']['subject'];
                                    document.getElementById('amount').innerHTML = jsondata['req']['amount'];
                                    document.getElementById('message1').innerHTML = jsondata['req']['message'];
                                    $('#myBtn2').click(function () {
                                        // alert('lalal');
                                        window.open('{{ __('/admin/show/disabled_people/') }}' + anchor.id.substr(0, anchor.id.length - 1));
                                    });
                                    // alert('data catched');
                                }).fail(function () {
                                    alert("error");
                                });
                                $("#myModal7").modal();
                            }
                        </script>


                    </div>

                    <div style="clear:both;"></div>
                </div>
            </section>


        </div>
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




