@extends('layout.master')
@section('title')
  Edit Workshops and Seminars
@endsection

@section('content')
<section id="upcoming-workshops" class="divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg-workshop.jpg">
  <div class="container pb-50 pt-80">
    <div class="section-content">
      <div class="row">
        @foreach($workshops as $workshop)
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="schedule-box maxwidth500 bg-light mb-30">
            <div class="thumb">
              <img class="img-fullwidth" alt="" style="width: 220px; height: 200px;" src="{{ asset('images/workshop-images/' . $workshop->image_url) }}">
              <div class="overlay">
                <a href="{{ url('/workshop-details/'.$workshop->id) }}"><i class="fa fa-calendar mr-5"></i></a>
              </div>
            </div>
            <div class="schedule-details clearfix p-15 pt-10">
              <h5 class="font-16 title"><a href="{{ url('/workshop-details/'.$workshop->id) }}">{{ $workshop->name }}</a></h5>
              <ul class="list-inline font-11 mb-20">
                <li><i class="fa fa-calendar mr-5"></i>{{ $workshop->time }}</li>
                <li><i class="fa fa-map-marker mr-5"></i>{{ $workshop->location }}</li>
              </ul>
              <p>{{ $workshop->topics }}</p>
              <div class="mt-10">
                <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="{{ url($workshop->event_url) }}">Register</a>
                <a href="{{ url('/workshop-details/'.$workshop->id) }}" class="btn btn-dark btn-sm mt-10">Details</a>
                <a href="{{ url('/edit-workshop/'.$workshop->id) }}" class="btn btn-dark btn-sm mt-10">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete this workshop?')" href="{{ url('/delete-workshop/'.$workshop->id) }}" class="btn btn-dark btn-sm mt-10">Delete</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>
</section>
@endsection
