<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobOpportunitiesController;
use App\Http\Controllers\WorkshopsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ResumeBuilderController;
use App\Models\User;

Route::get('/', function() {
	return view('home');
});

Route::get('/login', function(){
	return view('login');
})->name('login');

Route::get('/sample', function() {
	return view('sample');
});

Route::get('/add-user', function() {
	User::create([
		'name' => 'admin',
		'email' => 'admin@admin.com',
		'password' => bcrypt('password')
	]);
});

Route::get('/add-user2', function() {
	User::create([
		'name' => 'student',
		'email' => 'student@student.com',
		'role' => 'Student',
		'password' => bcrypt('password')
	]);
});

Route::get('/about-us', function() {
	return view('about-us');
});


Route::middleware(['auth'])->group(function () {
	Route::get('/job-opportunities', [JobOpportunitiesController::class, 'index']);

	Route::get('/job-details/{id}', [JobOpportunitiesController::class, 'jobDetails']);
});

Route::middleware(['auth', 'role_checked:Admin'])->group(function () {
	Route::get('/add-job', function() {
		return view('job-opportunities.add-job');
	});

	Route::post('/add-job', [JobOpportunitiesController::class, 'addJob']);

	Route::get('/edit-jobs', [JobOpportunitiesController::class, 'editJobs']);

	Route::get('/edit-job/{id}', [JobOpportunitiesController::class, 'editJob']);

	Route::post('/update-job/{id}', [JobOpportunitiesController::class, 'updateJob']);

	Route::get('/delete-job/{id}', [JobOpportunitiesController::class, 'deleteJob']);
});



// JobOpportunitiesController Routes


// WorkshopsController Routes
Route::get('/workshops', [WorkshopsController::class, 'index']);

Route::get('/workshop-details/{id}', [WorkshopsController::class, 'workshopDetails']);

Route::get('/add-workshop', function() {
	return view('workshops.add-workshop');
});

Route::post('/add-workshop', [WorkshopsController::class, 'addWorkshop'])
	->middleware('auth');

Route::get('/edit-workshops', [WorkshopsController::class, 'editWorkshops'])
	->middleware('auth');

Route::get('/edit-workshop/{id}', [WorkshopsController::class, 'editWorkshop'])
	->middleware('auth');

	Route::post('/update-workshop/{id}', [WorkshopsController::class, 'updateWorkshop'])
		->middleware('auth');

Route::get('/delete-workshop/{id}', [WorkshopsController::class, 'deleteWorkshop'])
	->middleware('auth');

// EventController Routes
Route::get('/events', [EventsController::class, 'index']);

Route::get('/event-details/{id}', [EventsController::class, 'eventDetails']);

Route::get('/add-event', function() {
	return view('events.add-event');
});

Route::post('/add-event', [EventsController::class, 'addEvent'])
	->middleware('auth');

Route::get('/edit-events', [EventsController::class, 'editEvents'])
	->middleware('auth');

Route::get('/edit-event/{id}', [EventsController::class, 'editEvent'])
	->middleware('auth');

Route::post('/update-event/{id}', [EventsController::class, 'updateEvent'])
	->middleware('auth');

Route::get('/delete-event/{id}', [EventsController::class, 'deleteEvent'])
	->middleware('auth');

// ResumeBuilder Routes
Route::get('/resume-builder', [ResumeBuilderController::class, 'index']);

Route::post('/resume', [ResumeBuilderController::class, 'resume']);

// LoginController Routes
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout']);
