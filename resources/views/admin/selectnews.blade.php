@extends('layouts.admin_layout')
	
	@section('content')
	<h2>Wybierz wiadomość do edycji</h2>

	<div class='container'>
		<div class="col-md-6 col-md-offset-3">
			<form method="POST" action='editNews'>
				{{ csrf_field() }}
				<div class="form-group">
					<label for="title">Tytuł wiadomości</label>
					<select class="form-control" name='title' id='title'>
						@foreach ($news as $single)
	  					<option value='{{$single->id}}'>{{$single->title}}</option>
	  					@endforeach
	  				</select>
				</div>
				<div class='form-group'>
				<input type="submit" class='btn btn-primary' name="submit" id="submit" value="Wybierz">
				</div>
			</form>
		</div>
	</div>
	@endsection