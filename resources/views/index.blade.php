@extends('layouts.layout')

	@section('content')
	
	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">Twoje wymarzone miejsce</h1>
				<p class="tagline">Aktualnie w sprzedaży dwie inwestycje, skorzystaj z dopłaty MDM</p>
				<p><a class="btn btn-action btn-lg" role="button" href="WillaSzachty#bookWilla">Zarezerwuj Willa Szachty</a> <a class="btn btn-action btn-lg" role="button" href="OgrodySzczepankowa#bookOgrody">Zarezerwuj Ogrody Szczepankowa</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center"  id='newsCenter'>
		<br> <br>
		<h2 class="thin">Aktualne prace na naszych budowach</h2>
		<p class="text-muted">
			Tu możesz śledzić postępy prac na naszych budowach.
		</p>
	</div>
	<!-- /php generated news-->
	<div class="container">
		<div class="news-container col-md-12">
			@foreach ($news as $single)
			<div class="news col-md-10 col-md-offset-1">
				<h2 class='title'><a href='news/{{$single->id}}'>{{$single->title}}</a></h2>
				<p class="text-muted">
				Dodano: {{$single->created_at}}
				</p>
				<p class='body'>{{$single->body}}</p>
			</div>
			@endforeach
		</div>
		<div class='col-md-offset-5'>
		{{ $news->links() }}
		</div>
	</div>
	
	@if ($flash = session('message'))
		<div class='alert alert-success' role='alert' id="message">
			{{$flash}}
		</div>
	@endif
	

	@endsection
