@extends('layout.master')
@section('title')
  News and Events
@endsection

@section('content')
<section id="upcoming-events" class="divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg-event.jpeg">
  <div class="container pb-50 pt-80">
    <div class="section-content">
      <div class="row">
          @foreach($events as $event)
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="image-box-thum">
              <img style="width: 360px; height: 240px;" src="{{ asset('images/event-images/' . $event->image_url) }}">
            </div>
            <div class="image-box-details text-center p-20 pt-30 pb-30 bg-lighter">
              <h3 class="title mt-0">{{ $event->name }}</h3>
              <p class="desc mb-20">{{ $event->short_description }}</p>
              <a href="{{ url('/event-details/'.$event->id) }}" class="btn btn-colored btn-theme-colored">Read More</a>
            </div>
          </div>
          @endforeach
      </div>
    </div>
  </div>
</section>
@endsection
