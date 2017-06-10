@extends('layouts.admin_layout')

	@section('content')
	<div class="container">
		<h3>Tabela lokali Ogrody Szczepankowa</h3>
		<table class="table table-bordered">
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
						<th>Edycja</th>
					<tr>
				</thead>
				<tbody>
					@foreach ($ogrody as $ogrod)
					<tr>
						<td>{{$ogrod->number}}</td>
						<td>{{$ogrod->size}}</td>
						<td>{{$ogrod->garden}}</td>
						<td>{{$ogrod->parking}}</td>
						<td>{{$ogrod->mdm}}</td>
						<td><a href="{{Storage::url($ogrod->path)}}" target="_blank">Plik</a></td>
						<td>{{$ogrod->price}}</td>
						<td>{{$ogrod->availability}}</td>
						<td><a href="offersList/{{$ogrod->id}}"><button class='btn btn-primary'>Edytuj lub usuń</button></a>
					</tr>
					@endforeach
				</tbody>
			</table>
			<h3>Tabela lokali Willa Szachty</h3>
			<table class="table table-bordered">
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
						<th>Edycja</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($wille as $willa)
					<tr>
						<td>{{$willa->number}}</td>
						<td>{{$willa->size}}</td>
						<td>{{$willa->garden}}</td>
						<td>{{$willa->parking}}</td>
						<td>{{$willa->mdm}}</td>
						<td><a href="{{Storage::url($willa->path)}}" target="_blank">Plik</a></td>
						<td>{{$willa->price}}</td>
						<td>{{$willa->availability}}</td>
						<td><a href="offersList/{{$willa->id}}"><button class='btn btn-primary'>Edytuj lub usuń</button></a>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>











	@endsection