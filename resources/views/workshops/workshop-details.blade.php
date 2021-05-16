@extends('layout.master')
@section('title')
  Workshops and Seminars
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <ul>
        <li>
          <h5>Topics:</h5>
          <p>{{ $workshop->topics }}</p>
        </li>
        <li>
          <h5>Host:</h5>
          <p>{{ $workshop->host }}</p>
        </li>
        <li>
          <h5>Location:</h5>
          <p>{{ $workshop->location }}</p>
        </li>
        <li>
          <h5>Start Date:</h5>
          <p>{{ $workshop->start_date }}</p>
        </li>
        <li>
          <h5>End Date:</h5>
          <p>{{ $workshop->end_date }}</p>
        </li>
        <li>
          <h5>Time:</h5>
          <p>{{ $workshop->time }}</p>
        </li>
      </ul>
    </div>
    <div class="col-md-8">
      <img style="width: 755px; height: 480px;" src="{{ asset('images/workshop-images/' . $workshop->image_url) }}" alt="{{ asset('images/workshop-images/workshop-placeholder') }}">
    </div>
  </div>
  <div class="row mt-60">
    <h4 class="mt-0">Event Description</h4>
    <p>{!! nl2br(e($workshop->description)) !!}</p>
  </div>
  <a href="{{ url($workshop->event_url) }}"><button class="btn btn-dark btn-theme-colored btn-sm btn-block mt-20 pt-10 pb-10" type="submit">Register now</button></a>
</div>
@endsection
