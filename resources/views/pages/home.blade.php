@extends('layouts.default',['title'=>'Home','logged_logo'])
<link rel="stylesheet" href="{{ asset('/css/nav.css') }}">
@section('content')
	<div class="container">
		<div class="row">
			@include('layouts.partials._section')
		</div>
	</div>
@stop
<script src="{{ asset('/js.section.js') }}"></script>