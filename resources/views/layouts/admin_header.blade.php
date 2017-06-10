<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Dewelope panel administratora</title>

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="/public/css/main.css" >
	</head>
	<body class='admin'>
		<div class="container">
			<h4 class='col-md-7 col-xs-12'><a href="admin">Admin</a> | <a href="/">Strona Główna</a></h4>
			<h4 class='text-right col-md-5 col-xs-12' >Jesteś zalogowany jako: {{Auth::user()->name}} | 
				<a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Wyloguj
                    </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
           </h4>
		
	