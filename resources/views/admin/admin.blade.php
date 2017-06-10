@extends('layouts.admin_layout')
	
	@section('content')
	<h1>Panel administratora</h1>
	
	<div class="row admin-content">
  		<div class="col-xs-12 col-md-4 admin-links">
  			<div class="smaller">
    			<a href="addNews">Dodaj wiadomość na stronie głównej</a>
    		</div>
 		 </div>
  		<div class="col-xs-12 col-md-4  admin-links">
  			<div class="smaller">
    			<a href='addPicture' >Dodaj zdjęcie do wiadmości</a>
    		</div>
 		 </div>
 		 <div class="col-xs-12 col-md-4  admin-links ">
 		 	<div class="smaller">
    			<a href='addOffer' >Dodaj ofertę</a>
    		</div>
 		 </div>
	</div>
	<div class="row">
  		<div class="col-xs-12 col-md-4 admin-links">
  			<div class="smaller">
    			<a href="selectNews">Edytuj lub usuń wiadomość</a>
    		</div>
 		 </div>
  		<div class="col-xs-12 col-md-4  admin-links">
  			<div class="smaller">
    			<a href='selectPicture' >Usuń zdjęcia</a>
    		</div>
 		 </div>
 		 <div class="col-xs-12 col-md-4   admin-links">
 		 	<div class="smaller">
    			<a href='offersList'>Edytuj ofertę</a>
    		</div>
 		 </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 admin-links">
			<div class="smaller">
				<a href='reservationsList'>Maile od klientów</a>
			</div>
		</div>
	</div>


	@if ($flash = session('message'))
		<div class='alert alert-success' role='alert' id="message">
			{{$flash}}
		</div>
	@endif



	@endsection