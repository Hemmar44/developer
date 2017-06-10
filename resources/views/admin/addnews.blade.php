@extends('layouts.admin_layout')

	@section('content')

	<h2>Dodaj news na głównej stronie</h2>

	<div class='container'>
		<form class="form-horizontal" method="POST" action="storeNews">
			{{ csrf_field() }}
  			<div class="form-group">
   			<label for="title" class="col-md-2 control-label">Tytuł</label>
    			<div class="col-md-8">
      			<input type="text" class="form-control" id="title" name="title" placeholder="Tytuł">
    		</div>	
  		</div>
  		<div class="form-group">
    		<label for="body" class="col-md-2 control-label">Treść</label>
    		<div class="col-md-8">
      		<textarea class="form-control" id="body" name="body" rows="6"></textarea> 
    	</div>
  	</div>
  		<div class="form-group">
    		<div class="col-sm-offset-2 col-sm-10">
      			<button type="submit" class="btn btn-primary">Opublikuj</button>
    		</div>
  		</div>
</form>
</div>
	@endsection