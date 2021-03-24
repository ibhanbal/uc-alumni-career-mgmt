@extends('layout.master')
@section('title')
  Resume Builder
@endsection

@section('content')
<section class="">
  <div class="container">

    <div class="section-content">
      <div class="row">
          <div>
            <h3>{{ $basic_info['name'] }}</h3>
            <h4 class="text-theme-colored">{{ $basic_info['grad_course'] }}</h4>
            <h4 class="text-theme-colored">{{ $basic_info['ter_course'] }}</h4>
          </div>

          <br />

          <h4 class="line-bottom">Contact Information:</h4>
          <div class="row">
            <div class="col-sx-12 col-sm-4 col-md-4">
              <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                <div class="media-left">
                  <i class="fa fa-map-marker text-theme-colored font-24 mt-5"></i>
                </div>
                <div class="media-body">
                  <h5 class="mt-0 mb-0">Address:</h5>
                  <p>{{ $basic_info['address'] }}</p>
                </div>
              </div>
            </div>
            <div class="col-sx-12 col-sm-4 col-md-4">
              <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                <div class="media-left">
                  <i class="fa fa-phone text-theme-colored font-24 mt-5"></i>
                </div>
                <div class="media-body">
                  <h5 class="mt-0 mb-0">Phone:</h5>
                  <p>{{ $basic_info['contact_num'] }}</p>
                </div>
              </div>
            </div>
            <div class="col-sx-12 col-sm-4 col-md-4">
              <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
                <div class="media-left">
                  <i class="fa fa-envelope-o text-theme-colored font-24 mt-5"></i>
                </div>
                <div class="media-body">
                  <h5 class="mt-0 mb-0">Email:</h5>
                  <p>{{ $basic_info['email'] }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-content">
        <div class="row">
          <div>
            <h4 class="line-bottom">About Me:</h4>
            <dl class="dl-horizontal doctor-info">
              <dt>Educational Attainment</dt>
              <dd>
                <ul class="list theme-colored angle-double-right m-0">
                  <p class="text-theme-colored"><b>{{ $basic_info['grad_course'] }}</b></p>
                  <li>{{ $basic_info['grad_school'] }}</li>
                  <li>{{ $basic_info['grad_address'] }}</li>
                  <li>Year Graduated: {{ $basic_info['grad_graduated'] }}</li>
                </ul>
                <ul class="list theme-colored angle-double-right m-0">
                  <hr>
                  <p class="text-theme-colored"><b>{{ $basic_info['ter_course'] }}</b></p>
                  <li>{{ $basic_info['ter_school'] }}</li>
                  <li>{{ $basic_info['ter_address'] }}</li>
                  <li>Year Graduated: {{ $basic_info['ter_graduated'] }}</li>
                </ul>
              </dd>
              <hr>

              <dt>Work Experience</dt>
              <dd>
                @foreach($work_exps['title'] as $key => $title)
                <ul class="list theme-colored angle-double-right m-0">
                  <p class="text-theme-colored"><b>{{ $title }}</b></p>
                  <li>{{ $work_exps['timeline'][$key] }}</li>
                  <li>{{ $work_exps['organization'][$key] }}</li>
                  <li>{{ $work_exps['work_desc'][$key] }}</li>
                </ul>
                @endforeach
              </dd>
              <hr>

              <dt>Skills</dt>
              <dd>
                @foreach($skills as $skill)
                <ul class="list theme-colored angle-double-right m-0">
                  <li>{{ $skill }}</li>
                </ul>
                @endforeach
              </dd>
              <hr>

              <dt>Achievements</dt>
              <dd>
                @foreach($achievements as $achievement)
                <ul class="list theme-colored angle-double-right m-0">
                  <li>{{ $achievement }}</li>
                </ul>
                @endforeach
              </dd>
            </dl>
          </div>
        </div>
      </div>

  </div>
</section>

@endsection
