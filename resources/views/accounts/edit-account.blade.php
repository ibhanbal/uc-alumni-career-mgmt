@extends('layout.master')
@section('title')
	Register for a New Account
@endsection

@section('content')
<div class="container pt-0">
	<div class="row">
		<form id="edit-account" name="edit-account" method="POST" action="{{ url('/update-account/'.$user->id) }}">
			@csrf
			<h3 class="title">Register</h3>
			<div class="row">
        <div class="col-sm-12">
					<div class="form-group">
						<h4 class="title">Name:</h4>
						<input name="updated_name" class="form-control" type="text" value="{{ $user->name }}" required="">
					</div>
				</div>
        <div class="col-sm-12">
					<div class="form-group">
						<h4 class="title">University of the Cordilleras ID:</h4>
						<input name="updated_uc_id" class="form-control" type="text" value="{{ $user->uc_id }}" required="">
					</div>
				</div>
        <div class="col-sm-12">
					<div class="form-group">
						<h4 class="title">Email Address (University of the Cordilleras Email):</h4>
						<input name="updated_email" class="form-control" type="email" value="{{ $user->email }}" required="">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<h4 class="title">Password:</h4>
						<input name="updated_password" class="form-control" type="password" placeholder="Update Password">
					</div>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Update</button>
				<button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
			</div>
		</form>
	</div>
</div>
@endsection
