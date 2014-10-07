@extends('mainlayout')

@section('content')

<div class="container">
	<h1 class="page-header text-primary">Creazione nuovo corso / workshop<br/></h1>
	<br>
	@if (Session::has('message'))
	<div class="alert alert-danger">
		<p>{{ Session::get('message') }}</p>
		{{ HTML::ul($errors->all()) }}
	</div>
	<br>
	@endif
	{{ Form::open(array('url' => 'courses')) }}
	@include('courses.form')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{{ Form::submit('Crea corso', array('class' => 'btn btn-primary pull-right')) }}
		</div>
	</div>
</div>

@endsection