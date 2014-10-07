@extends('mainlayout')

@section('content')

<div class="container">
	@if( isset($creatoNuovo) )
	@if( $creatoNuovo == 1 )
	<br>
	<div class="alert alert-success" role="alert">Nuovo amministratore creato correttamente</div>
	<br>
	@endif
	@if( $creatoNuovo == 2 )
	<br>
	<div class="alert alert-success" role="alert">Amministratore cancellato</div>
	<br>
	@endif
	@endif
	<h1 class="page-header text-primary">Staff Members</h1>
	<a href="{{ $url = action('StaffController@create'); }}">
		<button type="button" class="btn btn-primary">Crea nuovo amministratore</button>
	</a>
	<br><br>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Username</th>
				<th>Password</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($admins as $admin)
			<tr>
				<td>{{ $admin->username }}</td>
				<td>{{ $admin->password }}</td>
				<td><a href="#"><button type="button" class="btn btn-primary">Aggiorna</button></a></td>
				<!--<td>
					<a href="{{ action('StaffController@destroy', array('id' => $admin->id)) }}">
						<button type="button" class="btn btn-danger">Elimina</button>
					</a>
				</td>-->
				<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('staff.destroy', $admin->id))) }}
				{{ Form::submit('Elimina', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection