@extends('mainlayout')

@section('content')

<div class="container">
	@if (Session::has('message'))
	<div class="alert alert-success">
		<p>{{ Session::get('message') }}</p>
	</div>
	<br>
	@endif
	<h1 class="page-header text-primary">Lista utenti<br/></h1>
	<br>
	<a href="{{ URL::to('persons/create') }}"><button class="btn btn-primary">Crea nuovo utente</button></a>
	<br><br>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Cognome</th>
				<th>Nome</th>
				<th>E-Mail</th>
				<th>Operazioni</th>
			</tr>
		</thead>
		<tbody>
			@foreach($persons as $person)
			<tr>
				<td>{{ $person->cognome }}</td>
				<td>{{ $person->nome }}</td>
				<td>{{ $person->email }}</td>
				<td>
					<a href="{{ URL::to('persons/' . $person->id) }}">
						<button class="btn btn-success">Visualizza</button>
					</a>
					<a href="{{ URL::to('persons/' . $person->id . '/edit') }}">
						<button class="btn btn-primary">Modifica</button>
					</a>
					{{ Form::open(array('url' => 'persons/' . $person->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Elimina', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection