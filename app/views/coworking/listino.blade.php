@extends('mainlayout')

@section('content')

<div class="container">

	<div class="row pricing-p">
		<div class="col-sm-3">
			<div class="item">
				<div class="head bg-color">
					<h4>Day Pass</h4>
					<div class="arrow border-color"></div>
				</div>
				<div class="sceleton">
					<h5>€ 20<span> / giorno</span></h5>
					<ul>
						<li>Ingresso giornaliero</li>
						<li>Postazione flessibile</li>
						<li>Utilizzo dei servizi della struttura</li>
						<li><?php echo '---'; ?></li>
					</ul>
					<!--<a class="btn btn-default btn-block" href="#">Subscribe</a>-->
				</div>
			</div>
		</div>
		@foreach($listino as $item)	
		<div class="col-sm-3">
			<div class="item">
				<div class="head bg-color">
					<h4>{{ $item->nome }}</h4>
					<div class="arrow border-color"></div>
				</div>
				<div class="sceleton">
					<h5>€ {{ $item->prezzo }}<span> / mese</span></h5>
					<ul>
						<li>{{ $item->tempo }}</li>
						<li>
							@if( $item->postazione == 1 )
							Postazione flessibile
							@elseif ($item->postazione == 2)
							Postazione fissa
							@endif
						</li>
						<li>Utilizzo dei servizi della struttura</li>
						<li>
							@if( $item->scontocorsi != 0)
							{{ $item->scontocorsi }}% di sconto sui corsi
							@else
							<?php echo '---'; ?>
							@endif
						</li>
					</ul>
					<!--<a class="btn btn-default btn-block" href="#">Subscribe</a>-->
				</div>
			</div>
		</div>
		@endforeach
	</div>


</div>

@endsection