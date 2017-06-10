@extends('layouts.layout')
	
	@section('content')


	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

	<h3 class='offers-title'><a href='WillaSzachty' class='text-muted'>Willa Szachty</a></h3>
  <h4><a href="WillaSzachty#bookWilla">Tabela lokali</a> | <a class='text-muted' href="lokalizacjaSzachty">Lokalizacja i rzuty</a></h4>
	<h4 class="pull-right">Może jednak <a href="OgrodySzczepankowa">Ogrody Szczepankowa ?</a> </h4>
	
	<div id="map"></div>
		
		<ul class="pgwSlider">
			
  			<li><img src="/public/images/parter_d.png" alt="Rzut parteru" data-description="Ogrody Szczepankowa"></li>
			<li><img src="/public/images/pietro.png" alt="Rzut piętra" data-description="Ogrody Szczepankowa"></li>
			

		</ul>


	</div>

	 <script>
      function initMap() {
        var myLatLng = {lat: 52.3649619, lng:16.861200800000006};

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: true,
          zoom: 14
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: 'Developer Willa Szachty'
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVJJzdAzjoGOCifJwOJax_u-6LwiKGc_w&callback=initMap"
        async defer></script>
 
	@endsection
