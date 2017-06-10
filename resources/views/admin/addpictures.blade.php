@extends('layouts.admin_layout')

	@section('content')

	<h2>Dodaj zdjęcia do wiadomości</h2>

	<div class="col-md-6 col-md-offset-3">
		<form method="POST" action="/storePicture" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="title">Tytuł wiadomości</label>
				<select class="form-control" name='title' id='title'>
					@foreach ($news as $single)
  					<option value='{{$single->id}}'>{{$single->title}}</option>
  					@endforeach
  				</select>
			</div>
			<div class="form-group">
				<label for="path">Zdjęcie</label>
				<input type="file" name="path" id="path" class="form-control">
			</div>
			
				<input type="submit" class='btn btn-primary' name="submit" id="submit" value="Dodaj">
	

		</form>


		@if ($flash = session('message'))
		<div class='alert alert-success' role='alert' id="message">
			{{$flash}}
		</div>
		@endif









	@endsection