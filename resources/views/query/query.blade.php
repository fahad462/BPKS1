@extends('adminlte::page')

@section('title', 'Query Builder')

@section('content_header')
    <h1>Write Query Here Please Don't Write PL/SQL</h1>
@stop

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('admin.extra.query.builder.post') }}" id="qform">
            {{ csrf_field() }}
            <div class="form-group row">
                <textarea rows="15" cols="100" name="query" form="qform"></textarea>
            </div>
            <div class="form-group row">
                <button type="submit">Execute</button>
                <button type="reset">Clear</button>
            </div>
        </form>
    </div>
    <div class="container">
        <table border="1" style="width:80%" class="table table-striped table-bordered table-dark table-hover">
            @php ($i=0)
            <tr>
                @foreach($table as $user)
                    @php ($i=$i+1)
                    @if($i>1)
                        @break
                    @endif
                    @foreach($user as $row=>$row_val)
                        <th>{{ $row }}</th>
            @endforeach
            @endforeach
            <tr>
            @foreach ($table as $user)
                <tr>
                    @foreach($user as $row=>$row_val)
                        <td>{{$row_val}}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
        <br>
        @if(strpos($error,'ORA-24374')!==false)
            <h2>{{ __('Query Executed Successfully') }}</h2>
        @else
            <h2>{{ $error }}</h2>
        @endif
        <div>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script>
                function changeSelect() {
                    // alert('lala');
                    var one = [10, 20, 30, 40];
                    var two = [11, 21, 31, 41];
                    var thres = [12, 22, 32, 42];
                    var getselect = document.getElementById('select1');

                    if (getselect.value == '1') {
                        var selectbox = document.getElementById("select2");
                        for(i = selectbox.options.length - 1 ; i >= 0 ; i--)
                        {
                            selectbox.remove(i);
                        }
                        for (i = 0; i < one.length; i++) {
                            var temp = document.createElement('option');
                            temp.value = one[i];
                            temp.innerHTML = one[i];
                            document.getElementById('select2').appendChild(temp);
                        }
                    }
                    if (getselect.value == '2') {
                        var selectbox = document.getElementById("select2");
                        for(i = selectbox.options.length - 1 ; i >= 0 ; i--)
                        {
                            selectbox.remove(i);
                        }
                        for (i = 0; i < two.length; i++) {
                            var temp = document.createElement('option');
                            temp.value = two[i];
                            temp.innerHTML = two[i];
                            document.getElementById('select2').appendChild(temp);
                        }
                    }
                    if (getselect.value == '3') {
                        var selectbox = document.getElementById("select2");
                        for(i = selectbox.options.length - 1 ; i >= 0 ; i--)
                        {
                            selectbox.remove(i);
                        }
                        for (i = 0; i < thres.length; i++) {
                            var temp = document.createElement('option');
                            temp.value = thres[i];
                            temp.innerHTML = thres[i];
                            document.getElementById('select2').appendChild(temp);
                        }
                    }

                }
            </script>
            <select id="select1" onchange="changeSelect()" class="form-control">
                <option disabled selected value>Select a index</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <select id="select2" class="form-control">
                {{--<option disabled selected value>this select will change</option>--}}
            </select>
        </div>
    </div>
@stop
