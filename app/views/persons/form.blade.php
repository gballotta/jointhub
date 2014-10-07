	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('cognome', 'Cognome (Richiesto) : ') }}
			{{ Form::text('cognome', null, array ('class' => 'form-control',
												   'placeholder' => 'Cognome')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('nome', 'Nome (Richiesto) : ') }}
			{{ Form::text('nome', null, array ('class' => 'form-control',
												   'placeholder' => 'Nome')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('luogonascita', 'Nato a : ') }}
			{{ Form::text('luogonascita', null, array ('class' => 'form-control',
												   'placeholder' => 'Nato a')) }}
		</div>
		</div>
		<div class="col-md-2">
		<div class="form-group">
			{{ Form::label('datanascita', 'Data di nascita : ') }}
			{{ Form::text('datanascita', null, array ('class' => 'form-control',
												   'placeholder' => 'AAAA-MM-GG')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('indirizzo', 'Indirizzo (Richiesto) : ') }}
			{{ Form::text('indirizzo', null, array ('class' => 'form-control',
												   'placeholder' => 'Indirizzo')) }}
		</div>
		</div>
		<div class="col-md-3">
		<div class="form-group">
			{{ Form::label('localita', 'Località (Richiesto) : ') }}
			{{ Form::text('localita', null, array ('class' => 'form-control',
												   'placeholder' => 'Località')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('cap', 'CAP (Richiesto) : ') }}
			{{ Form::text('cap', null, array ('class' => 'form-control',
												   'placeholder' => 'CAP')) }}
		</div>
		</div>
		<div class="col-md-4">
		<div class="form-group">
			{{ Form::label('comune', 'Comune (Richiesto) : ') }}
			{{ Form::text('comune', null, array ('class' => 'form-control',
												   'placeholder' => 'Comune')) }}
		</div>
		</div>
		<div class="col-md-2">
		<div class="form-group">
			{{ Form::label('provincia', 'Provincia (Ric) : ') }}
			{{ Form::text('provincia', null, array ('class' => 'form-control',
												   'placeholder' => 'Prov')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('nazione', 'Nazione (Richiesto) : ') }}
			{{ Form::text('nazione', 'Italia', array ('class' => 'form-control',
												   'placeholder' => 'Nazione')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('professione', 'Di cosa ti occupi : (Richiesto) : ') }}
			{{ Form::text('professione', null, array ('class' => 'form-control',
												   'placeholder' => 'Attività')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('telefono', 'Telefono : ') }}
			{{ Form::text('telefono', null, array ('class' => 'form-control',
												   'placeholder' => '0000/0000000')) }}
		</div>
		</div>
		<div class="col-md-5">
		<div class="form-group">
			{{ Form::label('email', 'E-Mail (Richiesto) : ') }}
			{{ Form::text('email', null, array ('class' => 'form-control',
												   'placeholder' => 'uno@due.tre')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('codicefiscale', 'Codice fiscale : ') }}
			{{ Form::text('codicefiscale', null, array ('class' => 'form-control',
												   'placeholder' => 'ABCDEF12G34H567J')) }}
		</div>
		</div>
		<div class="col-md-3">
		<div class="form-group">
			{{ Form::label('partitaiva', 'Partita IVA : ') }}
			{{ Form::text('partitaiva', null, array ('class' => 'form-control',
												   'placeholder' => 'Partita IVA')) }}
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
		<div class="form-group">
			{{ Form::label('role_id', 'Qualifica (richiesto) : ') }}
			{{ Form::select('role_id', $dlist) }}
		</div>
		</div>
	</div>