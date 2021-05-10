@extends('layout.master')
@section('title')
	Account Verification
@endsection

@section('content')
<div class="container pt-0">
	<div class="row">
		<!-- <h1>Please wait for your account to be <span class="text-theme-color-2">verified!</span></h1> -->
		<h1>Your account was successfully created! Please <a href="{{ url('/login/') }}"><span class="text-theme-color-2">login</span></a> now!</h1>
	</div>
</div>
@endsection
