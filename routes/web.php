<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobOpportunitiesController;
use App\Http\Controllers\WorkshopsController;
use App\Http\Controllers\LoginController;
use App\Models\User;

Route::get('/', function(){
	return view('login');
})->name('login');


Route::get('/home', function() {
	return view('home');
});

Route::get('/add-user', function() {
	User::create([
		'name' => 'admin',
		'email' => 'admin@admin.com',
		'password' => bcrypt('password')
	]);
});


Route::get('/about-us', function() {
	return view('about-us');
});

Route::get('/job-opportunities', [JobOpportunitiesController::class, 'index'])
	->middleware('auth');

Route::get('/workshops', [WorkshopsController::class, 'index'])
	->middleware('auth');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout']);