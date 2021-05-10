<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
    	// get the form details
    	$credentials = request()->only('email', 'password');
    	// match it with a record in the database

      // authenticate
    	if(Auth::attempt($credentials)) {
	    	// redirect /home
    		return redirect('/');
    	}

    	return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }

    public function logout()
    {
      // built in logout feature of laravel
    	Auth::logout();
    	return redirect('/');
    }

    public function registerAccountStudent(Request $request)
    {
      $new_name = $request->input('input_name');
      $new_uc_id = $request->input('input_uc_id');
      $new_email = $request->input('input_email');
      $new_password = $request->input('input_password');

      $new_account = new User;

      $new_account->name = $new_name;
      $new_account->uc_id = $new_uc_id;
      $new_account->email = $new_email;
      $new_account->password = bcrypt($new_password);
      $new_account->role = 'Student';
      $new_account->verification = 'Verified';

      $new_account->save();

      return redirect('/home');
    }

    public function registerAccountStudentAsAdmin(Request $request)
    {
      $new_name = $request->input('input_name');
      $new_uc_id = $request->input('input_uc_id');
      $new_email = $request->input('input_email');
      $new_password = $request->input('input_password');

      $new_account = new User;

      $new_account->name = $new_name;
      $new_account->uc_id = $new_uc_id;
      $new_account->email = $new_email;
      $new_account->password = bcrypt($new_password);
      $new_account->role = 'Student';
      $new_account->verification = 'Verified';

      $new_account->save();

      return redirect('/edit-accounts');
    }

    public function registerAccountAdmin(Request $request)
    {
      $new_name = $request->input('input_name');
      $new_uc_id = $request->input('input_uc_id');
      $new_email = $request->input('input_email');
      $new_password = $request->input('input_password');

      $new_account = new User;

      $new_account->name = $new_name;
      $new_account->uc_id = $new_uc_id;
      $new_account->email = $new_email;
      $new_account->password = bcrypt($new_password);
      $new_account->role = 'Admin';
      $new_account->verification = 'Verified';

      $new_account->save();

      return redirect('/edit-accounts');
    }

    public function editAccounts()
    {
    	// get the data
    	$users = User::all();
    	// pass the data to the view
    	return view('accounts.edit-accounts')
    		->with(['users' => $users]);
    }

    public function editAccount($id)
    {
      // find a specific job based on the given id
    	$user = User::find($id);
      // pass the data from the specific id to the view
    	return view('accounts.edit-account')
    		->with(['user' => $user]);
    }

    public function updateAccount(Request $request, $id)
    {
      $updated_name = $request->input('updated_name');
      $updated_uc_id = $request->input('updated_uc_id');
      $updated_email = $request->input('updated_email');

    	$update_account = User::find($id);

      $update_account->name = $updated_name;
      $update_account->uc_id = $updated_uc_id;
      $update_account->email = $updated_email;

      if($request->filled('updated_password'))
      {
        $updated_password = $request->input('updated_password');
        $update_account->password = bcrypt($updated_password);
      }

      $update_account->save();
      return redirect('/edit-accounts');
    }

    public function verifyAccount($id)
    {
    	$userVerify = User::find($id);
      $userVerify->verification = 'Verified';
      $userVerify->save();
      return redirect('/edit-accounts');
    }

    public function deleteAccount($id)
    {
      $userDelete = User::find($id);
      if ($userDelete != null) {
        $userDelete->delete();
        return redirect('/edit-accounts');
      }
      return redirect('/edit-accounts');
    }
}
