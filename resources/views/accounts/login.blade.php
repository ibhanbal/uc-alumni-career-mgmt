@extends('layout.master')
@section('title')
	Login to your Account
@endsection

@section('content')
<div class="container pt-0">
	<div class="row">
		<form id="login" name="login" method="POST" action="/login">
			@csrf
			<h3 class="title">Login</h3>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<h4 class="title">Email Address:</h4>
						<input name="email" class="form-control" type="email" placeholder="Enter Email" required="">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<h4 class="title">Password:</h4>
						<input name="password" class="form-control" type="password" placeholder="Enter Password" required="">
					</div>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Login</button>
				<button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
			</div>
		</form>
		<a href="{{ url('/register') }}"><u>Register for a new Account</u></a>
	</div>
</div>
@endsection
