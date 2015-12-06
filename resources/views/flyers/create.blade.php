@extends('layout')

@section('content')
	<h1>Sellin your Home?</h1>
	<div class="row">
		<form method="post" action="/flyers"enctype="multipart/form-data" class="col-md-6" >
			@include('flyers.form')
		</form>

		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

	</div>
@stop