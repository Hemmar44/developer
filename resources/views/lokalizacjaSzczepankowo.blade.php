@extends('layouts.layout')
	
	@section('content')


	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
 
	<h3 class='offers-title'><a href='OgrodySzczepankowa' class='text-muted'>Ogrody Szczepankowa</a>
  <h4><a href="OgrodySzczepankowa#bookOgrody">Tabela lokali</a> | <a class='text-muted' href="lokalizacjaSzczepankowo">Lokalizacja i rzuty</a></h4>


	<h4 class="pull-right">Może jednak <a href="WillaSzachty">Willa Szachty ?</a> </h4>
	
	<div id="map"></div>
		
		<ul class="pgwSlider">
			
  			<li><img src="/public/images/parter_d.png" alt="Rzut parteru" data-description="Ogrody Szczepankowa"></li>
			<li><img src="/public/images/pietro.png" alt="Rzut piętra" data-description="Ogrody Szczepankowa"></li>
			

		</ul>


	</div>

	 <script>
      function initMap() {
        var myLatLng = {lat: 52.35763129999999, lng:17.016453400000046};

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
          title: 'Developer Ogrody Szczepankowa'
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVJJzdAzjoGOCifJwOJax_u-6LwiKGc_w&callback=initMap"
        async defer></script>
  
	@endsection
