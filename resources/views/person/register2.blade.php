@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content')

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
    <script>
        $(document).ready(function(){
            $("#birth-cer").change(function(){
                var a = document.getElementById('birth-cer').value;
                // alert(a);
                // alert('please wait until checking has been done');
                $.post('/admin/check/exists/birth/cer', {
                        "_token": "{{ csrf_token() }}",
                        birth_cer : a
                    }
                ).done(function (response) {
                    if(response=="ok")
                    {
                    }
                    else
                    {
                        alert("A Person With This Birth Certificate Already Exists");
                        document.getElementById('birth-cer').value="";
                    }
                }).fail(function () {
                    alert("error");
                });
            });

        });
    </script>
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

                            reader.onload = function(e) {
                                $('#blah').attr('src', e.target.result);
                            }

                            reader.readAsDataURL(fuData.files[0]);
                        }

                    }

//The file upload is NOT an image
                    else {
                        alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
                        document.getElementById('fileChooser').value='';
                        return false;
                    }
                }
                return true;
            }

            function checkIfExists(vari)
            {
            }




        </script>
    </div>
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Information of Person. Red marked Input fields are Required') }}</h3>
                    </div>
                    <!-- <a href="/admin/register">lala</a> -->
                    <div class="card-body">
                        {{-- action="{{ route('person.store') }}" --}}
                        <form enctype="multipart/form-data" onsubmit='return validateForm()' method="POST"
                              action="{{ route('admin.register.post')  }}">
                            @csrf {{-- start database --}}

                            <div class="form-group row">
                                <label style="color:crimson"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Person') }}</label>

                                <div class="col-md-6">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fileChooser"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Upload a Photo of the Person') }}</label>

                                <div class="col-md-4">
                                    <input onchange="return ValidateFileUpload();" id="fileChooser" type="file"
                                           class="form-control{{ $errors->has('fileChooser') ? ' is-invalid' : '' }}"
                                           name="fileChooser" value="{{ old('fileChooser') }}"
                                           required autofocus>
                                </div>
                                <div class="col-md-4">
                                    <img id="blah" style="width:100px;height:100px;" alt="Persons Image"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}"
                                           required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="fname"
                                       class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                <div class="col-md-6">
                                    <input id="fname" type="text"
                                           class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}"
                                           name="fname" value="{{ old('fname') }}"
                                           required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mname"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                                <div class="col-md-6">
                                    <input id="mname" type="text"
                                           class="form-control{{ $errors->has('mname') ? ' is-invalid' : '' }}"
                                           name="mname" value="{{ old('mname') }}"
                                           autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input id="lname" type="text"
                                           class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}"
                                           name="lname" value="{{ old('lname') }}"
                                           required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="voter-id"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Voter ID') }}</label>

                                <div class="col-md-6">
                                    <input id="voter-id" type="number"
                                           class="form-control{{ $errors->has('voter-id') ? ' is-invalid' : '' }}"
                                           name="voter-id"
                                           value="{{ old('voter-id') }}" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="birth-cer"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Bith Certificate NO') }}</label>

                                <div class="col-md-6">
                                    <input id="birth-cer" type="number"
                                           class="form-control{{ $errors->has('birth-cer') ? ' is-invalid' : '' }}"
                                           name="birth-cer"
                                           value="{{ old('birth-cer') }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="gender" type="" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                    name="gender" value="{{ old('gender') }}" required autofocus> --}}
                                    <select id="gender" name="gender"
                                            class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                            value="{{ old('gender') }}"
                                            required autofocus>
                                        <option disabled selected value> -- select an option --</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>


                            </div>
                            <div class="form-group row">
                                <label for="religion"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}</label>

                                <div class="col-md-6">
                                    <select id="religion" name="religion"
                                            class="form-control{{ $errors->has('religion') ? ' is-invalid' : '' }}"
                                            value="{{ old('religion') }}"
                                            autofocus>
                                        <option disabled selected value> -- select an option --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hinduism">Hinduism</option>
                                        <option value="Christianity">Christianity</option>
                                        <option value="Judaism">Judaism</option>
                                        <option value="Buddhism">Buddhism</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="marital-status"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Marital Status') }}</label>

                                <div class="col-md-6">
                                    <select id="marital-status" name="marital-status"
                                            class="form-control{{ $errors->has('marital-status') ? ' is-invalid' : '' }}"
                                            value="{{ old('marital-status') }}" required autofocus>
                                        <option disabled selected value> -- select an option --</option>
                                        <option value="Married">Married</option>
                                        <option value="UnMarried">Unmarried</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city"
                                       class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>


                                <div class="col-md-6">
                                    <input id="city" type="text"
                                           class="form-control{{ $errors->has('city') ? 'is-invalid' : '' }}"
                                           name="city" value="{{ old('city') }}"
                                           required autofocus>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="post-office"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Post Office') }}</label>

                                <div class="col-md-6">
                                    <input id="post-office" type="text"
                                           class="form-control{{ $errors->has('post-office') ? ' is-invalid' : '' }}"
                                           name="post-office"
                                           value="{{ old('post-office') }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="road-no"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Road NO') }}</label>

                                <div class="col-md-6">
                                    <input id="road-no" type="number"
                                           class="form-control{{ $errors->has('road-no') ? ' is-invalid' : '' }}"
                                           name="road-no" value="{{ old('road-no') }}"
                                           autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="house-no"
                                       class="col-md-4 col-form-label text-md-right">{{ __('House NO') }}</label>

                                <div class="col-md-6">
                                    <input id="house-no" type="number"
                                           class="form-control{{ $errors->has('house-no') ? ' is-invalid' : '' }}"
                                           name="house-no"
                                           value="{{ old('house-no') }}" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="isdisabledpeople"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Do You Have Personal Disability?') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="isdisabledpeople" type="checkbox" class="form-control{{ $errors->has('isdisabledpeople') ? ' is-invalid' : '' }}"
                                    name="isdisabledpeople" value="{{ old('isdisabledpeople') }}" autofocus> {{__('Do You Have
                                    Personal Disability?')}}<br> --}}
                                    <select onchange="return changes()" id="isdisabledpeople"
                                            name="isdisabledpeople"
                                            class="form-control{{ $errors->has('isdisabledpeople') ? ' is-invalid' : '' }}"
                                            value="{{ old('isdisabledpeople') }}" required autofocus>
                                        <option value="Yes" selected>Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id='dis1'>
                                <label for="disabilities"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Disabilities') }}</label>

                                <div class="col-md-6">
                                    <select multiple id="disabilities" name="disabilities"
                                            class="form-control{{ $errors->has('disabilities') ? ' is-invalid' : '' }}"
                                            value="{{ old('disabilities') }}" required autofocus>
                                        <option disabled selected value> -- select an option --</option>
                                        <option value="Autisam">Autism</option>
                                        <option value="Blind">Blind</option>
                                        <option value="Lame">Lame</option>
                                        <option value="Deaf">Deaf</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="dis2">
                                <label for="damaged-organs"
                                       class="col-md-4 col-form-label text-md-right">{{ __('damaged-organs') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="gender" type="" class="form-control{{ $errors->has('birth-cer') ? ' is-invalid' : '' }}"
                                    name="birth-cer" value="{{ old('birth-cer') }}" required autofocus> --}}
                                    <select multiple id="damaged-organs" name="damaged-organs"
                                            class="form-control{{ $errors->has('damaged-organs') ? ' is-invalid' : '' }}"
                                            value="{{ old('damaged-organs') }}" required autofocus>
                                        <option disabled selected value> -- select an option --</option>
                                        <option value="Hand">Hand</option>
                                        <option value="Leg">Leg</option>
                                        <option value="Brain">Brain</option>
                                        <option value="Face">Face</option>
                                        <option value="Spine">Spine</option>
                                    </select>
                                </div>
                            </div>
                            {{-- employee --}}
                            <div class="form-group row">
                                <label for="isemployee"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Are You a employee of BPKS?') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="isdisabledpeople" type="checkbox" class="form-control{{ $errors->has('isdisabledpeople') ? ' is-invalid' : '' }}"
                                    name="isdisabledpeople" value="{{ old('isdisabledpeople') }}" autofocus> --}} {{-- {{__('Do
                You Have Personal Disability?')}}<br> --}}
                                    <select onchange="return changess()" id="isemployee" name="isemployee"
                                            class="form-control{{ $errors->has('isemployee') ? ' is-invalid' : '' }}"
                                            value="{{ old('isemployee') }}" required autofocus>
                                        {{--  <option disabled selected value> -- select an option -- </option>  --}}
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>

                                </div>
                            </div>
                            <div id='em1' class="form-group row">
                                <label for="employee-id"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Employee ID') }}</label>

                                <div class="col-md-6">
                                    <input id="employee-id" type="number"
                                           class="form-control{{ $errors->has('employee-id') ? ' is-invalid' : '' }}"
                                           name="employee-id"
                                           value="{{ old('employee-id') }}" required autofocus>
                                </div>
                            </div>
                            <div id='em2' class="form-group row">
                                <label for="salary"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Salary') }}</label>

                                <div class="col-md-6">
                                    <input id="salary" type="number"
                                           class="form-control{{ $errors->has('salary') ? ' is-invalid' : '' }}"
                                           name="salary" value="{{ old('salary') }}"
                                           required autofocus>
                                </div>
                            </div>
                            <div id='em3' class="form-group row">
                                <label for="join-date"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Joining Date') }}</label>

                                <div class="col-md-6">
                                    <input id="join-date" type="date"
                                           class="form-control{{ $errors->has('join-date') ? ' is-invalid' : '' }}"
                                           name="join-date"
                                           value="{{ old('join-date') }}" required autofocus>
                                </div>
                            </div>

                            <div id='em4' class="form-group row">
                                <label for="acc-no"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Bank Account No') }}</label>

                                <div class="col-md-6">
                                    <input id="acc-no" type="number"
                                           class="form-control{{ $errors->has('acc-no') ? ' is-invalid' : '' }}"
                                           name="acc-no" value="{{ old('acc-no') }}"
                                           autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label style="color:crimson"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Family Info of The Person') }}</label>

                                <div class="col-md-6">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="earning-person"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Total Earning Person') }}</label>

                                <div class="col-md-6">
                                    <input id="earning-person" type="number"
                                           class="form-control{{ $errors->has('earning-person') ? ' is-invalid' : '' }}"
                                           name="earning-person"
                                           value="{{ old('earning-person') }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="yearly"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Yearly Income') }}</label>

                                <div class="col-md-6">
                                    <input id="yearly" type="number"
                                           class="form-control{{ $errors->has('yearly') ? ' is-invalid' : '' }}"
                                           name="yearly" value="{{ old('yearly') }}"
                                           required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="field"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Primary Field of Earning') }}</label>

                                <div class="col-md-6">
                                    <input id="field" type="text"
                                           class="form-control{{ $errors->has('field') ? ' is-invalid' : '' }}"
                                           name="field" value="{{ old('field') }}"
                                           required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="father"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Fathers Name') }}</label>
                                <div class="col-md-6">
                                    <input id="father" type="text"
                                           class="form-control{{ $errors->has('father') ? ' is-invalid' : '' }}"
                                           name="father" value="{{ old('father') }}" required
                                           autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mother"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Mothers Name') }}</label>
                                <div class="col-md-6">
                                    <input id="mother" type="text"
                                           class="form-control{{ $errors->has('mother') ? ' is-invalid' : '' }}"
                                           name="mother" value="{{ old('mother') }}" required
                                           autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="males"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Total Male') }}</label>
                                <div class="col-md-6">
                                    {{-- <input id="union" type="" class="form-control{{ $errors->has('birth-cer') ? ' is-invalid' : '' }}"
                                    name="birth-cer" value="{{ old('union') }}" required autofocus> --}}
                                    <input id="males" type="number"
                                           class="form-control{{ $errors->has('males') ? ' is-invalid' : '' }}"
                                           name="males" value="{{ old('males') }}"
                                           required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="females"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Total female') }}</label>
                                <div class="col-md-6">
                                    {{-- <input id="union" type="" class="form-control{{ $errors->has('birth-cer') ? ' is-invalid' : '' }}"
                                    name="birth-cer" value="{{ old('union') }}" required autofocus> --}}
                                    <input id="females" type="number"
                                           class="form-control{{ $errors->has('females') ? ' is-invalid' : '' }}"
                                           name="females" value="{{ old('females') }}"
                                           required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="spouse"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Spouse or Husband Name') }}</label>
                                <div class="col-md-6">
                                    {{-- <input id="union" type="" class="form-control{{ $errors->has('birth-cer') ? ' is-invalid' : '' }}"
                                    name="birth-cer" value="{{ old('union') }}" required autofocus> --}}
                                    <input id="spouse" type="text"
                                           class="form-control{{ $errors->has('spouse') ? ' is-invalid' : '' }}"
                                           name="spouse" value="{{ old('spouse') }}"
                                           autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="childrens"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Total Children') }}</label>
                                <div class="col-md-6">
                                    {{-- <input id="union" type="" class="form-control{{ $errors->has('birth-cer') ? ' is-invalid' : '' }}"
                                    name="birth-cer" value="{{ old('union') }}" required autofocus> --}}
                                    <input id="childrens" type="number"
                                           class="form-control{{ $errors->has('childrens') ? ' is-invalid' : '' }}"
                                           name="childrens"
                                           value="{{ old('childrens') }}" autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label style="color:crimson"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Professional Information') }}</label>
                                <div class="col-md-6">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="occupation"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Present Occupation') }}</label>
                                <div class="col-md-6">
                                    <input id="occupation" type="text"
                                           class="form-control{{ $errors->has('occupation') ? ' is-invalid' : '' }}"
                                           name="occupation"
                                           value="{{ old('occupation') }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jjoin-date"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Joining Date') }}</label>
                                <div class="col-md-6">
                                    <input id="jjoin-date" type="date"
                                           class="form-control{{ $errors->has('jjoin-date') ? ' is-invalid' : '' }}"
                                           name="jjoin-date"
                                           value="{{ old('jjoin-date') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dependencies"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Dependencies On Him') }}</label>
                                <div class="col-md-6">
                                    <input id="dependencies" type="number" min=0
                                           class="form-control{{ $errors->has('dependencies') ? ' is-invalid' : '' }}"
                                           name="dependencies" value="{{ old('dependencies') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="monthly-income"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Monthly Income') }}</label>
                                <div class="col-md-6">
                                    <input id="monthly-income" type="number"
                                           class="form-control{{ $errors->has('monthly-income') ? ' is-invalid' : '' }}"
                                           name="monthly-income" value="{{ old('monthly-income') }}" required
                                           autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="achieve"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Achievement') }}</label>
                                <div class="col-md-6">
                                    <input id="achieve" type="text"
                                           class="form-control{{ $errors->has('achieve') ? ' is-invalid' : '' }}"
                                           name="achieve" value="{{ old('achieve') }}"
                                           autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label style="color:crimson"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Information of Helping Hand') }}</label>
                                <div class="col-md-6">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="hbirth-cer"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Birth Certificate for Helping Hand') }}</label>
                                <div class="col-md-6">
                                    <input id="hbirth-cer" type="number"
                                           class="form-control{{ $errors->has('hbirth-cer') ? ' is-invalid' : '' }}"
                                           name="hbirth-cer"
                                           value="{{ old('achieve') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="helper-name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Helper Name') }}</label>
                                <div class="col-md-6">
                                    <input id="helper-name" type="text"
                                           class="form-control{{ $errors->has('helper-name') ? ' is-invalid' : '' }}"
                                           name="helper-name"
                                           value="{{ old('achieve') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="helper-address"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Helper Address') }}</label>
                                <div class="col-md-6">
                                    <input id="helper-address" type="text" , value='Dhaka'
                                           class="form-control{{ $errors->has('helper-address') ? ' is-invalid' : '' }}"
                                           name="helper-address" value="{{ old('achieve') }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="genderr"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                <div class="col-md-6">
                                    <select id="genderr" name="genderr"
                                            class="form-control{{ $errors->has('genderr') ? ' is-invalid' : '' }}"
                                            value="{{ old('genderr') }}"
                                            required autofocus>
                                        <option disabled selected value> -- select an option --</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="relation"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Relation') }}</label>
                                <div class="col-md-6">
                                    <input id="relation" type="text"
                                           class="form-control{{ $errors->has('relation') ? ' is-invalid' : '' }}"
                                           name="relation"
                                           value="{{ old('relation') }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="feedback"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Feedback') }}</label>
                                <div class="col-md-6">
                                    <input id="feedback" type="text"
                                           class="form-control{{ $errors->has('feedback') ? ' is-invalid' : '' }}"
                                           name="feedback"
                                           value="{{ old('feedback') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="types-of-help"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Type Of Help') }}</label>
                                <div class="col-md-6">
                                    <input id="types-of-help" type="text"
                                           class="form-control{{ $errors->has('types-of-help') ? ' is-invalid' : '' }}"
                                           name="types-of-help"
                                           value="{{ old('types-of-help') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="service-provided"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Service Provided') }}</label>
                                <div class="col-md-6">
                                    <input id="service-provided" type="text"
                                           class="form-control{{ $errors->has('service-provided') ? ' is-invalid' : '' }}"
                                           name="service-provided" value="{{ old('service-provided') }}" required
                                           autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label style="color:crimson"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Information of Education') }}</label>
                                <div class="col-md-6">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="registration-no"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Regitration No') }}</label>

                                <div class="col-md-6">
                                    <input id="registration-no" type="number"
                                           class="form-control{{ $errors->has('regitration-no') ? ' is-invalid' : '' }}"
                                           name="registration-no"
                                           value="{{ old('registration-no') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="school"
                                       class="col-md-4 col-form-label text-md-right">{{ __('School Name') }}</label>

                                <div class="col-md-6">
                                    <input id="school" type="text"
                                           class="form-control{{ $errors->has('school') ? ' is-invalid' : '' }}"
                                           name="school"
                                           value="{{ old('school') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sresult"
                                       class="col-md-4 col-form-label text-md-right">{{ __('School Result') }}</label>

                                <div class="col-md-6">
                                    <input id="sresult" type="text"
                                           class="form-control{{ $errors->has('sresult') ? ' is-invalid' : '' }}"
                                           name="sresult"
                                           value="{{ old('sresult') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="spyear"
                                       class="col-md-4 col-form-label text-md-right">{{ __('School Passing Year') }}</label>

                                <div class="col-md-6">
                                    <input id="spyear" type="date"
                                           class="form-control{{ $errors->has('spyear') ? ' is-invalid' : '' }}"
                                           name="spyear"
                                           value="{{ old('spyear') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="college"
                                       class="col-md-4 col-form-label text-md-right">{{ __('College Name') }}</label>

                                <div class="col-md-6">
                                    <input id="college" type="text"
                                           class="form-control{{ $errors->has('college') ? ' is-invalid' : '' }}"
                                           name="college"
                                           value="{{ old('college') }}" autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="cresult"
                                       class="col-md-4 col-form-label text-md-right">{{ __('College Result') }}</label>

                                <div class="col-md-6">
                                    <input id="cresult" type="text"
                                           class="form-control{{ $errors->has('cresult') ? ' is-invalid' : '' }}"
                                           name="cresult"
                                           value="{{ old('cresult') }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cpyear"
                                       class="col-md-4 col-form-label text-md-right">{{ __('College Passing Year') }}</label>

                                <div class="col-md-6">
                                    <input id="cpyear" type="date"
                                           class="form-control{{ $errors->has('cpyear') ? ' is-invalid' : '' }}"
                                           name="cpyear"
                                           value="{{ old('cpyear') }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="university"
                                       class="col-md-4 col-form-label text-md-right">{{ __('University Name') }}</label>

                                <div class="col-md-6">
                                    <input id="university" type="text"
                                           class="form-control{{ $errors->has('university') ? ' is-invalid' : '' }}"
                                           name="university"
                                           value="{{ old('university') }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="uresult"
                                       class="col-md-4 col-form-label text-md-right">{{ __('University Result') }}</label>

                                <div class="col-md-6">
                                    <input id="uresult" type="text"
                                           class="form-control{{ $errors->has('uresult') ? ' is-invalid' : '' }}"
                                           name="uresult"
                                           value="{{ old('uresult') }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="upyear"
                                       class="col-md-4 col-form-label text-md-right">{{ __('University Passing Year') }}</label>

                                <div class="col-md-6">
                                    <input id="upyear" type="date"
                                           class="form-control{{ $errors->has('upyear') ? ' is-invalid' : '' }}"
                                           name="upyear"
                                           value="{{ old('upyear') }}" autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label style="color:crimson"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Information of Medical Treatment') }}</label>
                                <div class="col-md-6">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cost"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Cost') }}</label>

                                <div class="col-md-6">
                                    <input id="cost" type="number"
                                           class="form-control{{ $errors->has('cost') ? ' is-invalid' : '' }}"
                                           name="cost"
                                           value="{{ old('cost') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="hospital"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Hospital Name') }}</label>

                                <div class="col-md-6">
                                    <input id="hospital" type="text"
                                           class="form-control{{ $errors->has('hospital') ? ' is-invalid' : '' }}"
                                           name="hospital"
                                           value="{{ old('hospital') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="consultant"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Consultant') }}</label>

                                <div class="col-md-6">
                                    <input id="consultant" type="text"
                                           class="form-control{{ $errors->has('consultant') ? ' is-invalid' : '' }}"
                                           name="consultant"
                                           value="{{ old('consultant') }}" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="treatment-start-date"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Treatment start Date') }}</label>

                                <div class="col-md-6">
                                    <input id="treatment-start-date" type="date"
                                           class="form-control{{ $errors->has('treatment-start-date') ? ' is-invalid' : '' }}"
                                           name="treatment-start-date"
                                           value="{{ old('treatment-start-date') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="treatment-final-date"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Treatment Final Date') }}</label>

                                <div class="col-md-6">
                                    <input id="treatment-final-date" type="date"
                                           class="form-control{{ $errors->has('treatment-final-date') ? ' is-invalid' : '' }}"
                                           name="treatment-final-date"
                                           value="{{ old('treatment-final-date') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Medichine"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Medichine Name') }}</label>

                                <div class="col-md-6">
                                    <input id="Medichine" type="text"
                                           class="form-control{{ $errors->has('Medichine') ? ' is-invalid' : '' }}"
                                           name="Medichine"
                                           value="{{ old('Medichine') }}"
                                    >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ttype"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Treatment Type') }}</label>

                                <div class="col-md-6">
                                    <input id="ttype" type="text"
                                           class="form-control{{ $errors->has('ttype') ? ' is-invalid' : '' }}"
                                           name="ttype"
                                           value="{{ old('ttype') }}" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label style="color:crimson"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Information of Health') }}</label>
                                <div class="col-md-6">
                                </div>
                            </div>


                        <!-- <div class="form-group row">
                                <label for="birth_cerr"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Certificate No') }}</label>

                                <div class="col-md-6">
                                    <input id="birth_cerr" type="number"
                                           class="form-control{{ $errors->has('birth_cerr') ? ' is-invalid' : '' }}"
                                           name="birth_cerr"
                                           value="{{ old('birth_cerr') }}" required autofocus>
                                </div>
                            </div> -->

                            <div class="form-group row">
                                <label for="blood-group"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                                <div class="col-md-6">
                                    <input id="blood-group" type="text"
                                           class="form-control{{ $errors->has('blood-group') ? ' is-invalid' : '' }}"
                                           name="blood-group"
                                           value="{{ old('blood-group') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blood-pressure"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Blood Pressure') }}</label>

                                <div class="col-md-6">
                                    <input id="blood-pressure" type="text"
                                           class="form-control{{ $errors->has('blood-pressure') ? ' is-invalid' : '' }}"
                                           name="blood-pressure"
                                           value="{{ old('blood-pressure') }}" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="heart-bit"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Heart Beat Rate') }}</label>

                                <div class="col-md-6">
                                    <input id="heart-bit" type="number"
                                           class="form-control{{ $errors->has('heart-bit') ? ' is-invalid' : '' }}"
                                           name="heart-bit"
                                           value="{{ old('heart-bit') }}" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="drugs"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Drugs Taken') }}</label>

                                <div class="col-md-6">
                                    <input id="drugs" type="text"
                                           class="form-control{{ $errors->has('drugs') ? ' is-invalid' : '' }}"
                                           name="drugs"
                                           value="{{ old('drugs') }}" autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="height"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Height') }}</label>

                                <div class="col-md-6">
                                    <input id="height" type="number"
                                           class="form-control{{ $errors->has('height') ? ' is-invalid' : '' }}"
                                           name="height"
                                           value="{{ old('height') }}" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="weight"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Weight') }}</label>

                                <div class="col-md-6">
                                    <input id="weight" type="number"
                                           class="form-control{{ $errors->has('weight') ? ' is-invalid' : '' }}"
                                           name="weight"
                                           value="{{ old('weight') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label style="color:crimson"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Information of Equipment') }}</label>
                                <div class="col-md-6">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="issue_date"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Equipment Issue Date') }}</label>

                                <div class="col-md-6">
                                    <input id="issue_date" type="date"
                                           class="form-control{{ $errors->has('issue_date') ? ' is-invalid' : '' }}"
                                           name="issue_date"
                                           value="{{ old('issue_date') }}" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="ecost"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Equipment Cost') }}</label>

                                <div class="col-md-6">
                                    <input id="ecost" type="number"
                                           class="form-control{{ $errors->has('ecost') ? ' is-invalid' : '' }}"
                                           name="ecost"
                                           value="{{ old('ecost') }}" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="type"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Equipment Type') }}</label>

                                <div class="col-md-6">
                                    <input id="type" type="text"
                                           class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}"
                                           name="type"
                                           value="{{ old('type') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="condition"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Present Condition') }}</label>

                                <div class="col-md-6">
                                    <input id="condition" type="text"
                                           class="form-control{{ $errors->has('condition') ? ' is-invalid' : '' }}"
                                           name="condition"
                                           value="{{ old('condition') }}" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="efeedback"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Feedback') }}</label>

                                <div class="col-md-6">
                                    <input id="efeedback" type="text"
                                           class="form-control{{ $errors->has('efeedback') ? ' is-invalid' : '' }}"
                                           name="efeedback"
                                           value="{{ old('efeedback') }}" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="need"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Further Need') }}</label>

                                <div class="col-md-6">
                                    <input id="need" type="text"
                                           class="form-control{{ $errors->has('need') ? ' is-invalid' : '' }}"
                                           name="need"
                                           value="{{ old('need') }}" autofocus>
                                </div>
                            </div>


                            <div class="form-group row mb-0">

                                <div class="col-md-4 offset-md-4">

                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                    <button type="reset" class="btn btn-primary">
                                        {{ __('Reset') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
@stop
@section('css')
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
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
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
            from { bottom:-100px; opacity:0 }
            to { bottom:0px; opacity:1 }
        }

        @keyframes animatebottom {
            from{ bottom:-100px; opacity:0 }
            to{ bottom:0; opacity:1 }
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
            width:720px;
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
@section('js')

@stop
