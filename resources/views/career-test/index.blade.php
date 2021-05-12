@extends('layout.master')
@section('title')
  Career Test Instructions
@endsection

@section('content')
<div class="container pt-0">

  <h4>Before proceeding, please read the following below:</h4>

  <h5>The big five personality test is a model used to understand the relationship between one's personality and their academic behaviors. This test consists of fifty items where you must rate on how true they are about you on a scale from 1 to 5, with 1=Disagree, 3=Neutral, and 5=Agree.</h5>

  <h5>Answering these questions accurately requires honest reflection on how you really think, feel, and act in general. Please think of what you are like now, not how you would like to be.</h5>

  <a href="{{ url('career-test')}}"><button type="button" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">I understand</button></a>

</div>
@endsection
