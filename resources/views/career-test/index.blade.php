@extends('layout.master')
@section('title')
  Career Test
@endsection

@section('content')
<div class="container pt-0">
  <h3 align="center">Hello! Please take this <span class="text-theme-color-2">Career Test</span> so that we can help you on deciding your future career!</h3>

  <form method="POST" action="{{ url('/career-results') }}">
    @csrf
    <table align="center" width="60%" cellspacing="0">
      <thead>
        <tr>
          <th width="60%">Choose the option that best describes you.</th>
          <th width="10%">Disagree</th>
          <th width="10%">Slightly Disagree</th>
          <th width="10%">Neutral</th>
          <th width="10%">Slightly Agree</th>
          <th width="10%">Agree</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>I am the life of the party.</td>
          <td><input type="radio" name="item1" value="1" required=""></td>
          <td><input type="radio" name="item1" value="2" required=""></td>
          <td><input type="radio" name="item1" value="3" required=""></td>
          <td><input type="radio" name="item1" value="4" required=""></td>
          <td><input type="radio" name="item1" value="5" required=""></td>
        </tr>
        <tr>
          <td>I feel little concern for others.</td>
          <td><input type="radio" name="item2" value="1" required=""></td>
          <td><input type="radio" name="item2" value="2" required=""></td>
          <td><input type="radio" name="item2" value="3" required=""></td>
          <td><input type="radio" name="item2" value="4" required=""></td>
          <td><input type="radio" name="item2" value="5" required=""></td>
        </tr>
        <tr>
          <td>I am always prepared.</td>
          <td><input type="radio" name="item3" value="1" required=""></td>
          <td><input type="radio" name="item3" value="2" required=""></td>
          <td><input type="radio" name="item3" value="3" required=""></td>
          <td><input type="radio" name="item3" value="4" required=""></td>
          <td><input type="radio" name="item3" value="5" required=""></td>
        </tr>
        <tr>
          <td>I get stressed out easily.</td>
          <td><input type="radio" name="item4" value="1" required=""></td>
          <td><input type="radio" name="item4" value="2" required=""></td>
          <td><input type="radio" name="item4" value="3" required=""></td>
          <td><input type="radio" name="item4" value="4" required=""></td>
          <td><input type="radio" name="item4" value="5" required=""></td>
        </tr>
        <tr>
          <td>I have a rich vocabulary.</td>
          <td><input type="radio" name="item5" value="1" required=""></td>
          <td><input type="radio" name="item5" value="2" required=""></td>
          <td><input type="radio" name="item5" value="3" required=""></td>
          <td><input type="radio" name="item5" value="4" required=""></td>
          <td><input type="radio" name="item5" value="5" required=""></td>
        </tr>
        <tr>
          <td>I don't talk a lot.</td>
          <td><input type="radio" name="item6" value="1" required=""></td>
          <td><input type="radio" name="item6" value="2" required=""></td>
          <td><input type="radio" name="item6" value="3" required=""></td>
          <td><input type="radio" name="item6" value="4" required=""></td>
          <td><input type="radio" name="item6" value="5" required=""></td>
        </tr>
        <tr>
          <td>I am interested in people.</td>
          <td><input type="radio" name="item7" value="1" required=""></td>
          <td><input type="radio" name="item7" value="2" required=""></td>
          <td><input type="radio" name="item7" value="3" required=""></td>
          <td><input type="radio" name="item7" value="4" required=""></td>
          <td><input type="radio" name="item7" value="5" required=""></td>
        </tr>
        <tr>
          <td>I leave my belongings around.</td>
          <td><input type="radio" name="item8" value="1" required=""></td>
          <td><input type="radio" name="item8" value="2" required=""></td>
          <td><input type="radio" name="item8" value="3" required=""></td>
          <td><input type="radio" name="item8" value="4" required=""></td>
          <td><input type="radio" name="item8" value="5" required=""></td>
        </tr>
        <tr>
          <td>I am relaxed most of the time.</td>
          <td><input type="radio" name="item9" value="1" required=""></td>
          <td><input type="radio" name="item9" value="2" required=""></td>
          <td><input type="radio" name="item9" value="3" required=""></td>
          <td><input type="radio" name="item9" value="4" required=""></td>
          <td><input type="radio" name="item9" value="5" required=""></td>
        </tr>
        <tr>
          <td>I have difficulty understanding abstract ideas.</td>
          <td><input type="radio" name="item10" value="1" required=""></td>
          <td><input type="radio" name="item10" value="2" required=""></td>
          <td><input type="radio" name="item10" value="3" required=""></td>
          <td><input type="radio" name="item10" value="4" required=""></td>
          <td><input type="radio" name="item10" value="5" required=""></td>
        </tr>
        <tr>
          <td>I feel comfortable around people.</td>
          <td><input type="radio" name="item11" value="1" required=""></td>
          <td><input type="radio" name="item11" value="2" required=""></td>
          <td><input type="radio" name="item11" value="3" required=""></td>
          <td><input type="radio" name="item11" value="4" required=""></td>
          <td><input type="radio" name="item11" value="5" required=""></td>
        </tr>
        <tr>
          <td>I insult people.</td>
          <td><input type="radio" name="item12" value="1" required=""></td>
          <td><input type="radio" name="item12" value="2" required=""></td>
          <td><input type="radio" name="item12" value="3" required=""></td>
          <td><input type="radio" name="item12" value="4" required=""></td>
          <td><input type="radio" name="item12" value="5" required=""></td>
        </tr>
        <tr>
          <td>I pay attention to details.</td>
          <td><input type="radio" name="item13" value="1" required=""></td>
          <td><input type="radio" name="item13" value="2" required=""></td>
          <td><input type="radio" name="item13" value="3" required=""></td>
          <td><input type="radio" name="item13" value="4" required=""></td>
          <td><input type="radio" name="item13" value="5" required=""></td>
        </tr>
        <tr>
          <td>I worry about things.</td>
          <td><input type="radio" name="item14" value="1" required=""></td>
          <td><input type="radio" name="item14" value="2" required=""></td>
          <td><input type="radio" name="item14" value="3" required=""></td>
          <td><input type="radio" name="item14" value="4" required=""></td>
          <td><input type="radio" name="item14" value="5" required=""></td>
        </tr>
        <tr>
          <td>I have a vivid imagination.</td>
          <td><input type="radio" name="item15" value="1" required=""></td>
          <td><input type="radio" name="item15" value="2" required=""></td>
          <td><input type="radio" name="item15" value="3" required=""></td>
          <td><input type="radio" name="item15" value="4" required=""></td>
          <td><input type="radio" name="item15" value="5" required=""></td>
        </tr>
        <tr>
          <td>I keep in the background.</td>
          <td><input type="radio" name="item16" value="1" required=""></td>
          <td><input type="radio" name="item16" value="2" required=""></td>
          <td><input type="radio" name="item16" value="3" required=""></td>
          <td><input type="radio" name="item16" value="4" required=""></td>
          <td><input type="radio" name="item16" value="5" required=""></td>
        </tr>
        <tr>
          <td>I sympathize with others' feelings.</td>
          <td><input type="radio" name="item17" value="1" required=""></td>
          <td><input type="radio" name="item17" value="2" required=""></td>
          <td><input type="radio" name="item17" value="3" required=""></td>
          <td><input type="radio" name="item17" value="4" required=""></td>
          <td><input type="radio" name="item17" value="5" required=""></td>
        </tr>
        <tr>
          <td>I make a mess of things.</td>
          <td><input type="radio" name="item18" value="1" required=""></td>
          <td><input type="radio" name="item18" value="2" required=""></td>
          <td><input type="radio" name="item18" value="3" required=""></td>
          <td><input type="radio" name="item18" value="4" required=""></td>
          <td><input type="radio" name="item18" value="5" required=""></td>
        </tr>
        <tr>
          <td>I seldom feel blue.</td>
          <td><input type="radio" name="item19" value="1" required=""></td>
          <td><input type="radio" name="item19" value="2" required=""></td>
          <td><input type="radio" name="item19" value="3" required=""></td>
          <td><input type="radio" name="item19" value="4" required=""></td>
          <td><input type="radio" name="item19" value="5" required=""></td>
        </tr>
        <tr>
          <td>I am not interested in abstract ideas.</td>
          <td><input type="radio" name="item20" value="1" required=""></td>
          <td><input type="radio" name="item20" value="2" required=""></td>
          <td><input type="radio" name="item20" value="3" required=""></td>
          <td><input type="radio" name="item20" value="4" required=""></td>
          <td><input type="radio" name="item20" value="5" required=""></td>
        </tr>
        <tr>
          <td>I start conversations.</td>
          <td><input type="radio" name="item21" value="1" required=""></td>
          <td><input type="radio" name="item21" value="2" required=""></td>
          <td><input type="radio" name="item21" value="3" required=""></td>
          <td><input type="radio" name="item21" value="4" required=""></td>
          <td><input type="radio" name="item21" value="5" required=""></td>
        </tr>
        <tr>
          <td>I am not interested in other people's problems.</td>
          <td><input type="radio" name="item22" value="1" required=""></td>
          <td><input type="radio" name="item22" value="2" required=""></td>
          <td><input type="radio" name="item22" value="3" required=""></td>
          <td><input type="radio" name="item22" value="4" required=""></td>
          <td><input type="radio" name="item22" value="5" required=""></td>
        </tr>
        <tr>
          <td>I get chores done right away.</td>
          <td><input type="radio" name="item23" value="1" required=""></td>
          <td><input type="radio" name="item23" value="2" required=""></td>
          <td><input type="radio" name="item23" value="3" required=""></td>
          <td><input type="radio" name="item23" value="4" required=""></td>
          <td><input type="radio" name="item23" value="5" required=""></td>
        </tr>
        <tr>
          <td>I am easily disturbed.</td>
          <td><input type="radio" name="item24" value="1" required=""></td>
          <td><input type="radio" name="item24" value="2" required=""></td>
          <td><input type="radio" name="item24" value="3" required=""></td>
          <td><input type="radio" name="item24" value="4" required=""></td>
          <td><input type="radio" name="item24" value="5" required=""></td>
        </tr>
        <tr>
          <td>I have excellent ideas.</td>
          <td><input type="radio" name="item25" value="1" required=""></td>
          <td><input type="radio" name="item25" value="2" required=""></td>
          <td><input type="radio" name="item25" value="3" required=""></td>
          <td><input type="radio" name="item25" value="4" required=""></td>
          <td><input type="radio" name="item25" value="5" required=""></td>
        </tr>
        <tr>
          <td>I have little to say.</td>
          <td><input type="radio" name="item26" value="1" required=""></td>
          <td><input type="radio" name="item26" value="2" required=""></td>
          <td><input type="radio" name="item26" value="3" required=""></td>
          <td><input type="radio" name="item26" value="4" required=""></td>
          <td><input type="radio" name="item26" value="5" required=""></td>
        </tr>
        <tr>
          <td>I have a soft heart.</td>
          <td><input type="radio" name="item27" value="1" required=""></td>
          <td><input type="radio" name="item27" value="2" required=""></td>
          <td><input type="radio" name="item27" value="3" required=""></td>
          <td><input type="radio" name="item27" value="4" required=""></td>
          <td><input type="radio" name="item27" value="5" required=""></td>
        </tr>
        <tr>
          <td>I often forget to put things back in their proper place.</td>
          <td><input type="radio" name="item28" value="1" required=""></td>
          <td><input type="radio" name="item28" value="2" required=""></td>
          <td><input type="radio" name="item28" value="3" required=""></td>
          <td><input type="radio" name="item28" value="4" required=""></td>
          <td><input type="radio" name="item28" value="5" required=""></td>
        </tr>
        <tr>
          <td>Get upset easily.</td>
          <td><input type="radio" name="item29" value="1" required=""></td>
          <td><input type="radio" name="item29" value="2" required=""></td>
          <td><input type="radio" name="item29" value="3" required=""></td>
          <td><input type="radio" name="item29" value="4" required=""></td>
          <td><input type="radio" name="item29" value="5" required=""></td>
        </tr>
        <tr>
          <td>I do not have a good imagination.</td>
          <td><input type="radio" name="item30" value="1" required=""></td>
          <td><input type="radio" name="item30" value="2" required=""></td>
          <td><input type="radio" name="item30" value="3" required=""></td>
          <td><input type="radio" name="item30" value="4" required=""></td>
          <td><input type="radio" name="item30" value="5" required=""></td>
        </tr>
        <tr>
          <td>I talk to a lot of different people at parties.</td>
          <td><input type="radio" name="item31" value="1" required=""></td>
          <td><input type="radio" name="item31" value="2" required=""></td>
          <td><input type="radio" name="item31" value="3" required=""></td>
          <td><input type="radio" name="item31" value="4" required=""></td>
          <td><input type="radio" name="item31" value="5" required=""></td>
        </tr>
        <tr>
          <td>I am not really interested in others.</td>
          <td><input type="radio" name="item32" value="1" required=""></td>
          <td><input type="radio" name="item32" value="2" required=""></td>
          <td><input type="radio" name="item32" value="3" required=""></td>
          <td><input type="radio" name="item32" value="4" required=""></td>
          <td><input type="radio" name="item32" value="5" required=""></td>
        </tr>
        <tr>
          <td>I like order.</td>
          <td><input type="radio" name="item33" value="1" required=""></td>
          <td><input type="radio" name="item33" value="2" required=""></td>
          <td><input type="radio" name="item33" value="3" required=""></td>
          <td><input type="radio" name="item33" value="4" required=""></td>
          <td><input type="radio" name="item33" value="5" required=""></td>
        </tr>
        <tr>
          <td>I change my mood a lot.</td>
          <td><input type="radio" name="item34" value="1" required=""></td>
          <td><input type="radio" name="item34" value="2" required=""></td>
          <td><input type="radio" name="item34" value="3" required=""></td>
          <td><input type="radio" name="item34" value="4" required=""></td>
          <td><input type="radio" name="item34" value="5" required=""></td>
        </tr>
        <tr>
          <td>I am quick to understand things.</td>
          <td><input type="radio" name="item35" value="1" required=""></td>
          <td><input type="radio" name="item35" value="2" required=""></td>
          <td><input type="radio" name="item35" value="3" required=""></td>
          <td><input type="radio" name="item35" value="4" required=""></td>
          <td><input type="radio" name="item35" value="5" required=""></td>
        </tr>
        <tr>
          <td>I don't like to draw attention to myself.</td>
          <td><input type="radio" name="item36" value="1" required=""></td>
          <td><input type="radio" name="item36" value="2" required=""></td>
          <td><input type="radio" name="item36" value="3" required=""></td>
          <td><input type="radio" name="item36" value="4" required=""></td>
          <td><input type="radio" name="item36" value="5" required=""></td>
        </tr>
        <tr>
          <td>Take time out for others.</td>
          <td><input type="radio" name="item37" value="1" required=""></td>
          <td><input type="radio" name="item37" value="2" required=""></td>
          <td><input type="radio" name="item37" value="3" required=""></td>
          <td><input type="radio" name="item37" value="4" required=""></td>
          <td><input type="radio" name="item37" value="5" required=""></td>
        </tr>
        <tr>
          <td>Shirk my duties.</td>
          <td><input type="radio" name="item38" value="1" required=""></td>
          <td><input type="radio" name="item38" value="2" required=""></td>
          <td><input type="radio" name="item38" value="3" required=""></td>
          <td><input type="radio" name="item38" value="4" required=""></td>
          <td><input type="radio" name="item38" value="5" required=""></td>
        </tr>
        <tr>
          <td>I have frequent mood swings.</td>
          <td><input type="radio" name="item39" value="1" required=""></td>
          <td><input type="radio" name="item39" value="2" required=""></td>
          <td><input type="radio" name="item39" value="3" required=""></td>
          <td><input type="radio" name="item39" value="4" required=""></td>
          <td><input type="radio" name="item39" value="5" required=""></td>
        </tr>
        <tr>
          <td>I use difficult words.</td>
          <td><input type="radio" name="item40" value="1" required=""></td>
          <td><input type="radio" name="item40" value="2" required=""></td>
          <td><input type="radio" name="item40" value="3" required=""></td>
          <td><input type="radio" name="item40" value="4" required=""></td>
          <td><input type="radio" name="item40" value="5" required=""></td>
        </tr>
        <tr>
          <td>I don't mind being the center of attention.</td>
          <td><input type="radio" name="item41" value="1" required=""></td>
          <td><input type="radio" name="item41" value="2" required=""></td>
          <td><input type="radio" name="item41" value="3" required=""></td>
          <td><input type="radio" name="item41" value="4" required=""></td>
          <td><input type="radio" name="item41" value="5" required=""></td>
        </tr>
        <tr>
          <td>I feel other's emotion.</td>
          <td><input type="radio" name="item42" value="1" required=""></td>
          <td><input type="radio" name="item42" value="2" required=""></td>
          <td><input type="radio" name="item42" value="3" required=""></td>
          <td><input type="radio" name="item42" value="4" required=""></td>
          <td><input type="radio" name="item42" value="5" required=""></td>
        </tr>
        <tr>
          <td>I follow a schedule.</td>
          <td><input type="radio" name="item43" value="1" required=""></td>
          <td><input type="radio" name="item43" value="2" required=""></td>
          <td><input type="radio" name="item43" value="3" required=""></td>
          <td><input type="radio" name="item43" value="4" required=""></td>
          <td><input type="radio" name="item43" value="5" required=""></td>
        </tr>
        <tr>
          <td>I get irritated easily.</td>
          <td><input type="radio" name="item44" value="1" required=""></td>
          <td><input type="radio" name="item44" value="2" required=""></td>
          <td><input type="radio" name="item44" value="3" required=""></td>
          <td><input type="radio" name="item44" value="4" required=""></td>
          <td><input type="radio" name="item44" value="5" required=""></td>
        </tr>
        <tr>
          <td>I spend time reflecting on things.</td>
          <td><input type="radio" name="item45" value="1" required=""></td>
          <td><input type="radio" name="item45" value="2" required=""></td>
          <td><input type="radio" name="item45" value="3" required=""></td>
          <td><input type="radio" name="item45" value="4" required=""></td>
          <td><input type="radio" name="item45" value="5" required=""></td>
        </tr>
        <tr>
          <td>I am quiet around strangers.</td>
          <td><input type="radio" name="item46" value="1" required=""></td>
          <td><input type="radio" name="item46" value="2" required=""></td>
          <td><input type="radio" name="item46" value="3" required=""></td>
          <td><input type="radio" name="item46" value="4" required=""></td>
          <td><input type="radio" name="item46" value="5" required=""></td>
        </tr>
        <tr>
          <td>I make people feel at ease.</td>
          <td><input type="radio" name="item47" value="1" required=""></td>
          <td><input type="radio" name="item47" value="2" required=""></td>
          <td><input type="radio" name="item47" value="3" required=""></td>
          <td><input type="radio" name="item47" value="4" required=""></td>
          <td><input type="radio" name="item47" value="5" required=""></td>
        </tr>
        <tr>
          <td>I am exacting in my work.</td>
          <td><input type="radio" name="item48" value="1" required=""></td>
          <td><input type="radio" name="item48" value="2" required=""></td>
          <td><input type="radio" name="item48" value="3" required=""></td>
          <td><input type="radio" name="item48" value="4" required=""></td>
          <td><input type="radio" name="item48" value="5" required=""></td>
        </tr>
        <tr>
          <td>I often feel blue.</td>
          <td><input type="radio" name="item49" value="1" required=""></td>
          <td><input type="radio" name="item49" value="2" required=""></td>
          <td><input type="radio" name="item49" value="3" required=""></td>
          <td><input type="radio" name="item49" value="4" required=""></td>
          <td><input type="radio" name="item49" value="5" required=""></td>
        </tr>
        <tr>
          <td>I am full of ideas.</td>
          <td><input type="radio" name="item50" value="1" required=""></td>
          <td><input type="radio" name="item50" value="2" required=""></td>
          <td><input type="radio" name="item50" value="3" required=""></td>
          <td><input type="radio" name="item50" value="4" required=""></td>
          <td><input type="radio" name="item50" value="5" required=""></td>
        </tr>

      </tbody>
    </table>

    <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Submit</button>
  </form>

</div>
@endsection
