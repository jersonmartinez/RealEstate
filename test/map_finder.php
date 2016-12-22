<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Obtener coordenadas de un marcador </title>
    <style>
      #mapeo_actual {
        width: 100%;
        height: 400px;
      }
    </style>
  </head>
  <body >
    <div id="mapeo_actual"></div>
    <!-- Se cargan los datos que están en la base de datos!. -->
    <input type="hidden" id="coords_longitude" value="<?php echo $coords_long; ?>" />
    <input type="hidden" id="coords_latitude" value="<?php echo $coords_lat; ?>" />

    <!-- Se cargan los datos que están en la base de datos!. -->
    <input type="hidden" id="coord_longitude" value="<?php echo $coords_long; ?>" />
    <input type="hidden" id="coord_latitude" value="<?php echo $coords_lat; ?>" />
    <input type="hidden" id="coordenadas_originales" />
    <script>


var marker;          //variable del marcador
var coordenadas_originales = {};    //coordenadas obtenidas con la geolocalización

//Funcion principal
initMap = function () 
{

    //usamos la API para geolocalizar el usuario
        navigator.geolocation.getCurrentPosition(
          function (position){
            coordenadas_originales =  {
              lng: $("#coords_longitude").val(),
              lat: $("#coords_latitude").val()
            };
            setMapa(coordenadas_originales);  //pasamos las coordenadas al metodo para crear el mapa
            
           
          },function(error){console.log(error);});
    
}



function setMapa (coordenadas_originales)
{   
      //Se crea una nueva instancia del objeto mapa
      var mapeo_actual = new google.maps.Map(document.getElementById('mapeo_actual'),
      {
        zoom: 13,
        center:new google.maps.LatLng(coordenadas_originales.lat,coordenadas_originales.lng),

      });

      //Creamos el marcador en el mapa con sus propiedades
      //para nuestro obetivo tenemos que poner el atributo draggable en true
      //position pondremos las mismas coordenas que obtuvimos en la geolocalización
      marker = new google.maps.Marker({
        map: mapeo_actual,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(coordenadas_originales.lat,coordenadas_originales.lng),

      });
      //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica 
      //cuando el usuario a soltado el marcador
      marker.addListener('click', toggleBounce);
      
      marker.addListener( 'dragend', function (event)
      {
        //Escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
        $("#coord_latitude").val(this.getPosition().lat());
        $("#coord_longitude").val(this.getPosition().lng());
        document.getElementById("coordenadas_originales").value = this.getPosition().lat()+","+ this.getPosition().lng();
      });
}

//callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

// Carga de la libreria de google maps 

    </script>
     <script async defer src="https://maps.googleapis.com/maps/api/js?key= AIzaSyA_OJ9Y274q4iC6QBxcX_MAferoYTfZC_w&callback=initMap"></script>
  </body>
</html>