@extends('layouts.default',['title'=>'about'])

@section('content')
	<div class="container">
		<h1 >What is {{ config('app.name') }}?</h1>
		<p>{{ config('app.name') }} is a clone app of <a href="https://www.laramap.com" target="_blank">Laramap</a></p>
		<div class="row">
			<div class="col-md-6">
				<p class="alert alert-warning">
					<strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>This has been built by <a href="http://twitter.com/ibrasalma">@ibrasalma</a> for learning purpose</strong>
				</p>
			</div>
		</div>
		<p>feel free to help to improve the <a href="https://github.com/Ibrasalma/{{ config('app.name') }}" target="_blank">code source</a></p>

		<hr>

		<h2>What is laramap?</h2>
		<p>{{ config('app.name') }} is a website by which {{ config('app.name') }} was inspired</p>
		<p>More info <a href="https://www.laramap.com/p/about">here</a></p>

		<hr>

		<h2>Which tools and services are used in {{ config('app.name') }}?</h2>
		<p>Basically it is built on Laravel &amp; Bootstrap. But there's brunch of services uses for email and other sections.</p>
		<ul>
			<li>Laravel</li>
			<li>Bootstrap</li>
			<li>Amazon C3</li>
			<li>Mandrill</li>
			<li>Google Maps</li>
			<li>Gravatar</li>
			<li>Anthony Matin's Geolocation Package</li>
			<li>Miche Fortin's Mark down package</li>
			<li>Heroku</li>
		</ul>
	</div>
    
@stop