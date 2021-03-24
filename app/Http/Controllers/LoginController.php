<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
      // built in logout feature of laravel
    	Auth::logout();
    	return redirect('/');
    }
}
