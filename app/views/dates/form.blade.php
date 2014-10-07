	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('course_id', 'Evento (Richiesto) : ') }}
			{{ Form::select('course_id', $corsi, array('class' => 'form-control')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('data', 'data (Richiesto) : ') }}
			{{ Form::input('date', 'data', null, array('class'=>'form-control')) }}
		</div>
		</div>
	</div>