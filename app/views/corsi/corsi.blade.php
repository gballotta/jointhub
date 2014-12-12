@extends('mainlayout')

@section('content')

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h2 class="headline text-color">
				<span class="border-color">I corsi e i workshops di Jointhub</span>
			</h2>
			<p>
				Per conoscere le date controllate il nostro <a href="/corsi">Calendario Corsi</a>.<br/><br/>
				Gli eventi marcati in verde sono gratuiti.<br/><br/>
			</p> 
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<p>
			</p>
		</div>
	</div>
	@foreach($corsi as $corso)
	<div class="row clearfix">
		<div class="col-md-12 column">
			@if($corso->tag_gratis == 1)
			<div class="panel panel-green">
			@else
			<div class="panel panel-blue">
			@endif
				<div class="panel-heading">
					<h3 class="panel-title">
						{{$corso->nome}}
					</h3>
					<h5>
						{{$corso->tagline}}
					</h5>
				</div>
				<div class="panel-body">
					<span class="label label-primary">
					@if($corso->tag_workshop == 1)
					Workshop
					@elseif($corso->tag_corso == 1)
					Corso
					@endif
					</span><p></p>
					<p>
						{{$corso->descrizione}}
					</p>
					<a href="/corso/{{$corso->id}}">
						<button type="button" class="btn btn-primary pull-right">Dettagli</button>
					</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endsection