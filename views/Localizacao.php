<html>
<head>
	 <title>Google Maps</title>
         <link rel="stylesheet" href="/site/assets/css/template.css" />
           
 </head>
<body>
   
    <div class ="maps">
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:330px;width:540px;'><div id='gmap_canvas' style='height:330px;width:540px;'></div><div><small><a href="http://embedgooglemaps.com">embed google map</a></small></div><div><small><a href="http://proxysitereviews.com/">proxy sites</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-30.0170842,-51.2046325),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-30.0170842,-51.2046325)});infowindow = new google.maps.InfoWindow({content:'<strong>EndoSul</strong><br>Rua Conde Porto Alegre, 532, Floresta, Porto Alegre, Brasil<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
    </div>
    <div class = "end">
       <h5>Endereço</h5>
       <p class="text-overflow">Rua Conde de Porto Alegre, 532<br/>
       Bairro Floresta, Porto Alegre - RS, Brasil</p>
       </div>
     
</body>
</html>


       