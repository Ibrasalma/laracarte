@extends('layouts.default',['title'=>'Forum'])

<link rel="stylesheet" type="text/css" href="{{ asset('/css/forum.css') }}">

@section('content')

@if (false)
	@include('layouts.partials._nav_forum')
@endif
<div class="container">
    <div class="page-header">
        <h1>La liste de tous les forums<span class="pull-right label label-default">:)</span></h1>
    </div>
    <div class="row">
    	@include('layouts.partials._forum_content')
    </div>	
</div>

@stop