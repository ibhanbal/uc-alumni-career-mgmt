@extends('layout.master')
@section('title')
  Add a New Job
@endsection

@section('content')
<div class="container pt-0">
  <form id="add_job_form" name="add_job_form" method="POST" action="{{ url('/add-job') }}">
  @csrf
  <h3 class="title">Input Job Details</h3>
  <div class="row">
    <div class="col-sm-12">
      <div class="form-group">
        <h4 class="title">Job Name</h4>
        <input name="input_job_name" class="form-control" type="text" placeholder="Enter Job Title" required="">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="form-group">
        <h4 class="title">Job Type</h4>
        <input name="input_job_type" class="form-control" type="text" placeholder="Enter Job Type" required="">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="form-group">
        <h4 class="title">Timeline</h4>
        <input name="input_timeline" class="form-control" type="text" placeholder="Enter Job Timeline" required="">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="form-group">
        <h4 class="title">Company Name</h4>
        <input name="input_company_name" class="form-control" type="text" placeholder="Enter Company Name" required="">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="form-group">
        <h4 class="title">Job Description</h4>
        <textarea name="input_job_description" class="form-control required" rows="8"></textarea>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="form-group">
        <h4 class="title">Job Requirements</h4>
        <textarea name="input_job_requirements" class="form-control required" rows="8"></textarea>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="form-group">
        <h4 class="title">Location</h4>
        <input name="input_location" class="form-control" type="text" placeholder="Enter Job Location" required="">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="form-group">
        <h4 class="title">Email</h4>
        <input name="input_email" class="form-control" type="text" placeholder="Enter Contact Email" required="">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="form-group">
        <h4 class="title">Phone</h4>
        <input name="input_phone" class="form-control" type="text" placeholder="Enter Contact Phone Number/s" required="">
      </div>
    </div>
  </div>

  <div class="form-group">
    <a onclick="return confirm('Are you sure you want to add this job?')" href="{{ url('/add-job') }}"><button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Create New Job</button></a>
    <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
  </div>

  </form>
</div>
@endsection
