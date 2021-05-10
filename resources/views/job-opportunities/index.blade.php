@extends('layout.master')
@section('title')
  Careers and Job Listings
@endsection

@section('content')
<br />

<div class="card-body">
  <div style="padding: 0px 25px 0px 25px;" class="table-responsive">
    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th width="15%">Company Name</th>
          <th width="15%">Title</th>
          <th width>Description</th>
          <th width="10%">Job Type</th>
          <th width="15%">Additional Information</th>
        </tr>
      </thead>
      <tbody>
        @foreach($jobs as $job)
        <tr>
          <td>{{ $job->company_name }}</td>
          <td>{{ $job->job_name }}</td>
          <td>{!! nl2br(e($job->job_description)) !!}</td>
          <td>{{ $job->job_type }}</td>
          <td><a href="{{ url('/job-details/'.$job->id) }}"><button>Details</button></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
