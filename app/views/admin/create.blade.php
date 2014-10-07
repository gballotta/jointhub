@extends('mainlayout')

@section('content')

<div class="container">
	<h1 class="page-header text-primary">Creazione nuovo amministratore</h1>
	@if( isset($errorival) )
	<br><br>
	<div class="alert alert-danger" role="alert">Attenzione ci sono stati degli errori<br>
		@foreach($errorival->all() as $errore)
			{{ $errore }}
		@endforeach
	</div>
	@endif
	<br><br>
	{{ Form::open( array( 'url' => 'staff' ) ) }}
		<div class="input-group">
			{{ Form::text('username', null, array ('class' => 'form-control',
												   'placeholder' => 'Username')) }}
		</div>
		<br>
		<div class="input-group">
			{{ Form::password('password', array ('class' => 'form-control',
			                                           'placeholder' => 'Password')) }}
		</div>
		<br>
		<div class="input-group">
			{{ Form::password('password_confirmation', array ('class' => 'form-control',
			                                           'placeholder' => 'Conferma password')) }}
		</div>
		<br>
		{{ Form::submit('Crea nuovo amministratore', array( 'class' => 'btn btn-color' )) }}
		<br>
	{{ Form::close() }}
</div>

@endsection
