@extends('layout.master')
@section('title')
  Careers and Job Listings
@endsection
@section('content')
  <section class="divider">
    <div class="container">
      <div class="row pt-30">
        <div class="col-md-4">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                <div class="media-body"> <strong>LOCATION</strong>
                  <p>{{ $job->location }}</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
              <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"> <i class="pe-7s-call text-theme-colored"></i></a>
                <div class="media-body"> <strong>CONTACT NUMBER</strong>
                  <p>{{ $job->phone }}</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
              <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="https://mail.google.com/"> <i class="pe-7s-mail text-theme-colored"></i></a>
                <div class="media-body"> <strong>CONTACT E-MAIL</strong>
                  <p>{{ $job->email }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <h2 class="line-bottom mt-0 mb-20">{{ $job->job_name }}</h2>
          <h4 class="sub-title">{{ $job->company_name }}</h4>
          <p class="mb-20">{!! nl2br(e($job->job_description)) !!}</p>
          <br />
          <h4>JOB TYPE</h4>
          <p class="mb-20">{{ $job->job_type }}</p>
          <br />
          <h4>REQUIREMENTS</h4>
          <p class="mb-20">{{ $job->job_requirements }}</p>
          <br />
        </div>
        
      </div>
    </div>
  </section>
@endsection
