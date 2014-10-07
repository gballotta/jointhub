@extends('mainlayout')

@section('content')

<div class="container">
	@if (Session::has('message'))
	<div class="alert alert-success">
		<p>{{ Session::get('message') }}</p>
	</div>
	<br>
	@endif
	<h1 class="page-header text-primary">Listino Prezzi Coworking<br/></h1>
	<br>
	<a href="{{ URL::to('CowoPrices/create') }}"><button class="btn btn-primary">Crea nuovo articolo</button></a>
	<br><br>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Abbonamento</th>
				<th>Periodo</th>
				<th>Operazioni</th>
			</tr>
		</thead>
		<tbody>
			@foreach($prezzi as $prezzo)
			<tr>
				<td>{{ $prezzo->nome }}</td>
				<td>{{ $prezzo->tempo }}</td>
				<td>
					<a href="{{ URL::to('CowoPrices/' . $prezzo->id) }}">
						<button class="btn btn-success">Visualizza</button>
					</a>
					<a href="{{ URL::to('CowoPrices/' . $prezzo->id . '/edit') }}">
						<button class="btn btn-primary">Modifica</button>
					</a>
					{{ Form::open(array('url' => 'CowoPrices/' . $prezzo->id, 'class' => 'pull-right')) }}
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