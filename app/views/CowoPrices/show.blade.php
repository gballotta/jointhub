@extends('mainlayout')

@section('content')

<div class="container">
	<h1 class="page-header text-primary">Anteprima articolo<br/></h1>
	<br>
	<div class="row pricing-p">	
		<div class="col-sm-3">
			<div class="item">
				<div class="head bg-color">
					<h4>{{ $articolo->nome }}</h4>
					<div class="arrow border-color"></div>
				</div>
				<div class="sceleton">
					<h5>€ {{ $articolo->prezzo }}<span> / mese</span></h5>
					<ul>
						<li>{{ $articolo->tempo }}</li>
						<li>
							@if( $articolo->postazione == 1 )
							Postazione flessibile
							@elseif ($articolo->postazione == 2)
							Postazione fissa
							@endif
						</li>
						<li>Utilizzo dei servizi della struttura</li>
						<li>
							@if( $articolo->scontocorsi != 0)
							{{ $articolo->scontocorsi }}% di sconto sui corsi
							@else
							<?php echo ' '; ?>
							@endif
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection