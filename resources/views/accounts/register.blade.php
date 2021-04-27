@extends('layout.master')
@section('title')
	Register for a New Account
@endsection

@section('content')
<div class="container pt-0">
	<div class="row">
		<form id="register" name="register" method="POST" action="/register-account">
			@csrf
			<h3 class="title">Register</h3>
			<div class="row">
        <div class="col-sm-12">
					<div class="form-group">
						<h4 class="title">Name:</h4>
						<input name="input_name" class="form-control" type="text" placeholder="Enter Name" required="">
					</div>
				</div>
        <div class="col-sm-12">
					<div class="form-group">
						<h4 class="title">University of the Cordilleras ID:</h4>
						<input name="input_uc_id" class="form-control" type="text" placeholder="Enter UC ID" required="">
					</div>
				</div>
        <div class="col-sm-12">
					<div class="form-group">
						<h4 class="title">Email Address (University of the Cordilleras Email):</h4>
						<input name="input_email" class="form-control" type="email" placeholder="Enter UC Email" required="">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<h4 class="title">Password:</h4>
						<input name="input_password" class="form-control" type="password" placeholder="Enter Password" required="">
					</div>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Register</button>
				<button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
			</div>
		</form>
	</div>
</div>
@endsection
