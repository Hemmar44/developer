@extends('layouts.layout')
	
	@section('content')

	<header id="head" class="secondary"></header>

	<div class="container">

		<article class="col-md-12 maincontent">

			<header class="page-header">
				<h1 class="page-title">{{$news->title}}</h1>
				<p class="text-muted">
				{{$news->created_at}}
				</p>
			</header>
			<p>{{$news->body}}</p>
		</article>

		@if(count($news->pictures))
			<ul class="pgwSlider">
			@foreach ($news->pictures as $picture)
			
			
			<li><img src="{{Storage::url($picture->path)}}" data-description="{{$picture->created_at}}"></li>
			@endforeach

			</ul>
		@endif
		



	</div>







	@endsection