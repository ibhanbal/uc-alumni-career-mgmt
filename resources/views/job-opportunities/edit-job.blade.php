@extends('layout.master')
@section('title')
  Edit the "{{ $job->job_name }}" Job Information
@endsection

@section('content')
  <section class="divider">
    <div class="container">
      <div class="row pt-30">
        <form id="edit_job_form" name="edit_job_form" method="POST" action="{{ url('/update-job/'.$job->id) }}">
          @csrf
          <h3 class="title">Edit Job Details</h3>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <h4 class="title">Job Name</h4>
                <input name="input_job_name" class="form-control" type="text" value="{{ $job->job_name }}" required="">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <h4 class="title">Job Type</h4>
                <input name="input_job_type" class="form-control" type="text" value="{{ $job->job_type }}" required="">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <h4 class="title">Timeline</h4>
                <input name="input_timeline" class="form-control" type="text" value="{{ $job->timeline }}" required="">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <h4 class="title">Company Name</h4>
                <input name="input_company_name" class="form-control" type="text" value="{{ $job->company_name }}" required="">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <h4 class="title">Job Description</h4>
                <textarea name="input_job_description" class="form-control required" rows="8">{!! nl2br(e($job->job_description)) !!}</textarea>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <h4 class="title">Job Requirements</h4>
                <textarea name="input_job_requirements" class="form-control required" rows="8">{{ $job->job_requirements }}</textarea>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <h4 class="title">Location</h4>
                <input name="input_location" class="form-control" type="text" value="{{ $job->location }}" required="">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <h4 class="title">Email</h4>
                <input name="input_email" class="form-control" type="text" value="{{ $job->email }}" required="">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <h4 class="title">Phone</h4>
                <input name="input_phone" class="form-control" type="text" value="{{ $job->phone }}" required="">
              </div>
            </div>
          </div>

          <div class="form-group">
            <a onclick="return confirm('Are you sure you want to update this job?')" href="{{ url('/update-job/'.$job->id) }}"><button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Apply Changes</button></a>
            <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
          </div>

        </form>
      </div>
    </div>
  </section>
@endsection
