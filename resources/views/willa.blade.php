@extends('layouts.layout')
	
	@section('content')

	<header id="head" class="secondary"></header>

	<div class="container">
		
		<h3 class='offers-title'><span class='text-muted'>Willa Szachty </span>
		<h4><a href="#" class="offers-scroll">Tabela lokali</a> | <a href="lokalizacjaSzachty">Lokalizacja i rzuty</a></h4>
		<h4 class="pull-right">Może jednak <a href="OgrodySzczepankowa">Ogrody Szczepankowa ?</a></h4>


		<div class="row">
			
			

			<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Nowoczesna Willa Szachty</h1>
				</header>
				<p>W Poznaniu przy ul. Otwartej trwają prace nad nową inwestycją firmy Developer. Willa przy Szachtach przyciąga potencjalnych klientów fantastyczną lokalizacją, bliskości oma terenów zielonych, rekreacyjnych oraz ciekawymi rozwiązaniami architektonicznymi.</p>
				<p>W budynek znajdują się 4 mieszkania w układzie poziomy, co daje efekt dużej przestrzeni. Mieszkania parterowe posiadają bezpośredni dostęp z salonu na taras i ogród. W  mieszkaniach na piętrze ciekawym dodatkiem jest antresola oraz zejście z balkonu bezpośrednio na ogród. Metraże to około 60m, 3 pokojowe. Do użytku mieszkańców zostaną również oddane miejsca postojowe, możliwość nabycia do dwóch miejsc na lokal.  Oferta możliwa jest do zrealizowania w opcji MdM. </p>
				<p>
				Zielone tereny wokół obiektu zapewniają kompromis między otoczeniem przyrody i bliskością aglomeracji. Willa przy Szachtach  to idealna przystań dla każdego, kto nie chce rezygnować z kontaktu z naturą, a jednocześnie szuka lokum w niedalekiej odległości od centrum miasta. W pobliżu obiektu znajduje się przystanek komunikacji miejskiej, z kolei zaledwie 1 km od terenu inwestycji działa centrum handlowe. Bliskość placówek edukacyjnych zapewni dzieciom łatwy i szybki dojazd do szkół. Bliskość autostrady (1km)  to świetna komunikacja z całym krajem. </p>

				<h2 class="page-title">Inwestycja Willa przy Szachtach to:</h2><br/>
				<p>Możliwość uzyskania kredytu z dopłatą w ramach programu <strong>MDM.</strong>
				<p>Doskonała lokalizacja przy ulicy Otwartej 2 w Poznaniu zapewniająca sprawną komunikację z miastem (Głogowska) jak i umożliwiająca sprawne jego opuszczenie w ramach znajdującej się 1 km od działki autostrady, która jest częścią obwodnicy Poznania.</p>
				<p>Oaza spokoju - pobliskie tereny zielone, niska intensywności zabudowy wokół. Pobliskie akweny oraz zieleń nadają lokalizacji niepowtarzalny charakter.</p>
				<p>Dostępność infrastuktury miejskiej  – Bliskość szkół ( nr. 4 Armii Poznań w Poznaniu, nr. 1, Poniatowskiego, Luboń ) i przedszkoli ( Fabianowo 29, Peter Pan – Niezłomnych, Luboń),  przystanek komunikacji miejskiej 150m od inwestycji. W pobliżu centrum handlowe A2, centrum Auchan.</p>
				<p>Przemyślany rozkład lokali – 2 niezależne sypialnie, duży salon z kuchnią, schowki, miejsca na szafy wnękowe.</p>
				<p  id="bookWilla">Przestrzeń – własny ogród, możliwe dwa miejsca postojowe</p>
				<p>Profesjonalne wykonawstwo – ciekawy architektonicznie budynek, profesjonalnie dobrane materiały. Intymność akustyczna. Nasze bogate doświadczenie w realizacji obiektów budowlanych stanowi gwarancje trwałości na lata.  </p>		
				<h2 class="page-title">Tabela lokali:</h2>
				<table class="table table-bordered table-hover offers-table">
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
