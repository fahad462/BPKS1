@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div id="map" style="width:100%;height:400px;"></div>
<script>
    function myMap() {
        var mapCanvas = document.getElementById("map");
        var myCenter = new google.maps.LatLng(51.508742,-0.120850);
        var mapOptions = {center: myCenter, zoom: 5};
        var map = new google.maps.Map(mapCanvas,mapOptions);
        var marker = new google.maps.Marker({
            position: myCenter,
            animation: google.maps.Animation.BOUNCE
        });
        marker.setMap(map);

        // var marker=new google.maps.Marker({
        //     position:myCenter,
        //     icon:'pinkball.png'
        // });
        //
        // marker.setMap(map);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4zlBEQQeGlFEVJPt3x3mQTtPgxwlAJBY&callback=myMap"></script>
@stop