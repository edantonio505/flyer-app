@extends('layout')

@section('content')
	<h1>Sellin your Home?</h1>

	<form method="post" action="/flyers"enctype="multipart/form-data">
		@include('flyers.form')
	</form>
@stop