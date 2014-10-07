	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('nome', 'Nome piano (Richiesto) : ') }}
			{{ Form::text('nome', null, array ('class' => 'form-control',
												   'placeholder' => 'Nome piano')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('tempo', 'Tipologia durata (Richiesto) : ') }}
			{{ Form::text('tempo', null, array ('class' => 'form-control',
												   'placeholder' => 'X giorni al mese')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('postazione', 'Tipo postazione (Richiesto) : ') }}
			{{ Form::text('postazione', null, array ('class' => 'form-control',
												   'placeholder' => '1: Postazione flessibile - 2: postazione fissa')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('scontocorsi', 'Sconto sui corsi : ') }}
			{{ Form::text('scontocorsi', null, array ('class' => 'form-control',
												   'placeholder' => 'XX% di sconto sui corsi')) }}
		</div>
		</div>
		<div class="col-md-4">
		<div class="form-group">
			{{ Form::label('prezzo', 'Prezzo mensile (Richiesto) : ') }}
			{{ Form::text('prezzo', null, array ('class' => 'form-control',
												   'placeholder' => 'XX (gli euro vengono aggiunti in automatico)')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('mostrasusito', 'Mostra nel sito (Richiesto) : ') }}
			{{ Form::checkbox('mostrasusito', 1, true) }}
		</div>
		</div>
	</div>
	