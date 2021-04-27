@extends('layout.master')
@section('title')
  Edit the "{{ $event->name }}" Event Information
@endsection

@section('content')
<div class="container pt-0">
  <form enctype="multipart/form-data" id="edit_event_form" name="edit_event_form" method="POST" action="{{ url('/update-event/'.$event->id) }}">
    @csrf
    <h3 class="title">Edit Event Details</h3>
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Event Name</h4>
          <input name="input_event_name" class="form-control" type="text" value="{{ $event->name }}" required="">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Event Topics</h4>
          <input name="input_event_topics" class="form-control" type="text" value="{{ $event->topics }}" required="">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Short Event Description (To be displayed in the preview page)</h4>
          <textarea name="input_event_short_description" class="form-control" type="text" rows="10" required="">{{ $event->short_description }}</textarea>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Long Event Description (This is the full text of the article)</h4>
          <textarea name="input_event_long_description" class="form-control" type="text" rows="25" required="">{{ $event->long_description }}</textarea>
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
      <a onclick="return confirm('Are you sure you want to update this event?')" href="{{ url('/update-event/'.$event->id) }}"><button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Apply Changes</button></a>
      <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
    </div>
  </form>
</div>
@endsection
