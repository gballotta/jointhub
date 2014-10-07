	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('nome', 'Nome evento (Richiesto) : ') }}
			{{ Form::text('nome', null, array ('class' => 'form-control',
												   'placeholder' => 'Il nome del corso/workshop/evento')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('tagline', 'Tagline (Richiesto) : ') }}
			{{ Form::text('tagline', null, array ('class' => 'form-control',
												   'placeholder' => 'Tagline')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('teacher_id', 'Insegnante : ') }}
			{{ Form::select('teacher_id', array('1' => 'Maranza', '2' => 'Cheti Manza')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('descrizione', 'Descrizione (Richiesto) : ') }}
			{{ Form::textarea('descrizione', null, array ('class' => 'form-control',
												   'placeholder' => 'Descrizione')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('programma', 'Programma (Richiesto) : ') }}
			{{ Form::textarea('programma', null, array ('class' => 'form-control',
												   'placeholder' => 'Programma')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-md-offset-4">
		<div class="form-group">
			{{ Form::label('tag_corso', 'Corso : ') }}
			{{ Form::checkbox('tag_corso', 1, array ('class' => 'form-control')) }}
		</div>
		</div>
		<div class="col-md-2">
		<div class="form-group">
			{{ Form::label('tag_workshop', 'Workshop : ') }}
			{{ Form::checkbox('tag_workshop', 1, array ('class' => 'form-control')) }}
		</div>
		</div>
		<div class="col-md-2">
		<div class="form-group">
			{{ Form::label('tag_gratis', 'Gratuito : ') }}
			{{ Form::checkbox('tag_gratis', 1, array ('class' => 'form-control')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('min_partecipanti', 'Minimo partecipanti : ') }}
			{{ Form::text('min_partecipanti', 1, array ('class' => 'form-control',
												   'placeholder' => 'N')) }}
		</div>
		</div>
		<div class="col-md-3">
		<div class="form-group">
			{{ Form::label('max_partecipanti', 'Massimo partecipanti : ') }}
			{{ Form::text('max_partecipanti', null, array ('class' => 'form-control',
												   'placeholder' => 'N')) }}
		</div>
		</div>
		<div class="col-md-2">
		<div class="form-group">
			{{ Form::label('prezzo', 'Prezzo : ') }}
			{{ Form::text('prezzo', null, array ('class' => 'form-control',
												   'placeholder' => 'N')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('attivo', 'Evento attivo : ') }}
			{{ Form::checkbox('attivo', 1, array ('class' => 'form-control')) }}
		</div>
		</div>
	</div>