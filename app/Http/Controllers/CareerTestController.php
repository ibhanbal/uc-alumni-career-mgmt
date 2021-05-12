<?php

namespace App\Http\Controllers;

use App\Models\CareerTest;
use Illuminate\Http\Request;

class CareerTestController extends Controller
{
  public function index()
  {
    return view('career-test.index');
  }

  public function careerTest()
  {
    return view('career-test.career-test');
  }

  public function careerResults(Request $request)
  {

    for($index = 1;$index<=50;$index++)
    {
      $item[$index] = $request->input("item" . $index);
    }

    $extroversion = 20 + $item[1] - $item[6] + $item[11] - $item[16] + $item[21] - $item[26] + $item[31] - $item[36] + $item[41] - $item[46];
    $agreeableness = 14 - $item[2] + $item[7] - $item[12] + $item[17] - $item[22] + $item[27] - $item[32] + $item[37] + $item[42] + $item[47];
    $conscientiousness = 14 + $item[3] - $item[8] + $item[13] - $item[18] + $item[23] - $item[28] + $item[33] - $item[38] + $item[43] + $item[48];
    $neuroticism = 38 - $item[4] + $item[9] - $item[14] + $item[19] - $item[24] - $item[29] - $item[34] - $item[39] - $item[44] - $item[49];
    $openness = 8 + $item[5] - $item[10] + $item[15] - $item[20] + $item[25] - $item[30] + $item[35] + $item[40] + $item[45] + $item[50];

    $career_test = new CareerTest;

    $career_test->extroversion_score = $extroversion;
    $career_test->agreeableness_score = $agreeableness;
    $career_test->conscientiousness_score = $conscientiousness;
    $career_test->neuroticism_score = $neuroticism;
    $career_test->openness_score = $openness;

    $career_test->save();

    $career_test_current = CareerTest::latest()->first();

    $career_test_average = array(
      'average_extroversion_score' => round(CareerTest::avg('extroversion_score')),
      'average_agreeableness_score' => round(CareerTest::avg('agreeableness_score')),
      'average_conscientiousness_score' => round(CareerTest::avg('conscientiousness_score')),
      'average_neuroticism_score' => round(CareerTest::avg('neuroticism_score')),
      'average_openness_score' => round(CareerTest::avg('openness_score')),
    );

    return view('career-test.career-results')
      ->with(['career_test' => $career_test_current])
      ->with(['career_test_average' => $career_test_average]);

    dd($career_test_current);
  }
}
