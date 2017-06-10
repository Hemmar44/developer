@extends('layouts.admin_layout')
	
	@section('content')

	<h2>Maile od klientów</h2>

	<div class="container">
	
		@foreach ($reservations as $booking) 
			<article class="panel panel-default">
				<div class="panel-heading">
					<h3>{{$booking->name}}</h3>
					<p class="text-muted">Email: <strong>{{$booking->email}}</strong> Tel: <strong>{{$booking->phone}} </strong></p>
					<p>{{$booking->created_at}}</p>
					<p>Zainteresowany: 
						@if (!empty($booking->apartment))</p>
							{{$booking->apartment}} 
						@else 
							<span style="color:red">Nie podał</span>
						@endif
					</p>
				</div>
				<div class="panel-body">
					@if (!empty($booking->body))
						<p> {{$booking->body}} </p>
					@else 
						<p class="alert alert-danger">Brak wiadomości</p>
					@endif
				</div>
			</article>
		@endforeach

		{{ $reservations->links() }}
		
	</div>







	@endsection