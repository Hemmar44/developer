@extends('layouts.admin_layout')
	
	@section('content')
	<h2>Edytuj wiadomość</h2>

	<div class='container'>
		<form class="form-horizontal" method="POST" action="saveChangedNews">
			{{ csrf_field() }}
			<div class="form-group ">
				<label class="col-md-2 control-label">id</label>
				<div class="col-md-1">
					<input type="text" name="id" value="{{$news->id}}" class="form-control" readonly="">

				</div>
				<input type="submit" name="delete" value="Usuń" class="btn btn-danger">
			</div>
  			<div class="form-group">
   				<label for="title" class="col-md-2 control-label">Tytuł</label>
    			<div class="col-md-8">
      				<input type="text" class="form-control" title="title" name="title" placeholder="Tytuł" value="{{$news->title}}">
    			</div>	
  			</div>
  			<div class="form-group">
    			<label for="body" class="col-md-2 control-label">Treść</label>
    			<div class="col-md-8">
      				<textarea class="form-control" id="body" name="body" rows='8'>{{$news->body}}</textarea> 
    			</div>
  			</div>
  			<div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      				<button type="submit" name="save" class="btn btn-primary" value='1'>Zapisz</button>
    			</div>
  			</div>
		</form>
	</div>
	




	@endsection