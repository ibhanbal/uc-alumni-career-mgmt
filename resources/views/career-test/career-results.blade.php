@extends('layout.master')
@section('title')
  Career Test Results
@endsection

@section('content')
<div class="container pt-0">
  <h3 align="center">Thank you very much for answering our <span class="text-theme-color-2">Career Test</span>!</h3>
  <h4 align="center">Your score for each part of the career test are as follows:</h4>
  <div class="col-sm-6 col-md-6">
    <div class="heading-line-bottom">
      <h4 class="text-center">Your Career Test Results</h4>
    </div>
    <div style="width: 80%" class="center">
      <canvas id="current_career_test_polar" width="500" height="500"/>
      </canvas>
      <table align="center" width="80%" cellspacing="0">
        <thead>
          <tr>
            <th width="50%">Category</th>
            <th width="20%">Score</th>
            <th width="10%">Label</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Extroversion Score</td>
            <td>{{ $career_test->extroversion_score }}</td>
            <td><div class="color-box" style="background-color: #FF5A5E;"></div></td>
          </tr>
          <tr>
            <td>Agreeableness Score</td>
            <td>{{ $career_test->agreeableness_score }}</td>
            <td><div class="color-box" style="background-color: #46BFBD;"></div></td>
          </tr>
          <tr>
            <td>Conscientiousness Score</td>
            <td>{{ $career_test->conscientiousness_score }}</td>
            <td><div class="color-box" style="background-color: #FDB45C;"></div></td>
          </tr>
          <tr>
            <td>Neuroticism Score</td>
            <td>{{ $career_test->neuroticism_score }}</td>
            <td><div class="color-box" style="background-color: #949FB1;"></div></td>
          </tr>
          <tr>
            <td>Openness Score</td>
            <td>{{ $career_test->openness_score }}</td>
            <td><div class="color-box" style="background-color: #4D5360;"></div></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="col-sm-6 col-md-6">
    <div class="heading-line-bottom">
      <h4 class="text-center">Average Career Test Results</h4>
    </div>
    <div style="width: 80%" class="center">
      <canvas id="average_career_test_polar" width="500" height="500"/>
      </canvas>
      <table align="center" width="80%" cellspacing="0">
        <thead>
          <tr>
            <th width="55%">Category</th>
            <th width="15%">Score</th>
            <th width="10%">Label</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Average Extroversion Score</td>
            <td>{{ $career_test_average['average_extroversion_score'] }}</td>
            <td><div class="color-box" style="background-color: #FF5A5E;"></div></td>
          </tr>
          <tr>
            <td>Average Agreeableness Score</td>
            <td>{{ $career_test_average['average_agreeableness_score'] }}</td>
            <td><div class="color-box" style="background-color: #46BFBD;"></div></td>
          </tr>
          <tr>
            <td>Average Conscientiousness Score</td>
            <td>{{ $career_test_average['average_conscientiousness_score'] }}</td>
            <td><div class="color-box" style="background-color: #FDB45C;"></div></td>
          </tr>
          <tr>
            <td>Average Neuroticism Score</td>
            <td>{{ $career_test_average['average_neuroticism_score'] }}</td>
            <td><div class="color-box" style="background-color: #949FB1;"></div></td>
          </tr>
          <tr>
            <td>Average Openness Score</td>
            <td>{{ $career_test_average['average_openness_score'] }}</td>
            <td><div class="color-box" style="background-color: #4D5360;"></div></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="container" align="center">
    <div class="heading-line-bottom">
      <h4 class="text-center">Comparison of Personal and Average Career Test Results</h4>
    </div>
    <div style="width: 50%" class="center">
      <canvas id="comparison_career_test_radar" width="500" height="500"/>
      </canvas>
      <table align="center" width="60%" cellspacing="0">
        <thead>
          <tr>
            <th width="55%">Category</th>
            <th width="10%">Label</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Personal Career Test Scores</td>
            <td><div class="color-box" style="background-color: #dcdcdc;"></div></td>
          </tr>
          <tr>
            <td>Average Career Test Scores</td>
            <td><div class="color-box" style="background-color: #97bbcd;"></div></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="container" align="center">
    <div class="heading-line-bottom">
      <h4 class="text-center">Career Test Suggestions</h4>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="vertical-tab">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#ext_tab" data-toggle="tab">Extroversion</a></li>
            <li><a href="#agr_tab" data-toggle="tab">Agreeableness</a></li>
            <li><a href="#con_tab" data-toggle="tab">Conscientiousness</a></li>
            <li><a href="#neu_tab" data-toggle="tab">Neuroticism</a></li>
            <li><a href="#ope_tab" data-toggle="tab">Openness</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="tab-content text-left">
          <div class="tab-pane fade in active" id="ext_tab">
            <div class="row">
              <div class="col-md-12">
                <p><b>Extraversion</b> is an person’s energetic approach towards social interactions and other outside elements. This is determined by your sociability, assertiveness, and talkativeness. They are usually those who enjoy social events and activities. They may also be more inclined to external stimulations and have characteristics like that of extroverts. People with high extraversion may also function well in groups and are capable of leading others. People with low extraversion are more like introverts and may do not like social interactions. They may also keep to themselves and prefer to be alone. This also means that they shy away from social interactions and prefer working alone. </p>
                <p>If your extroversion score is high you will generally like to be around people. Consider one of these careers for your personality type:</p>
                <ul class="list theme-colored angle-double-right m-0">
                  <li>Actor</li>
                  <li>Business Owner</li>
                  <li>Filmmaker</li>
                  <li>Journalist</li>
                  <li>Musician</li>
                  <li>Psychiatrist</li>
                  <li>Psychologist</li>
                  <li>Screenwriter</li>
                  <li>Songwriter</li>
                  <li>Teacher</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="agr_tab">
            <div class="row">
              <div class="col-md-12">
                <p><b>Agreeableness</b> is one’s tendency to be helpful, cooperative, and sympathetic towards others. This refers to how you get along with others and can connect with them. People with high agreeableness are generally friendlier and more likely to work well with others. They can trust others and have others trust them in turn. People with low agreeableness are more self-centered and focus on their own needs and wants over others. They are also not as sociable and friendly towards others which may make those around them find them unfriendly.</p>
                <p>If your agreeable score is high it shows you like to help others. Consider one of these careers for your personality type:</p>
                <ul class="list theme-colored angle-double-right m-0">
                  <li>Academic</li>
                  <li>Administrator</li>
                  <li>Consultant</li>
                  <li>Counselor</li>
                  <li>Doctor</li>
                  <li>Human Resources Specialist</li>
                  <li>Professor</li>
                  <li>Psychologist</li>
                  <li>Sociologist</li>
                  <li>Teacher</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="con_tab">
            <div class="row">
              <div class="col-md-12">
                <p><b>Conscientiousness</b> is the discipline, organization and drive of the individual. These include factors such as whether you are goal-oriented and how you approach multiple tasks or problems. Individuals who score high in this personality trait are more driven to succeed, more goal-oriented and organized. Individuals with high scores also tend to meticulously plan out activities, schedules, or tasks. Individuals with low conscientiousness on the other hand are not very goal oriented and organized. They also do not plan everything out thoroughly and are not against doing things spontaneously.</p>
                <p>If your conscientiousness score is high you likely have excellent attention to detail. Consider one of these careers for your personality type:</p>
                <ul class="list theme-colored angle-double-right m-0">
                  <li>Accountant</li>
                  <li>Chemist</li>
                  <li>Diplomat</li>
                  <li>Judge</li>
                  <li>Lawyer</li>
                  <li>Manager</li>
                  <li>Mathematician</li>
                  <li>Politician</li>
                  <li>Sales Manager</li>
                  <li>Surgeon</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="neu_tab">
            <div class="row">
              <div class="col-md-12">
                <p><b>Neuroticism</b> is the emotional stability of an individual. This can involve factors such as your self-control and anxiety. A person with high neuroticism will be more prone to mood swings and negative emotions such as depression and insecurity. People with high neuroticism will also react very negatively to small inconveniences or problems. People with low neuroticism are more emotionally stable and have higher emotional intelligence.</p>
                <p>If your neuroticism score is low you can stay clam under pressure. Consider one of these careers for your personality type:</p>
                <ul class="list theme-colored angle-double-right m-0">
                  <li>Animator</li>
                  <li>Biologist</li>
                  <li>Cartoonist</li>
                  <li>Game Developer</li>
                  <li>Illustrator</li>
                  <li>Librarian</li>
                  <li>Novelist</li>
                  <li>Researcher</li>
                  <li>Theologian</li>
                  <li>Zoologist</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="ope_tab">
            <div class="row">
              <div class="col-md-12">
                <p><b>Openness</b> is the intellectual curiosity of the individual. It includes your preference for novelty and variety. It is usually associated with being broad-minded or unconventional in one’s actions and being unconventional. This can be influenced by factors such as intellect and openness to new experiences. People with a high degree of openness tend to be more creative, more adaptable and can also be more expressive since these individuals will be more likely to experiment and try new processes or methods.</p>
                <p>If your openness score is high you are open to new experiences. Consider one of these careers for your personality type:</p>
                <ul class="list theme-colored angle-double-right m-0">
                  <li>Architect</li>
                  <li>Businessman</li>
                  <li>Data Analyst</li>
                  <li>Engineer</li>
                  <li>Entrepreneur</li>
                  <li>Financial Analyst</li>
                  <li>Marketing Expert</li>
                  <li>Political Scientist</li>
                  <li>Project Manager</li>
                  <li>Stockbroker</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
   var careerTestScores = {extroversion :"{{$career_test->extroversion_score}}",
    agreeableness :"{{$career_test->agreeableness_score}}",
    conscientiousness :"{{$career_test->conscientiousness_score}}",
    neuroticism :"{{$career_test->neuroticism_score}}",
    openness :"{{$career_test->openness_score}}"};

    var careerTestAverage = {extroversion :"{{$career_test_average['average_extroversion_score']}}",
     agreeableness :"{{$career_test_average['average_agreeableness_score']}}",
     conscientiousness :"{{$career_test_average['average_conscientiousness_score']}}",
     neuroticism :"{{$career_test_average['average_neuroticism_score']}}",
     openness :"{{$career_test_average['average_openness_score']}}"};
</script>
<script type="text/javascript" src="{{ asset('js/career-test.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/chart.js') }}"></script>

<style>
.color-box {
  width: 10px;
  height: 10px;
  background-color: #ccc;
}
</style>
@endsection
