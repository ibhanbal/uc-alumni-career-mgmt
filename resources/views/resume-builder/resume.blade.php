@extends('layout.master')
@section('title')
  Resume Builder
@endsection

@section('content')
<div class="container pt-0" id="resumePDF">
  <div class="section-content">
    <div class="row">
      <div>
        <h3>{{ $basic_info['name'] }}</h3>
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
              <p class="text-theme-colored"><b>{{ $basic_info['ter_course'] }}</b></p>
              <li>{{ $basic_info['ter_school'] }}</li>
              <li>{{ $basic_info['ter_address'] }}</li>
              <li>Year Graduated: {{ $basic_info['ter_graduated'] }}</li>
            </ul>
            <ul class="list theme-colored angle-double-right m-0">
              <hr>
              <p class="text-theme-colored"><b>{{ $basic_info['sec_course'] }}</b></p>
              <li>{{ $basic_info['sec_school'] }}</li>
              <li>{{ $basic_info['sec_address'] }}</li>
              <li>Year Graduated: {{ $basic_info['sec_graduated'] }}</li>
            </ul>
            <ul class="list theme-colored angle-double-right m-0">
              <hr>
              <p class="text-theme-colored"><b>{{ $basic_info['pri_course'] }}</b></p>
              <li>{{ $basic_info['pri_school'] }}</li>
              <li>{{ $basic_info['pri_address'] }}</li>
              <li>Year Graduated: {{ $basic_info['pri_graduated'] }}</li>
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

<div class="container pt-0 text-center">
  <button onClick="printDiv('resumePDF')" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Print PDF</button>
</div>

<script>
  function printDiv(divName)
  {
			var printContents = document.getElementById(divName).outerHTML;
			var originalContents = document.body.outerHTML;

			document.body.outerHTML = printContents;
			window.print();
			document.body.outerHTML = originalContents;
		}
</script>

<!-- <div class="text-center">
  <form name="create_resume_pdf" method="POST" action="{{ url('/resume-pdf') }}">
    @csrf
    @foreach($basic_info as $data)
      <input name="somedata[]" value="{{ $data }}" type="hidden">
    @endforeach
    <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Print PDF</button>
  </form>
</div> -->
@endsection
