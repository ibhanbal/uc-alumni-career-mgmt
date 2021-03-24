@extends('layout.master')
@section('title')
	Welcome to the UC Alumni Sample Site!
@endsection
@section('content')
<div class="container pt-0">
	<div class="row">
		<form action="/login" method="POST">
			@csrf
			<label>Email Address:</label>
			<input type="email" name="email">
			<label>Password:</label>
			<input type="password" name="password">
			<input type="submit" name="submit">
		</form>
	</div>
</div>
@endsection
