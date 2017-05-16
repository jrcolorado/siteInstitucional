<html>
<head>
	 <title>Google Maps</title>
	 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
 
	 <script type="text/javascript" language="javascript">
 
		var map = null; 
		function chamaMapa()
		{
			//DEFINE AS COORDENADAS DA RUA OU AVENIDA
			var latlng = new google.maps.LatLng(-30.034647099999997, -51.2176584); //DEFINE A LOCALIZAÇÃO EXATA DO MAPA
 
			    var myOptions = {
					zoom: 10,
					center: latlng,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
 
				//CRIANDO O MAPA
				map = new google.maps.Map( document.getElementById("map_canvas") , myOptions );
 
				//DEFINE AS COORDENADAS DA RUA OU AVENIDA - CENTRALIZAÇÃO DO MAPA
				map.setCenter( new google.maps.LatLng(-30.034647099999997, -51.2176584) );
 
				//MUDANDO O ZOOM DO MAPA
				map.setZoom(10);
 
				//MUDANDO O TIPO DO MAPA - NESSA FORMA, ESTÁ DEFINIDO O FORMATO MAPA
				map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
 
				//INSERINDO O MARCARDOR
				// ESSE CÓDIGO VAI COLOCAR UM ÍCONE DE MARCAÇÃO NO LOCAL EXATO DA SUA EMPRESA
				var endereco = 'Rua Conde de Porto Alegre, 532, Floresta - Porto Alegre';
				geocoder = new google.maps.Geocoder();     
				geocoder.geocode({'address':endereco}, function(results, status){
					if( status = google.maps.GeocoderStatus.OK){
						latlng = results[0].geometry.location;
						markerInicio = new google.maps.Marker({position: latlng,map: map});    
						map.setCenter(latlng);
					}
				});
 
		}
 
	 </script>
 
 </head>
<body onload="chamaMapa();">
 
<div id="map_canvas" style="width: 50%; height: 340px"></div>
<h1>Localização</h1>
 <br/><br/>
 <div>
       <h5>Endereço</h5>
       <p class="text-overflow">Rua Conde de Porto Alegre, 532<br/>
       Bairro Floresta, Porto Alegre - RS, Brasil</p>
       </div>
</body>
</html>


       