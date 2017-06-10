@extends('layouts.layout')
	
	@section('content')

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
		
		<h3 class='offers-title'><span class='text-muted'>Ogrody Szczepankowa</span></h3>
		<h4><a href="#" class="offers-scroll">Tabela lokali</a> | <a href="lokalizacjaSzczepankowo">Lokalizacja i rzuty</a></h4>
		<h4 class="pull-right">Może jednak <a href="WillaSzachty">Willa Szachty</a> ?</h4>

		<div class="row">
			
			

			<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Zielony ogród na Szczepankowie</h1>
				</header>
				<p>W Poznaniu przy ul. Szczepankowo 60 trwają prace nad nową inwestycją Developer. Inwestycja Ogrody Szczepankowa przyciąga potencjalnych klientów nie tylko swoim indywidualnym charakterem, ale także dogodną lokalizacją oraz ciekawymi rozwiązaniami architektonicznymi.
 				</p>
				<p>W budynku znajdują się 4 pokojowe mieszkania o metrażu 87,75 m2. Do użytku mieszkańców zostanie oddane również przestronne, skomunikowane poddasze,  ogrody oraz miejsca postojowe. Deweloper zakłada możliwość adaptacji poddaszy. W trosce o komfort mieszkańców w mieszkaniach wydzielono strefy dzienne oraz intymne. W ofercie Developer znajdują się mieszkania dostępne w ramach programu MdM.</p>
				<p>
				Zielone tereny wokół obiektu, delikatny szum pobliskich drzew  – lokalizacja inwestycji spełnia oczekiwania wszystkich wielbicieli przyrody. Ogrody Szczepankowa  to idealna przystań dla każdego, kto nie chce rezygnować z kontaktu z naturą, a jednocześnie szuka lokum w niedalekiej odległości od centrum miasta. W pobliżu obiektu znajduje się przystanek komunikacji miejskiej, z kolei zaledwie 2 km od terenu inwestycji działa centrum handlowe. Bliskość placówek edukacyjnych zapewni dzieciom łatwy i szybki dojazd do szkół.</p>

				<h2 class="page-title">Inwestycja Ogrody Szczepankowa to:</h2><br/>
				<p>Możliwość uzyskania kredytu z dopłatą w ramach programu <strong>MDM.</strong>
				<p>Świetna lokalizacja -  dzielnica Szczepankowo, a w szczególności jej bliższa miastu część, zapewnia sprawną komunikację z miastem jak i umożliwiająca sprawne jego opuszczenie w ramach znajdującego się  3 km od działki węzła autostradowego. 150 metrów od działki znajduje się przystanek autobusowy. </p>
				<p>Oaza spokoju – w pobliżu liczne tereny zielone, niska intensywności zabudowy wokół, tylko budownictwo jednorodzinne, szklarnie i ogrody.  Dzielnica Szczepankowo to sielski charakter na obrzeżu dużej aglomeracji.</p>
				<p>Dostępność infrastruktury miejskiej  – bliskość szkół i przedszkoli, centrum handlowe M1 w odległości 2km, kompleks kinowy Kinepolis, liczne lokalne sklepy, markety spożywcze. </p>
				<p>Przemyślany, zapewniający komfort rozkład lokali – podział na strefę dzienną i intymną. Możliwość wydzielenia do 4 sypialni, pomieszczenia gospodarcze, schowki. Możliwości częściowej adaptacji rozkładu pomieszczeń, w tym wybór rodzaju kuchni ( aneks, autonomiczna ). Do każdego mieszkania dostępne pełnowymiarowe z zapewnioną komunikacją.</p>
				<p id="bookOgrody">Przestrzeń – własny ogród, miejsca parkingowe.</p>
				<p>Profesjonalne wykonawstwo – ciekawe architektonicznie budynki, profesjonalnie dobrane materiały, intymność akustyczna. Nasze bogate doświadczenie w realizacji obiektów budowlanych stanowi gwarancje trwałości na lata.</p>
				<h2 class="page-title" >Tabela lokali:</h2>
				<table  class="table table-bordered table-hover offers-table">
					<thead>
						<tr>
							<th>Numer</th>
							<th>Metraż</th>
							<th>Ogród</th>
							<th>Miejsce Postojowe</th>
							<th>MDM</th>
							<th>Rzuty</th>
							<th>Cena</th>
							<th>Dostępność</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($offers as $offer)
						<tr>
							<td>{{$offer->number}}</td>
							<td>{{$offer->size}}</td>
							<td>{{$offer->garden}}</td>
							<td>{{$offer->parking}}</td>
							<td>{{$offer->mdm}}</td>
							<td><a href="{{Storage::url($offer->path)}}" target="_blank">Plik</a></td>
							<td>{{$offer->price}}</td>
							<td>{{bookPossibility($offer->availability)}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	
	@endsection
