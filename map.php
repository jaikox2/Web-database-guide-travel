<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Directions service</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
  <body>

    <div id="map"></div>
    <script>

    var y = document.getElementById('map');
    var mapLatitude;
    var mapLongitude;
    var myLatlng;
    var Start;
    var End;


      function getMapLocation() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: myLatlng
        });
        directionsDisplay.setMap(map);

        Start = myLatlng;
        End = new google.maps.LatLng(<?php $name=$_GET['location']; echo $name; ?>);

        directionsService.route({
          origin: Start,
          destination: End,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }

      function initMap() {
      	console.log("getMapLocation");
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(showMapPosition);
          } else {
              y.innerHTML = "Geolocation is not supported by this browser.";
          }
      }
      function showMapPosition(position) {
      	console.log("showMapPosition");
          mapLatitude = position.coords.latitude;
          mapLongitude = position.coords.longitude;
          myLatlng = new google.maps.LatLng(mapLatitude,mapLongitude);
          getMapLocation();
      }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYmKFb4MkDlfAeKsw-CWxl6-DycaE0AJ8&callback=initMap">
    </script>
  </body>
</html>
