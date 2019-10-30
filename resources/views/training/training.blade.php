@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header') {{--
<div class="col-md-4">
</div>
<h1>Training</h1> --}}
@stop
@section('content')
    <div class="flash-message">
        @foreach (['success'] as $msg)
            @if(Session::has('alert-' . $msg))
                <script>
                    alert("Person Data Added Succesfully");
                </script>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->
    <div class="col-md-1">

    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Register a new Training') }}</h3>
                    </div>
                    <!-- <a href="/admin/register">lala</a> -->
                    <div class="card-body">
                        {{-- action="{{ route('person.store') }}" --}}
                        <form  method="POST" action="{{ route('admin.services.training.post')  }}">
                            @csrf
                            <div class="form-group row">
                                <label for="training-id" class="col-md-4 col-form-label text-md-right">{{ __('Training Id') }}</label>
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
                                <label for="tadd" class="col-md-4 col-form-label text-md-right">{{ __('Traiing Address') }}</label>
                                <div class="col-md-6">
                                    <input id="tadd" type="text"
                                           class="form-control{{ $errors->has('tadd') ? 'is-invalid' : '' }}"
                                           name="tadd" value="{{ old('tadd') }}"
                                           required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact No') }}</label>
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
    </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
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
            height: wrap-content;
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
    </style>
@stop
@section('js')

@stop
