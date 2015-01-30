@extends('mainlayout')

@section('content')

<div class="container">
	<img class="img-responsive center-block" src="/img/corso_{{$corso->id}}.jpg">
	<br/>
	<h1 class="text-color">{{$corso->nome}}</h1>
	<h3>{{$corso->tagline}}</h3>
	<br>
	<p>
		<span class="label label-info">
		@if($corso->tag_workshop == 1)
		WORKSHOP
		@endif
		@if($corso->tag_corso == 1)
		CORSO
		@endif
		</span>
	</p><br>
	<p>Numero minimo partecipanti : {{ $corso->min_partecipanti }}</p>
	<p>Numero massimo partecipanti : {{ $corso->max_partecipanti }}</p>
	<p>
		@if($corso->prezzo == 0)
		Evento gratuito
		@else
		Costo iscrizione : {{ $corso->prezzo }} Euro
		@endif
	</p>
	<br><br>
	<h2 class="headline text-color">
		<span class="border-color">Descrizione</span>
	</h2>
	<p class="text-justify">{{ $corso->descrizione }}</p>
	<br><br>
	<h2 class="headline text-color">
		<span class="border-color">Programma</span>
	</h2>
	<p class="text-justify">{{ $corso->programma }}</p>
</div>

@endsection