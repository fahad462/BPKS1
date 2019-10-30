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
<div class="flash-message">
    @foreach (['success'] as $msg)
        @if(Session::has('alert-' . $msg))
            <script>
                alert("Person Data Added Succesfully");
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
<script>
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<div class="col-md-1">
    {{--<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>--}}
    <script>
        function changess() {
            var e = document.getElementById("isemployee");
            var val = e.options[e.selectedIndex].value;
            var flag = true;
            //alert(val);
            if (val == 'No') {
                //alert(':)');
                document.getElementById("acc-no").disabled = true;
                document.getElementById("salary").disabled = true;
                document.getElementById("employee-id").disabled = true;
                document.getElementById("join-date").disabled = true;
                document.getElementById("join-date").removeAttribute("required");
                document.getElementById("employee-id").removeAttribute("required");
                document.getElementById("salary").removeAttribute("required");
                flag = false;
            }
            else {
                document.getElementById("acc-no").disabled = false;
                document.getElementById("salary").disabled = false;
                document.getElementById("employee-id").disabled = false;
                document.getElementById("join-date").disabled = false;
                document.getElementById("join-date").required = true;
                document.getElementById("employee-id").required = true;
                document.getElementById("salary").required = true;
            }
        }

        function changes() {
            var e = document.getElementById("isdisabledpeople");
            var val = e.options[e.selectedIndex].value;
            var flag = true;
            //alert(val);
            if (val == 'No') {
                //alert(':)');
                document.getElementById("disabilities").disabled = true;
                document.getElementById("damaged-organs").disabled = true;
                document.getElementById("disabilities").removeAttribute("required");
                document.getElementById("damaged-organs").removeAttribute("required");
                flag = false;
            }
            else {
                document.getElementById("disabilities").disabled = false;
                document.getElementById("damaged-organs").disabled = false;
                document.getElementById("disabilities").required = true;
                document.getElementById("damaged-organs").required = true;
            }
        }

        function validateForm() {
            /*
            document.getElementById("dis1").hidden=false;
            document.getElementById("dis2").hidden=false;
            document.getElementById("em1").hidden=false;
            document.getElementById("em2").hidden=false;
            document.getElementById("em3").hidden=false;
            document.getElementById("em4").hidden=false;
            */
            return true;
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function ValidateFileUpload() {
            var fuData = document.getElementById('fileChooser');
            var FileUploadPath = fuData.value;
            if (FileUploadPath == '') {
                alert("Please upload an image");
                return false;

            } else {
                var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

                if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                    if (fuData.files && fuData.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#blah').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(fuData.files[0]);
                    }

                }

//The file upload is NOT an image
                else {
                    alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP.");
                    document.getElementById('fileChooser').value = '';
                    return false;
                }
            }
            return true;
        }

        function checkIfExists(vari) {
        }


    </script>
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
                    <li class="active"><a href="{{ route('dashboard.index.employees')  }}">Employees</a></li>
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
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main scroll-page">


            <!-- START ABOUT SECTION-->
            <section id="about" class="section wow fadeInUpBig">
                <div class="container-section">
                    <div class="row">
                        <div class="section-title">
                            <h4>Employee</h4>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-lg">
                        @php ( $id=1 )
                        <table border="1" style="width:50%"
                               class="table table-striped table-bordered table-dark table-hover">
                            <tr>
                                @php($it=0)
                                @foreach($employees as $employee)
                                    @if($it>0) @break @endif
                                    @php($it=$it+1)
                                    @php($jt=1)
                                    @foreach($employee as $tuple=>$tuple_data)
                                        {{--@if($jt>13) @break @endif--}}
                                        <th>{{ strtoupper($tuple) }}</th>
                                        @php($jt=$jt+1)
                                    @endforeach
                                @endforeach

                            </tr>
                            @foreach ($employees as $employee)
                                <tr>
                                    @foreach($employee as $tuple => $tuple_data)
                                        <td>{{ $tuple_data  }}</td>
                                    @endforeach
                                    <td>
                                    </td>
                                </tr>
                                @php ($id=$id+1)
                            @endforeach
                        </table>
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




