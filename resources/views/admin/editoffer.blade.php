@extends('layouts.admin_layout')
	
	@section('content')

		<h2>Dodaj ofertę mieszkania</h2>
	<div class="col-md-6 col-md-offset-3">
		<form method="POST" action="/storeUpdatedOffer" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="id">Numer</label>
				<input type="text" name="id" id="id" class="form-control" value="{{$offer->id}}" readonly="">
			</div>
			<div class="form-group">
				<label for="name">Inwestycja</label>
				<select class="form-control" name='name' id='name' readonly>
					@if ($offer->name === 'ogrody')
  					<option value='ogrody'>Ogrody Szczepankowa</option>
  					@else
  					<option value='willa'>Willa Szachty</option>
  					@endif
  				</select>
			</div>
			<div class="form-group">
				<label for="number">Numer</label>
				<input type="text" name="number" id="number" class="form-control" value="{{$offer->number}}">
			</div>
			<div class="form-group">
				<label for="size">Powierzchnia</label>
				<input type="text" name="size" id=size class="form-control" value="{{$offer->size}}">
			</div>
			<div class="form-group">
				<label for="garden">Ogród</label>
				<input type="text" name="garden" id="garden" class="form-control" value="{{$offer->garden}}">
			</div>
			<div class="form-group">
				<label for="parking">Miejsce postojowe</label>
				<select class="form-control" name='parking' id='parking'>
  					<option value='Tak'>Tak</option>
  					<option value='Nie'>Nie</option>
  				</select>
			</div>
			<div class="form-group">	
				<label for="mdm">MDM</label>
				<select class="form-control" name='mdm' id='mdm'>
  					<option value='Tak'>Tak</option>
  					<option value='Nie'>Nie</option>
  				</select>
			</div>
			<div class="form-group">
				<label for="path">Rzut</label>
				<input type="file" name="path" id="path" class="form-control">
			</div>
			<div class="form-group">	
				<label for="price">Cena</label>
				<input type="text" name="price" id="price" class="form-control" value="{{$offer->price}}">
			</div>
			<div class="form-group">	
				<label for="availability">Dostępność</label>
				<select class="form-control" id="availability" name='availability'>
  					<option value='Dostępne | Zarezerwuj'>Dostępne</option>
  					<option value='Zarezerwowane'>Zarezerwowane</option>
  					<option value='Sprzedane'>Sprzedane</option>
  				</select>
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Zapisz" name="submit">
				<input class="btn btn-danger pull-right" type="submit" name='delete' value="Usuń całą ofertę" name="submit">
			</div>
			

		</form>
	</div>




	@endsection