@extends('layouts.admin_layout')

	@section('content')
	<h2>Wybierz zdjęcia, które chcesz usunąć</h2>
	<div class='container col-md-offset-2'>
		@unless (count($news->pictures))

		<p> Do tej wiadomości nie zostały załączone żadne zdjęcia</p>

		<a href="/addPicture">Dodaj zdjęcia</a>

		@else 

		
		<form class="form-horizontal" method="POST" action="confirmRemove">
		{{csrf_field()}}
			@foreach ($news->pictures as $picture)
			<div class='form-group col-md-7'>
				<label for="{{$picture->id}}">
					<img class='img-responsive img-thumbnail' src="{{Storage::url($picture->path)}}">
				</label>
				<div class="form-group col-md-7">
				<input type="checkbox" name="{{$picture->id}}" value="{{$picture->path}}" id="{{$picture->id}}">
				</div>
			</div>
			@endforeach

			<div class='form-group col-md-8'>
				<input type="submit" class='btn btn-danger' name="submit" id="submit" value="Potwierdź">
			</div>

		</form>

		@endunless
	</div>
	@endsection