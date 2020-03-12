@extends('layouts.default',['title'=>'Home'])
<link rel="stylesheet" href="{{ asset('/css/nav.css') }}">
@section('content')
	<div class="container">
		<div class="row">
			@include('layouts.partials._section')
		</div>
	</div>
@stop
