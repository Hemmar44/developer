@extends('layouts.layout')
	
	@section('content')

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Kontakt</h1>
				</header>
				
				<p>
					Chcesz zarezerwować lub obejrzeć mieszkanie, zadzwoń do nas lub wypełnij formularz, oddzwonimy na pewno. 
				</p>
				<br>
					<form method="POST" action="storeReservation">
						{{csrf_field()}}
						<div class="row">
							<div class="col-sm-3">
								<input class="form-control" type="text" placeholder="Imię i nazwisko" name="name" required="">
							</div>
							<div class="col-sm-3">
								<input class="form-control" type="text" placeholder="Telefon" name="phone" required="">
							</div>
							<div class="col-sm-3">
								<input class="form-control" type="email" placeholder="Email" name="email">
							</div>
							<div class="col-sm-3">
								<input class="form-control" type="text" placeholder="Inwestycja i nr" name="apartment">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Napisz coś.." class="form-control" rows="9" name=body></textarea>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-sm-12">
								<input type="checkbox" name='terms' id='terms' checked="" onclick="return false;">
								<label for="terms">Zgoda na przetwarzanie danych osobowych</label>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12 text-right">
								<input class="btn btn-action" type="submit" value="Wyslij">
							</div>
						</div>
					</form>

					<section class="container-full top-space">
						<div id="map"></div>
					</section>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Adres</h4>
					<address>
						Developer Sp. z. o.o. Sp. K.<br/> ul.Św. Marcin 500 <br/>61-800 Poznań
					</address>
					<h4>Telefony:</h4>
					<address>
						5XX XXX XXX <br>
						6XX XXX XXX 
					</address>
					<h4>E-mail</h4>
					<address>
						info@Developer.pl
					</address>
					<address>
						NIP: 800000000
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	
	

	<script>
      function initMap() {
        var myLatLng = {lat: 52.4061155, lng:16.925606199999947};

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
          title: 'Siedziba firmy'
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVJJzdAzjoGOCifJwOJax_u-6LwiKGc_w&callback=initMap"
        async defer></script>
@endsection