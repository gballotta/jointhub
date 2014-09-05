@extends('mainlayout')

@section('content')

<div class="container" style="margin-top: 50px">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="sign-form">
				<h3 class="first-child">Zona accesso riservato</h3>
				<hr>
				{{ Form::open( array( 'url' => 'ingresso' ) ) }}
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						{{ Form::text('username', null, array ('class' => 'form-control',
															   'placeholder' => 'Username')) }}
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						{{ Form::password('password', array ('class' => 'form-control',
						                                           'placeholder' => 'Password')) }}
					</div>
					<br>
					{{ Form::submit('Accedi', array( 'class' => 'btn btn-color' )) }}
					<br>
				</form>
				{{ Form::close() }}
			</div>
		</div>
	</div> <!-- / .row -->
</div>

@endsection