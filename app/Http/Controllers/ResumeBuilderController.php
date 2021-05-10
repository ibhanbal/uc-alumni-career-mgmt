<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ResumeBuilderController extends Controller
{
  public function index()
  {
    return view('resume-builder.index');
  }

  public function resume(Request $request)
  {
    $basic_info = array(
      'name' => $request->input('input_name'),
      'contact_num' => $request->input('input_contact_num'),
      'email' => $request->input('input_email'),
      'address' => $request->input('input_address'),

      'grad_course' => $request->input('input_grad_course'),
      'grad_school' => $request->input('input_grad_school'),
      'grad_address' => $request->input('input_grad_address'),
      'grad_graduated' => $request->input('input_grad_graduated'),

      'ter_course' => $request->input('input_ter_course'),
      'ter_school' => $request->input('input_ter_school'),
      'ter_address' => $request->input('input_ter_address'),
      'ter_graduated' => $request->input('input_ter_graduated'),

      'sec_course' => $request->input('input_sec_course'),
      'sec_school' => $request->input('input_sec_school'),
      'sec_address' => $request->input('input_sec_address'),
      'sec_graduated' => $request->input('input_sec_graduated'),

      'pri_course' => $request->input('input_pri_course'),
      'pri_school' => $request->input('input_pri_school'),
      'pri_address' => $request->input('input_pri_address'),
      'pri_graduated' => $request->input('input_pri_graduated'),
    );

    $skills = $request->input('input_skill');
    $achievements = $request->input('input_achievement');

    $work_exps = array(
      'timeline' => $request->input('input_timeline'),
      'title' => $request->input('input_title'),
      'organization' => $request->input('input_organization'),
      'work_desc' => $request->input('input_work_desc')
    );

    return view('resume-builder.resume')
      ->with(['basic_info' => $basic_info])
      ->with(['skills' => $skills])
      ->with(['achievements' => $achievements])
      ->with(['work_exps' => $work_exps]);
  }

  public function resumePDF(Request $request)
  {
    $basic_info = array(
      'name' => $request->input('input_name'),
      'contact_num' => $request->input('input_contact_num'),
      'email' => $request->input('input_email'),
      'address' => $request->input('input_address'),

      'grad_course' => $request->input('input_grad_course'),
      'grad_school' => $request->input('input_grad_school'),
      'grad_address' => $request->input('input_grad_address'),
      'grad_graduated' => $request->input('input_grad_graduated'),

      'ter_course' => $request->input('input_ter_course'),
      'ter_school' => $request->input('input_ter_school'),
      'ter_address' => $request->input('input_ter_address'),
      'ter_graduated' => $request->input('input_ter_graduated'),
    );

    return response()->streamDownload(function () {
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML('resume-builder.resumePDF', compact('basic_info'));
            echo $pdf->stream();
        }, 'resume.pdf');
  }
}
