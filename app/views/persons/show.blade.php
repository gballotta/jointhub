@extends('mainlayout')

@section('content')

<div class="container">
	<h1 class="page-header text-primary">{{ $person->cognome }} {{ $person->nome }}<br/></h1>
	<p>Nato a {{ $person->luogonascita }} il {{ $person->datanascita }}</p>
	<p>Residente in : {{ $person->indirizzo }} - {{ $person->localita }}</p>
	<p>{{ $person->cap }} {{ $person->comune }} ({{ $person->provincia }})</p><br>
	<p>Telefono : {{ $person->telefono }}</p>
	<p>E-mail : {{ $person->email }}</p><br>
	<p>Attività : {{ $person->professione }}</p><br>
	<p>Codice fiscale : {{ $person->codicefiscale }} - Partita IVA : {{ $person->partitaiva }}</p>
	<p>Qualifica : {{ $ruolo }}</p>
	
</div>

@endsection