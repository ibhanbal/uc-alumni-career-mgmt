@extends('layout.master')
@section('title')
	Welcome to the UC Career Guidance Website!
@endsection
@section('content')
<div class="container pt-0">
	<div class="text-center">
		<h1>Welcome to the <span class="text-theme-color-2">UC Career Guidance Website!</span></h1>
		<h2>Please <a href="{{ url('/register/') }}"><span class="text-theme-color-2">register</span></a> for a new student account or <a href="{{ url('/login/') }}"><span class="text-theme-color-2">login</span></a> to access the features of the website.</h2>
	</div>
</div>
@endsection
