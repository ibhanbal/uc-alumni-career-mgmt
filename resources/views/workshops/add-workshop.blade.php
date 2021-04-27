@extends('layout.master')
@section('title')
  Add a New Workshop
@endsection

@section('content')
<div class="container pt-0">
  <form enctype="multipart/form-data" id="add_workshop_form" name="add_workshop_form" method="POST" action="{{ url('/add-workshop/') }}">
    @csrf
    <h3 class="title">Input Workshop Details</h3>
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Workshop Name</h4>
          <input name="input_workshop_name" class="form-control" type="text" placeholder="Enter Workshop Name" required="">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Workshop Topics</h4>
          <input name="input_workshop_topics" class="form-control" type="text" placeholder="Enter Workshop Topics" required="">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Workshop Host</h4>
          <input name="input_workshop_host" class="form-control" type="text" placeholder="Enter Workshop Host" required="">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Workshop Location</h4>
          <input name="input_workshop_location" class="form-control" type="text" placeholder="Enter Workshop Location" required="">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Workshop Start Date</h4>
          <input name="input_workshop_start_date" class="form-control" type="date"></textarea>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Workshop End Date</h4>
          <input name="input_workshop_end_date" class="form-control" type="date"></textarea>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Time</h4>
          <input name="input_workshop_time" class="form-control" type="time" required="">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Workshop Description</h4>
          <textarea name="input_workshop_description" class="form-control" type="text" rows="15" required=""></textarea>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Workshop Registration URL (Google Forms, Survey Monkey, etc.)</h4>
          <input name="input_workshop_event_url" class="form-control" type="text" placeholder="Enter Workshop Registration URL" required="">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Upload Image</h4>
          <input id="image" type="file" name="image">
        </div>
      </div>
    </div>
    <div class="form-group">
      <a onclick="return confirm('Are you sure you want to add this workshop?')" href="{{ url('/add-workshop/') }}"><button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Create New Workshop</button></a>
      <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
    </div>
  </form>
</div>
@endsection
