@extends('layout.master')
@section('title')
  Resume Builder
@endsection

@section('content')
<div class="container pt-0">
  <form id="create_resume" name="create_resume" method="POST" action="{{ url('/resume') }}">
    @csrf
    <div class="row">
      <h3 class="gen-info">General Information</h3>
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
      <h3 class="title">Educational Attainment</h3>
      <button type="button" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" onclick="enableFields('grad-school')">Add Graduate School</button>
      <div id="grad-school" style="display: none;" class="row">
        <h4 class="title">Graduate School Education</h4>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Course</h4>
            <input name="input_grad_course" class="form-control" type="text" placeholder="Enter Course">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Name of School</h4>
            <input name="input_grad_school" class="form-control" type="text" placeholder="Enter School Name">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Address</h4>
            <input name="input_grad_address" class="form-control" type="text" placeholder="Enter School Address">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <h4 class="title">Year Graduated</h4>
            <input name="input_grad_graduated" class="form-control" type="date" placeholder="Enter Year Graduated">
          </div>
        </div>
      </div>
      <br />
      <button type="button" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" onclick="enableFields('ter-edu')">Add Tertiary Education</button>
      <div id="ter-edu" style="display: none;" class="row">
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
    </div>
    <div id="work-exp" class="row">
      <h3 class="title">Work Experience</h3>
      <button type="button" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" onclick="addWorkExp()">Add Additional Work Experience</button>
      <div id="works" class="row">
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
      <h3 class="title">Skill List</h3>
      <button type="button" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" onclick="addSkillFields()">Add Skill</button>
      <div class="row">
        <div class="col-sm-12">
          <div id="skills" class="form-group">
            <br /> <input name="input_skill[]" class="form-control" type="text" placeholder="Enter Skill">
          </div>
        </div>
      </div>
    </div>
    <div id="achievement-list" class="row">
      <h3 class="title">Achievement List</h3>
      <button type="button" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" onclick="addAchievementFields()">Add Achievement</button>
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
