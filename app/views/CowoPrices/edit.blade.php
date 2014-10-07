@extends('mainlayout')

@section('content')

<div class="container">
	<h1 class="page-header text-primary">Modifica articolo<br/></h1>
	<br>
	@if (Session::has('message'))
	<div class="alert alert-danger">
		<p>{{ Session::get('message') }}</p>
		{{ HTML::ul($errors->all()) }}
	</div>
	<br>
	@endif
	{{ Form::model($prezzo, array('route' => array('CowoPrices.update', $prezzo->id), 'method' => 'PUT')) }}
	@include('CowoPrices.form')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{{ Form::submit('Modifica articolo', array('class' => 'btn btn-primary pull-right')) }}
		</div>
	</div>
</div>

@endsection