@extends('mainlayout')

@section('content')

<?php
	$local = setlocale(LC_ALL, 'it-IT');
	$dataFormattata = DateTime::createFromFormat('Y-m-d G:i:s', $corso->dataData)/*->format('j F Y')*/;
	$dataFormattata = strtotime($corso->dataData);
	$dataFormattata2 = strftime('%A %e %B %Y', $dataFormattata);
?>

<div class="container">
	<h1 class="text-color">{{$corso->corsoNome}}</h1>
	<h3>{{$corso->corsoTagline}}</h3>
	<br>
	<p>
		<span class="label label-info">
		@if($corso->corsoWorkshop == 1)
		WORKSHOP
		@endif
		@if($corso->corsoCorso == 1)
		CORSO
		@endif
		</span>
	</p><br>
	<p>{{ $dataFormattata2 }}</p>
	<p>Numero minimo partecipanti : {{ $corso->corsoMin }}</p>
	<p>Numero massimo partecipanti : {{ $corso->corsoMax }}</p>
	<p>
		@if($corso->corsoPrezzo == 0)
		Evento gratuito
		@else
		Costo iscrizione : {{ $corso->corsoPrezzo }} Euro
		@endif
	</p>
	<br>
	<a class="btn btn-lg btn-blue" href="#">Prenota ora</a>
	<br><br>
	<h2 class="headline text-color">
		<span class="border-color">Descrizione</span>
	</h2>
	<p class="text-justify">{{ $corso->corsoDescrizione }}</p>
	<br><br>
	<h2 class="headline text-color">
		<span class="border-color">Programma</span>
	</h2>
	<p class="text-justify">{{ $corso->corsoProgramma }}</p>
</div>

@endsection