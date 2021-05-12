@extends('layout.master')
@section('title')
  Resume Builder
@endsection

@section('content')
<div class="container pt-0">
  <form id="create_resume" name="create_resume" method="POST" action="{{ url('/resume') }}">
    @csrf
    <div class="row">
      <h2 class="gen-info text-center">General Information</h2>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Name</h4>
          <input name="input_name" class="form-control" type="text" placeholder="Enter Name" required="">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Contact Number</h4>
          <input name="input_contact_num" class="form-control" type="text" placeholder="Enter Contact Number" required="">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Email</h4>
          <input name="input_email" class="form-control" type="email" placeholder="Enter Email" required="">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <h4 class="title">Address</h4>
          <input name="input_address" class="form-control" type="text" placeholder="Enter Address" required="">
        </div>
      </div>
    </div>
    <div id="edu-att" class="row">
      <h2 class="title text-center">Educational Attainment</h2>
      <div class="text-center">
        <button type="button" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" onclick="enableFields('ter-edu')">Add Tertiary Education</button>
      </div>
      <div id="ter-edu" style="display: none;" class="container">
        <h4 class="title">Tertiary Education</h4>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Course</h4>
            <input name="input_ter_course" class="form-control" type="text" placeholder="Enter Course">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Name of School</h4>
            <input name="input_ter_school" class="form-control" type="text" placeholder="Enter School Name">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Address</h4>
            <input name="input_ter_address" class="form-control" type="text" placeholder="Enter School Address">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Year Graduated</h4>
            <input name="input_ter_graduated" class="form-control" type="date" placeholder="Enter Year Graduated">
          </div>
        </div>
      </div>
      <br />
      <div class="text-center">
        <button type="button" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" onclick="enableFields('sec-edu')">Add Seconday Education</button>
      </div>
      <div id="sec-edu" style="display: none;" class="container">
        <h4 class="title">Secondary Education</h4>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Course</h4>
            <input name="input_sec_course" class="form-control" type="text" placeholder="Enter Course">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Name of School</h4>
            <input name="input_sec_school" class="form-control" type="text" placeholder="Enter School Name">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Address</h4>
            <input name="input_sec_address" class="form-control" type="text" placeholder="Enter School Address">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Year Graduated</h4>
            <input name="input_sec_graduated" class="form-control" type="date" placeholder="Enter Year Graduated">
          </div>
        </div>
      </div>
      <br />
      <div class="text-center">
        <button type="button" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" onclick="enableFields('pri-edu')">Add Primary Education</button>
      </div>
      <div id="pri-edu" style="display: none;" class="container">
        <h4 class="title">Primary Education</h4>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Course</h4>
            <input name="input_pri_course" class="form-control" type="text" placeholder="Enter Course">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Name of School</h4>
            <input name="input_pri_school" class="form-control" type="text" placeholder="Enter School Name">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Address</h4>
            <input name="input_pri_address" class="form-control" type="text" placeholder="Enter School Address">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Year Graduated</h4>
            <input name="input_pri_graduated" class="form-control" type="date" placeholder="Enter Year Graduated">
          </div>
        </div>
      </div>
    </div>
    <div id="work-exp" class="row">
      <h2 class="title text-center">Work Experience</h2>
      <div class="text-center">
        <button type="button" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" onclick="addWorkExp()">Add Additional Work Experience</button>
      </div>
      <div id="works" class="container">
        <h4 class="title">Experience</h4>
        <div id="work" class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Timeline</h4>
            <input name="input_timeline[]" class="form-control" type="text" placeholder="Enter Timeline">
            <h4 class="title">Title</h4>
            <input name="input_title[]" class="form-control" type="text" placeholder="Enter Title">
            <h4 class="title">Organization</h4>
            <input name="input_organization[]" class="form-control" type="text" placeholder="Enter Organization">
            <h4 class="title">Work Description</h4>
            <textarea name="input_work_desc[]" class="form-control" type="text" rows="5"></textarea>
          </div>
        </div>
      </div>
      <br />
    </div>
    <div id="skill-list" class="row">
      <h2 class="title text-center">Skill List</h2>
      <div class="text-center">
        <button type="button" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" onclick="addSkillFields()">Add Skill</button>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div id="skills" class="form-group">
            <br /> <input name="input_skill[]" class="form-control" type="text" placeholder="Enter Skill">
          </div>
        </div>
      </div>
    </div>
    <div id="achievement-list" class="row">
      <h2 class="title text-center">Achievement List</h2>
      <div class="text-center">
        <button type="button" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" onclick="addAchievementFields()">Add Achievement</button>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div id="achievements" class="form-group">
            <br /> <input name="input_achievement[]" class="form-control" type="text" placeholder="Enter Achivement">
          </div>
        </div>
      </div>
    </div>
    <br />
    <div class="form-group">
      <a href="{{ url('/resume') }}" target="_blank"><button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Generate Resume</button></a>
      <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
    </div>
  </form>
</div>
<script type="text/javascript" src="{{ asset('js/resume-builder.js') }}"></script>
@endsection
