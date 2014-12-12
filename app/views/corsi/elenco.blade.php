@extends('mainlayout')

@section('content')

<div class="container">
	<h2 class="headline text-color">
	<span class="border-color">Calendario corsi</span>
	</h2>
	<p class="text-justify">Qui sotto trovate l'elenco di tutti i nostri corsi a partire da oggi.</p>
	<p class="text-justify">Per i workshops (incontri singoli di breve durata) sono elencate tutte le date fissate
		dato che potrebbe essere ripetuto più volte. Per i corsi, la data del calendario si riferisce al primo
		incontro. Le date successive sono indicate nel programma, visualizzabile cliccando sul pulsante
		"Info e prenotazioni".</p>
	<br>
	<div class="alert alert-warning" role="alert">
		<p class="text-justify"><b>Attenzione : </b>Al momento il servizio prenotazioni non è disponibile, di
			conseguenza i vari pulsanti di prenotazione sono disabilitati.</p>
	</div>
	<br> 
	<div class="row">
		@foreach($corsi as $corso)
		
			<?php
			$local = setlocale(LC_ALL, 'it-IT');
			$dataFormattata = DateTime::createFromFormat('Y-m-d G:i:s', $corso->data)/*->format('j F Y')*/;
			$dataFormattata = strtotime($corso->data);
			$dataFormattata2 = strftime('%A %e %B %Y', $dataFormattata);
			$riempimento = $corso->prenotati / $corso->max_partecipanti;
			$colorePannello = ( ($corso->tag_gratis == 1) ? "panel-green" : "panel-blue" );
			?>
		
			<div class="col-sm-4">
				<div class="panel {{$colorePannello}}">
					<div class="panel-heading" style="min-height: 300px">
						<!--<?php var_dump($local);?>-->
						<div>
							<p>20/12/2014<br></p>
						</div>
						<div class="center-block" style="padding-top: 15px">
							<p class="text-center">
								@if($corso->tag_workshop == 1)
								Workshop
								@elseif($corso->tag_corso == 1)
								Corso
								@endif
							</p>
							<h3 class="text-center">{{$corso->nome}}</h3>
							<p class="text-center">{{$corso->tagline}}</p>
							@if($riempimento >= 0.8)
							<p class="text-center"><span class="label label-warning">POSTI IN ESAURIMENTO</span></p>
							@endif
						</div>
						<div style="position:absolute; right: 20px; bottom:25px">
							<a href="/corso/{{ $corso->course_id }}">
								<button type="button" class="btn btn-default">
									Info e prenotazioni
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		
		@endforeach
	</div>
</div>

@endsection