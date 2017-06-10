<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>Developer</title>
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="/public/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="/public/css/pgwslider.min.css" >
	<link rel="stylesheet" href="/public/css/main.css" >
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#kolapsnij" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="/" id=logo><img src="/public/images/house-and-sunrise-logo.jpg" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse" id="kolapsnij">
				<ul class="nav navbar-nav pull-right">
					@if (isset($check))
					<li class="bordered"><a id="scroll" href="#">Aktualności</a></li>
					@else
					<li class="bordered"><a href="/#newsCenter">Aktualności</a></li>
					@endif
					<li class="bordered"><a href="/onas">O nas</a></li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inwestycje<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><span class='investments'> &nbsp W sprzedaży</span></li>
							<li><a href="/OgrodySzczepankowa">Ogrody Szczepankowa</a></li>
							<li><a href="/WillaSzachty">Willa Szachty</a></li>
							<li><span class='investments'> &nbsp Zrealizowane</span></li>
							<li><a href="/Tyniecka">Tyniecka, Poznań</a></li>
						</ul>
					</li>
					<li class="bordered"><a href="/kontakt">Kontakt</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<div id="arrow"></div>
