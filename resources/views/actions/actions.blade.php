@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <br>
    <br>
@stop

@section('content')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
    <div class="container-fluid">
        {{--@php (var_dump($id))--}}
        @foreach($ids as $id)
            <ul id="parent">
                @if($id->id==1 || $id->id==2)
                    <li>
                        <p>Register A Disabled People</p>
                        <button id="myBtn" class="btn btn-lg">Add</button>
                    </li>
                @endif
                @if($id->id==1)
                    <li>
                        <p>Register An Employee</p>
                        <button>Add</button>
                    </li>
                @endif
                @if($id->id==1 || $id->id==3)
                    <li>
                        <p>Add a Training</p>
                        <button>Add</button>
                    </li>
                @endif
                @if($id->id==1)
                    <li>
                        <p>Register a doner</p>
                        <button>Add</button>
                    </li>
                @endif
                @if($id->id==1)
                    <li>
                        <p>Query Executer</p>
                        <button class="btn btn-lg">Add</button>
                    </li>
                @endif
            </ul>
        @endforeach
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:5px 5px;">
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4>Register A Person With Disability</h4>
                </div>
                {{--<span class="glyphicon glyphicon-lock"></span>--}}
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form">
                        <div class="form-group">
                            <label for="birth_cer"><span
                                        class="glyphicon"></span>
                                Name</label>
                            <input type="text" class="form-control" id="birth_cer"
                                   placeholder="Enter Birth Certificate">
                        </div>
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
                                    {{--var aa = '{{$birth_cer}}';--}}
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
                                            // birth: aa,
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
                                class="btn btn-success btn-lg btn-block">
                            <span class="glyphicon glyphicon-off"></span> Submit
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

@stop
@section('css')
    <style>
        #parent {
            list-style: none;
            width: 100%;
            height: 90px;
            margin: 0;
            padding: 0;
            white-space: nowrap;
            overflow-x: auto;
            overflow-y: hidden;
            border: #e2dca3;
        }

        #parent > li {
            display: inline-block;
            width: 20%;
            height: 100%;
            background-color: #e6c5bb;
        }

        #parent > li:nth-child(even) {
            background-color: #e2dca3;
        }

        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            color: #292f33;
            font-weight: 600;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #000000;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .title1 {
            font-size: 60px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .form-group {
            color: #040505;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 0;
        }

        label {
            vertical-align: middle;
            text-align: center;
            height: auto;
        }

        input:required {
            box-shadow: 2px 2px 5px rgba(200, 0, 0, 0.85);
        }

        input:required:focus {
            border: 1px solid red;
            outline: none;
        }

        input:required:hover {
            opacity: 1;
        }

        .custom-select.is-invalid, .form-control.is-invalid, .was-validated .custom-select:invalid, .was-validated .form-control:invalid {
            border-color: #dc3545
        }

        .custom-select.is-invalid:focus, .form-control.is-invalid:focus, .was-validated .custom-select:invalid:focus, .was-validated .form-control:invalid:focus {
            border-color: #dc3545;
            -webkit-box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25);
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
        }

        .custom-select.is-invalid ~ .invalid-feedback, .custom-select.is-invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback, .form-control.is-invalid ~ .invalid-tooltip, .was-validated .custom-select:invalid ~ .invalid-feedback, .was-validated .custom-select:invalid ~ .invalid-tooltip, .was-validated .form-control:invalid ~ .invalid-feedback, .was-validated .form-control:invalid ~ .invalid-tooltip {
            display: block
        }

        .form-check-input.is-invalid ~ .form-check-label, .was-validated .form-check-input:invalid ~ .form-check-label {
            color: #dc3545
        }

        .form-check-input.is-invalid ~ .invalid-feedback, .form-check-input.is-invalid ~ .invalid-tooltip, .was-validated .form-check-input:invalid ~ .invalid-feedback, .was-validated .form-check-input:invalid ~ .invalid-tooltip {
            display: block
        }

        .custom-control-input.is-invalid ~ .custom-control-label, .was-validated .custom-control-input:invalid ~ .custom-control-label {
            color: #dc3545
        }

        .custom-control-input.is-invalid ~ .custom-control-label:before, .was-validated .custom-control-input:invalid ~ .custom-control-label:before {
            background-color: #efa2a9
        }

        .custom-control-input.is-invalid ~ .invalid-feedback, .custom-control-input.is-invalid ~ .invalid-tooltip, .was-validated .custom-control-input:invalid ~ .invalid-feedback, .was-validated .custom-control-input:invalid ~ .invalid-tooltip {
            display: block
        }

        .custom-control-input.is-invalid:checked ~ .custom-control-label:before, .was-validated .custom-control-input:invalid:checked ~ .custom-control-label:before {
            background-color: #e4606d
        }

        .custom-control-input.is-invalid:focus ~ .custom-control-label:before, .was-validated .custom-control-input:invalid:focus ~ .custom-control-label:before {
            -webkit-box-shadow: 0 0 0 1px #f5f8fa, 0 0 0 .2rem rgba(220, 53, 69, .25);
            box-shadow: 0 0 0 1px #f5f8fa, 0 0 0 .2rem rgba(220, 53, 69, .25)
        }

        .custom-file-input.is-invalid ~ .custom-file-label, .was-validated .custom-file-input:invalid ~ .custom-file-label {
            border-color: #dc3545
        }

        .custom-file-input.is-invalid ~ .custom-file-label:before, .was-validated .custom-file-input:invalid ~ .custom-file-label:before {
            border-color: inherit
        }

        .custom-file-input.is-invalid ~ .invalid-feedback, .custom-file-input.is-invalid ~ .invalid-tooltip, .was-validated .custom-file-input:invalid ~ .invalid-feedback, .was-validated .custom-file-input:invalid ~ .invalid-tooltip {
            display: block
        }

        .custom-file-input.is-invalid:focus ~ .custom-file-label, .was-validated .custom-file-input:invalid:focus ~ .custom-file-label {
            -webkit-box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25);
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
        }

        .form-inline {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .form-inline .form-check {
            width: 100%
        }

        @media (min-width: 576px) {
            .form-inline label {
                -ms-flex-align: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center
            }

            .form-inline .form-group, .form-inline label {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                align-items: center;
                margin-bottom: 0
            }

            .form-inline .form-group {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                -ms-flex-align: center
            }

            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle
            }

            .form-inline .form-control-plaintext {
                display: inline-block
            }

            .form-inline .input-group {
                width: auto
            }

            .form-inline .form-check {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                width: auto;
                padding-left: 0
            }

            .form-inline .form-check-input {
                position: relative;
                margin-top: 0;
                margin-right: .25rem;
                margin-left: 0
            }

            .form-inline .custom-control {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center
            }

            .form-inline .custom-control-label {
                margin-bottom: 0
            }
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: .9rem;
            line-height: 1.6;
            border-radius: .25rem;
            -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out
        }

        .btn:focus, .btn:hover {
            text-decoration: none
        }

        .btn.focus, .btn:focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25);
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .btn.disabled, .btn:disabled {
            opacity: .65
        }

        .btn:not(:disabled):not(.disabled) {
            cursor: pointer
        }

        .btn:not(:disabled):not(.disabled).active, .btn:not(:disabled):not(.disabled):active {
            background-image: none
        }

        a.btn.disabled, fieldset:disabled a.btn {
            pointer-events: none
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc
        }

        .btn-primary.focus, .btn-primary:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5);
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
        }

        .btn-primary.disabled, .btn-primary:disabled {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #0062cc;
            border-color: #005cbf
        }

        .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-primary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5);
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
        }

        .btn-secondary {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #5a6268;
            border-color: #545b62
        }

        .btn-secondary.focus, .btn-secondary:focus {
            -webkit-box-shadow: 0 0 0 .2rem hsla(208, 7%, 46%, .5);
            box-shadow: 0 0 0 .2rem hsla(208, 7%, 46%, .5)
        }

        .btn-secondary.disabled, .btn-secondary:disabled {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d
        }

        .btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active, .show > .btn-secondary.dropdown-toggle {
            color: #fff;
            background-color: #545b62;
            border-color: #4e555b
        }

        .btn-secondary:not(:disabled):not(.disabled).active:focus, .btn-secondary:not(:disabled):not(.disabled):active:focus, .show > .btn-secondary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem hsla(208, 7%, 46%, .5);
            box-shadow: 0 0 0 .2rem hsla(208, 7%, 46%, .5)
        }

        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-success:hover {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34
        }

        .btn-success.focus, .btn-success:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5);
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        .btn-success.disabled, .btn-success:disabled {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-success:not(:disabled):not(.disabled).active, .btn-success:not(:disabled):not(.disabled):active, .show > .btn-success.dropdown-toggle {
            color: #fff;
            background-color: #1e7e34;
            border-color: #1c7430
        }

        .btn-success:not(:disabled):not(.disabled).active:focus, .btn-success:not(:disabled):not(.disabled):active:focus, .show > .btn-success.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5);
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        .btn-info {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8
        }

        .btn-info:hover {
            color: #fff;
            background-color: #138496;
            border-color: #117a8b
        }

        .btn-info.focus, .btn-info:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5);
            box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
        }

        .btn-info.disabled, .btn-info:disabled {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8
        }

        .btn-info:not(:disabled):not(.disabled).active, .btn-info:not(:disabled):not(.disabled):active, .show > .btn-info.dropdown-toggle {
            color: #fff;
            background-color: #117a8b;
            border-color: #10707f
        }

        .btn-info:not(:disabled):not(.disabled).active:focus, .btn-info:not(:disabled):not(.disabled):active:focus, .show > .btn-info.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5);
            box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
        }

        .btn-warning {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107
        }

        .btn-warning:hover {
            color: #212529;
            background-color: #e0a800;
            border-color: #d39e00
        }

        .btn-warning.focus, .btn-warning:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5);
            box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
        }

        .btn-warning.disabled, .btn-warning:disabled {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107
        }

        .btn-warning:not(:disabled):not(.disabled).active, .btn-warning:not(:disabled):not(.disabled):active, .show > .btn-warning.dropdown-toggle {
            color: #212529;
            background-color: #d39e00;
            border-color: #c69500
        }

        .btn-warning:not(:disabled):not(.disabled).active:focus, .btn-warning:not(:disabled):not(.disabled):active:focus, .show > .btn-warning.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5);
            box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130
        }

        .btn-danger.focus, .btn-danger:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5);
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }

        .btn-danger.disabled, .btn-danger:disabled {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-danger:not(:disabled):not(.disabled).active, .btn-danger:not(:disabled):not(.disabled):active, .show > .btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #bd2130;
            border-color: #b21f2d
        }

        .btn-danger:not(:disabled):not(.disabled).active:focus, .btn-danger:not(:disabled):not(.disabled):active:focus, .show > .btn-danger.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5);
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }

        .btn-light {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-light:hover {
            color: #212529;
            background-color: #e2e6ea;
            border-color: #dae0e5
        }

        .btn-light.focus, .btn-light:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5);
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }

        .btn-light.disabled, .btn-light:disabled {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-light:not(:disabled):not(.disabled).active, .btn-light:not(:disabled):not(.disabled):active, .show > .btn-light.dropdown-toggle {
            color: #212529;
            background-color: #dae0e5;
            border-color: #d3d9df
        }

        .btn-light:not(:disabled):not(.disabled).active:focus, .btn-light:not(:disabled):not(.disabled):active:focus, .show > .btn-light.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5);
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }

        .btn-dark {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-dark:hover {
            color: #fff;
            background-color: #23272b;
            border-color: #1d2124
        }

        .btn-dark.focus, .btn-dark:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5);
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }

        .btn-dark.disabled, .btn-dark:disabled {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-dark:not(:disabled):not(.disabled).active, .btn-dark:not(:disabled):not(.disabled):active, .show > .btn-dark.dropdown-toggle {
            color: #fff;
            background-color: #1d2124;
            border-color: #171a1d
        }

        .btn-dark:not(:disabled):not(.disabled).active:focus, .btn-dark:not(:disabled):not(.disabled):active:focus, .show > .btn-dark.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5);
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }

        .btn-outline-primary {
            color: #007bff;
            background-color: transparent;
            background-image: none;
            border-color: #007bff
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-outline-primary.focus, .btn-outline-primary:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5);
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
        }

        .btn-outline-primary.disabled, .btn-outline-primary:disabled {
            color: #007bff;
            background-color: transparent
        }

        .btn-outline-primary:not(:disabled):not(.disabled).active, .btn-outline-primary:not(:disabled):not(.disabled):active, .show > .btn-outline-primary.dropdown-toggle {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-primary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5);
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
        }

        .btn-outline-secondary {
            color: #6c757d;
            background-color: transparent;
            background-image: none;
            border-color: #6c757d
        }

        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d
        }

        .btn-outline-secondary.focus, .btn-outline-secondary:focus {
            -webkit-box-shadow: 0 0 0 .2rem hsla(208, 7%, 46%, .5);
            box-shadow: 0 0 0 .2rem hsla(208, 7%, 46%, .5)
        }

        .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
            color: #6c757d;
            background-color: transparent
        }

        .btn-outline-secondary:not(:disabled):not(.disabled).active, .btn-outline-secondary:not(:disabled):not(.disabled):active, .show > .btn-outline-secondary.dropdown-toggle {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d
        }

        .btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-secondary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem hsla(208, 7%, 46%, .5);
            box-shadow: 0 0 0 .2rem hsla(208, 7%, 46%, .5)
        }

        .btn-outline-success {
            color: #28a745;
            background-color: transparent;
            background-image: none;
            border-color: #28a745
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-outline-success.focus, .btn-outline-success:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5);
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        .btn-outline-success.disabled, .btn-outline-success:disabled {
            color: #28a745;
            background-color: transparent
        }

        .btn-outline-success:not(:disabled):not(.disabled).active, .btn-outline-success:not(:disabled):not(.disabled):active, .show > .btn-outline-success.dropdown-toggle {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-outline-success:not(:disabled):not(.disabled).active:focus, .btn-outline-success:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-success.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5);
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        .btn-outline-info {
            color: #17a2b8;
            background-color: transparent;
            background-image: none;
            border-color: #17a2b8
        }

        .btn-outline-info:hover {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8
        }

        .btn-outline-info.focus, .btn-outline-info:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5);
            box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
        }

        .btn-outline-info.disabled, .btn-outline-info:disabled {
            color: #17a2b8;
            background-color: transparent
        }

        .btn-outline-info:not(:disabled):not(.disabled).active, .btn-outline-info:not(:disabled):not(.disabled):active, .show > .btn-outline-info.dropdown-toggle {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8
        }

        .btn-outline-info:not(:disabled):not(.disabled).active:focus, .btn-outline-info:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-info.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5);
            box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
        }

        .btn-outline-warning {
            color: #ffc107;
            background-color: transparent;
            background-image: none;
            border-color: #ffc107
        }

        .btn-outline-warning:hover {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107
        }

        .btn-outline-warning.focus, .btn-outline-warning:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5);
            box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
        }

        .btn-outline-warning.disabled, .btn-outline-warning:disabled {
            color: #ffc107;
            background-color: transparent
        }

        .btn-outline-warning:not(:disabled):not(.disabled).active, .btn-outline-warning:not(:disabled):not(.disabled):active, .show > .btn-outline-warning.dropdown-toggle {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107
        }

        .btn-outline-warning:not(:disabled):not(.disabled).active:focus, .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-warning.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5);
            box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
        }

        .btn-outline-danger {
            color: #dc3545;
            background-color: transparent;
            background-image: none;
            border-color: #dc3545
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-outline-danger.focus, .btn-outline-danger:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5);
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }

        .btn-outline-danger.disabled, .btn-outline-danger:disabled {
            color: #dc3545;
            background-color: transparent
        }

        .btn-outline-danger:not(:disabled):not(.disabled).active, .btn-outline-danger:not(:disabled):not(.disabled):active, .show > .btn-outline-danger.dropdown-toggle {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-outline-danger:not(:disabled):not(.disabled).active:focus, .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-danger.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5);
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }

        .btn-outline-light {
            color: #f8f9fa;
            background-color: transparent;
            background-image: none;
            border-color: #f8f9fa
        }

        .btn-outline-light:hover {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-outline-light.focus, .btn-outline-light:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5);
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }

        .btn-outline-light.disabled, .btn-outline-light:disabled {
            color: #f8f9fa;
            background-color: transparent
        }

        .btn-outline-light:not(:disabled):not(.disabled).active, .btn-outline-light:not(:disabled):not(.disabled):active, .show > .btn-outline-light.dropdown-toggle {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-outline-light:not(:disabled):not(.disabled).active:focus, .btn-outline-light:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-light.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5);
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }

        .btn-outline-dark {
            color: #343a40;
            background-color: transparent;
            background-image: none;
            border-color: #343a40
        }

        .btn-outline-dark:hover {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-outline-dark.focus, .btn-outline-dark:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5);
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }

        .btn-outline-dark.disabled, .btn-outline-dark:disabled {
            color: #343a40;
            background-color: transparent
        }

        .btn-outline-dark:not(:disabled):not(.disabled).active, .btn-outline-dark:not(:disabled):not(.disabled):active, .show > .btn-outline-dark.dropdown-toggle {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-outline-dark:not(:disabled):not(.disabled).active:focus, .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-dark.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5);
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }

        .btn-link {
            font-weight: 400;
            color: #007bff;
            background-color: transparent
        }

        .btn-link:hover {
            color: #0056b3;
            background-color: transparent
        }

        .btn-link.focus, .btn-link:focus, .btn-link:hover {
            text-decoration: underline;
            border-color: transparent
        }

        .btn-link.focus, .btn-link:focus {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .btn-link.disabled, .btn-link:disabled {
            color: #6c757d
        }

        .btn-group-lg > .btn, .btn-lg {
            padding: .5rem 1rem;
            font-size: 1.125rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        .btn-group-sm > .btn, .btn-sm {
            padding: .25rem .5rem;
            font-size: .7875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .btn-block {
            display: block;
            width: 100%
        }

        .btn-block + .btn-block {
            margin-top: .5rem
        }

        input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
            width: 100%
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem
        }

        .card > hr {
            margin-right: 0;
            margin-left: 0
        }

        .card > .list-group:first-child .list-group-item:first-child {
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem
        }

        .card > .list-group:last-child .list-group-item:last-child {
            border-bottom-right-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem
        }

        .card-title {
            margin-bottom: .75rem
        }

        .card-subtitle {
            margin-top: -.375rem
        }

        .card-subtitle, .card-text:last-child {
            margin-bottom: 0
        }

        .card-link:hover {
            text-decoration: none
        }

        .card-link + .card-link {
            margin-left: 1.25rem
        }

        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: 1px solid rgba(0, 0, 0, .125)
        }

        .card-header:first-child {
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
        }

        .card-header + .list-group .list-group-item:first-child {
            border-top: 0
        }

        .card-footer {
            padding: .75rem 1.25rem;
            background-color: rgba(0, 0, 0, .03);
            border-top: 1px solid rgba(0, 0, 0, .125)
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
        }

        .card-header-tabs {
            margin-bottom: -.75rem;
            border-bottom: 0
        }

        .card-header-pills, .card-header-tabs {
            margin-right: -.625rem;
            margin-left: -.625rem
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1.25rem
        }

        .card-img {
            width: 100%;
            border-radius: calc(.25rem - 1px)
        }

        .card-img-top {
            width: 100%;
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px)
        }

        .card-img-bottom {
            width: 100%;
            border-bottom-right-radius: calc(.25rem - 1px);
            border-bottom-left-radius: calc(.25rem - 1px)
        }

        .card-deck {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .card-deck .card {
            margin-bottom: 15px
        }

        @media (min-width: 576px) {
            .card-deck {
                -webkit-box-orient: horizontal;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                margin-right: -15px;
                margin-left: -15px
            }

            .card-deck, .card-deck .card {
                -webkit-box-direction: normal
            }

            .card-deck .card {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                -webkit-box-orient: vertical;
                -ms-flex-direction: column;
                flex-direction: column;
                margin-right: 15px;
                margin-bottom: 0;
                margin-left: 15px
            }
        }

        .card-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .card-group > .card {
            margin-bottom: 15px
        }

        @media (min-width: 576px) {
            .card-group {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap
            }

            .card-group > .card {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                margin-bottom: 0
            }

            .card-group > .card + .card {
                margin-left: 0;
                border-left: 0
            }

            .card-group > .card:first-child {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0
            }

            .card-group > .card:first-child .card-header, .card-group > .card:first-child .card-img-top {
                border-top-right-radius: 0
            }

            .card-group > .card:first-child .card-footer, .card-group > .card:first-child .card-img-bottom {
                border-bottom-right-radius: 0
            }

            .card-group > .card:last-child {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0
            }

            .card-group > .card:last-child .card-header, .card-group > .card:last-child .card-img-top {
                border-top-left-radius: 0
            }

            .card-group > .card:last-child .card-footer, .card-group > .card:last-child .card-img-bottom {
                border-bottom-left-radius: 0
            }

            .card-group > .card:only-child {
                border-radius: .25rem
            }

            .card-group > .card:only-child .card-header, .card-group > .card:only-child .card-img-top {
                border-top-left-radius: .25rem;
                border-top-right-radius: .25rem
            }

            .card-group > .card:only-child .card-footer, .card-group > .card:only-child .card-img-bottom {
                border-bottom-right-radius: .25rem;
                border-bottom-left-radius: .25rem
            }

            .card-group > .card:not(:first-child):not(:last-child):not(:only-child), .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer, .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header, .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom, .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top {
                border-radius: 0
            }
        }

        .card-columns .card {
            margin-bottom: .75rem
        }

        @media (min-width: 576px) {
            .card-columns {
                -webkit-column-count: 3;
                column-count: 3;
                -webkit-column-gap: 1.25rem;
                column-gap: 1.25rem
            }

            .card-columns .card {
                display: inline-block;
                width: 100%
            }
        }

        /* Center the loader */
        #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }
            to {
                bottom: 0px;
                opacity: 1
            }
        }

        @keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }
            to {
                bottom: 0;
                opacity: 1
            }
        }

        .text-justify {
            text-align: justify !important
        }

        .text-nowrap {
            white-space: nowrap !important
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .text-left {
            text-align: left !important
        }

        .text-right {
            text-align: right !important
        }

        .text-center {
            text-align: center !important
        }

        @media (min-width: 576px) {
            .text-sm-left {
                text-align: left !important
            }

            .text-sm-right {
                text-align: right !important
            }

            .text-sm-center {
                text-align: center !important
            }
        }

        @media (min-width: 768px) {
            .text-md-left {
                text-align: left !important
            }

            .text-md-right {
                text-align: right !important
            }

            .text-md-center {
                text-align: center !important
            }
        }

        @media (min-width: 992px) {
            .text-lg-left {
                text-align: left !important
            }

            .text-lg-right {
                text-align: right !important
            }

            .text-lg-center {
                text-align: center !important
            }
        }

        @media (min-width: 1200px) {
            .text-xl-left {
                text-align: left !important
            }

            .text-xl-right {
                text-align: right !important
            }

            .text-xl-center {
                text-align: center !important
            }
        }

        .text-lowercase {
            text-transform: lowercase !important
        }

        .text-uppercase {
            text-transform: uppercase !important
        }

        .text-capitalize {
            text-transform: capitalize !important
        }

        .font-weight-light {
            font-weight: 300 !important
        }

        .font-weight-normal {
            font-weight: 400 !important
        }

        .font-weight-bold {
            font-weight: 700 !important
        }

        .font-italic {
            font-style: italic !important
        }

        .text-white {
            color: #fff !important
        }

        .text-primary {
            color: #007bff !important
        }

        a.text-primary:focus, a.text-primary:hover {
            color: #0062cc !important
        }

        .text-secondary {
            color: #6c757d !important
        }

        a.text-secondary:focus, a.text-secondary:hover {
            color: #545b62 !important
        }

        .text-success {
            color: #28a745 !important
        }

        a.text-success:focus, a.text-success:hover {
            color: #1e7e34 !important
        }

        .text-info {
            color: #17a2b8 !important
        }

        a.text-info:focus, a.text-info:hover {
            color: #117a8b !important
        }

        .text-warning {
            color: #ffc107 !important
        }

        a.text-warning:focus, a.text-warning:hover {
            color: #d39e00 !important
        }

        .text-danger {
            color: #dc3545 !important
        }

        a.text-danger:focus, a.text-danger:hover {
            color: #bd2130 !important
        }

        .text-light {
            color: #f8f9fa !important
        }

        a.text-light:focus, a.text-light:hover {
            color: #dae0e5 !important
        }

        .text-dark {
            color: #343a40 !important
        }

        a.text-dark:focus, a.text-dark:hover {
            color: #1d2124 !important
        }

        .text-muted {
            color: #6c757d !important
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0
        }

        #myDiv {
            display: none;
            text-align: center;
        }

        .card {
            width: 720px;
            overflow-y: scroll;
            overflow-x: scroll;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px
            }
        }

        .container-fluid {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        .row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0
        }

        .no-gutters > .col, .no-gutters > [class*=col-] {
            padding-right: 0;
            padding-left: 0
        }
    </style>
@stop