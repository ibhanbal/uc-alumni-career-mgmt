@extends('layout.master')
@section('title')
  Add a New Event
@endsection

@section('content')
  <section class="divider">
    <div class="container">
      <div class="row pt-30">
        <form enctype="multipart/form-data" id="add_event_form" name="add_event_form" method="POST" action="{{ url('/add-event/') }}">
          @csrf
          <h3 class="title">Input Event Details</h3>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <h4 class="title">Event Name</h4>
                <input name="input_event_name" class="form-control" type="text" placeholder="Enter Event Name" required="">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <h4 class="title">Event Topics</h4>
                <input name="input_event_topics" class="form-control" type="text" placeholder="Enter Event Topics" required="">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <h4 class="title">Short Event Description (To be displayed in the preview page)</h4>
                <textarea name="input_event_short_description" class="form-control" type="text" rows="10" required=""></textarea>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <h4 class="title">Long Event Description (This is the full text of the article)</h4>
                <textarea name="input_event_long_description" class="form-control" type="text" rows="25" required=""></textarea>
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
            <a onclick="return confirm('Are you sure you want to add this event?')" href="{{ url('/add-event/') }}"><button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Create New Event</button></a>
            <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
          </div>

        </form>
      </div>
    </div>
  </section>
@endsection
