@extends('mainlayout')

@section('content')

<div class="container">
	@if (Session::has('message'))
	<div class="alert alert-success">
		<p>{{ Session::get('message') }}</p>
	</div>
	<br>
	@endif
	<h1 class="page-header text-primary">Corsi / Workshops<br/></h1>
	<br>
	<a href="{{ URL::to('courses/create') }}"><button class="btn btn-primary">Crea nuovo corso / workshop</button></a>
	<br><br>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nome Corso</th>
				<th>Tagline</th>
				<th>Tipo</th>
				<th>Operazioni</th>
			</tr>
		</thead>
		<tbody>
			@foreach($corsi as $corso)
			<tr>
				<td>{{ $corso->nome }}</td>
				<td>{{ $corso->tagline }}</td>
				<td>
					@if($corso->tag_workshop == 1)
					Workshop
					@endif
					@if($corso->tag_corso == 1)
					Corso
					@endif
				</td>
				<td>
					<a href="{{ URL::to('courses/' . $corso->id) }}">
						<button class="btn btn-success">Visualizza</button>
					</a>
					<a href="{{ URL::to('courses/' . $corso->id . '/edit') }}">
						<button class="btn btn-primary">Modifica</button>
					</a>
					{{ Form::open(array('url' => 'courses/' . $corso->id, 'class' => 'pull-right')) }}
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