@extends('layouts.default',['title'=>'Contact'])

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<h2><strong>Contact</strong></h2>
				<p class="text-muted">If you're having trouble with it, please <a href="mailto:ibrahimasalamatabah18@hotmail.com">ask for help</a>. 
				</p>
				<form method="POST" action="#">
					<div class="form-group">
					    <label for="name" class="control-label">Name</label>
					    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name here" required="required" value="{{ old('title') }}" >
					</div>
					<div class="form-group">
					    <label for="email" class="control-label">Email</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email here" required="required" value="{{ old('title') }}" >
					</div>
					<div class="form-group">
					    <label for="message" class="control-label">Message</label>
					    <textarea name="message" class="form-control" id="message" cols="30" rows="10" required="required">{{ old('description')}}</textarea>
					</div>
					<div class="form-group">
					    <input type="submit" value="Send your query" class="btn btn-primary btn-block">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection