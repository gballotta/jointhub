@extends('mainlayout')

@section('content')

<div class="container">
	@if (Session::has('message'))
	<div class="alert alert-success">
		<p>{{ Session::get('message') }}</p>
	</div>
	<br>
	@endif
	<h1 class="page-header text-primary">Date eventi<br/></h1>
	<br>
	<a href="{{ URL::to('dates/create') }}"><button class="btn btn-primary">Crea nuova data</button></a>
	<br><br>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Data</th>
				<th>Evento</th>
				<th>Operazioni</th>
			</tr>
		</thead>
		<tbody>
			@foreach($dates as $data)
			<tr>
				<td>{{ $data->data }}</td>
				<td>{{ $data->course->nome }}</td>
				<td>
					<a href="{{ URL::to('dates/' . $data->id . '/edit') }}">
						<button class="btn btn-primary">Modifica</button>
					</a>
					{{ Form::open(array('url' => 'dates/' . $data->id, 'class' => 'pull-right')) }}
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