<!DOCTYPE html>
<html >
    <head >
        <meta charset="utf-8" />
        <link rel="stylesheet" href="index2.css" /> 
        <title>Mise en forme event</title>
        <style type="text/css">
            #map_canvas {
                height : 200px; /* IMPERATIF */
                width : 500px;
                left : 500px;
                bottom:640px;
                border : 1px solid #888;
            }
        </style>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">

            var geocoder;
            var map;
            function initialize() {
                geocoder = new google.maps.Geocoder();
                var latlng =new google.maps.LatLng(48.8566140,2.3522219);
                var myOptions = {
                    zoom: 8,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP }
                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            }
        </script>

    </head>
    <body onload="initialize()"

          <div>
             <img class = "imageDetail" alt="Photo de évenement" src= "img/alexbeach.jpg" title="Nom de l'&eacute;v&egrave;nement." height="500" width="350"/>
             <p class="titreDetailEvent">Nom de l'&eacutev&egravenement</p>
             <p class="sousTitreThemeDetail">Th&egrave;me - Sous th&egrave;me</p>
             <p class="sousTitreLieuDetail">Adresse de l'&eacute;v&egrave;nement : </br>8 avenue Notre Dame des Champs</br>75006 Paris</p>
         </div>
          <div id="map_canvas"></div>
        <div>
            <p class="sousTitreLieuDetail">Date de l'&eacute;v&egrave;nement : 12/12/12 </br>Budget : 15 €</p>
            <p class="sousTitrePlacesDetail"></p>
        </div>
    </body>
</html>
