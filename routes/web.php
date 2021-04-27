<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobOpportunitiesController;
use App\Http\Controllers\WorkshopsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ResumeBuilderController;
use App\Models\User;

// Home
Route::get('/', function() {
	return view('home');
});

// LoginController Student Routes
Route::get('/login', function(){
	return view('accounts.login');
})->name('login');

Route::get('/register', function(){
	return view('accounts.register');
})->name('register');

Route::get('/verification', function() {
	return view('accounts.verification');
});

Route::post('/register-account', [LoginController::class, 'registerAccountStudent']);

// LoginController Admin Routes
Route::middleware(['auth', 'role_checked:Admin'])->group(function () {
	Route::get('/register-student-as-admin', function(){
		return view('accounts.register-student-admin');
	})->name('register');
	Route::post('register-student-account-as-admin', [LoginController::class, 'registerAccountStudentAsAdmin']);

	Route::get('/register-admin', function(){
		return view('accounts.register-admin');
	})->name('register');
	Route::post('register-admin-account', [LoginController::class, 'registerAccountAdmin']);

	Route::get('/edit-accounts', [LoginController::class, 'editAccounts']);
	Route::get('/edit-account/{id}', [LoginController::class, 'editAccount']);
	Route::post('/update-account/{id}', [LoginController::class, 'updateAccount']);
	Route::get('/verify-account/{id}', [LoginController::class, 'verifyAccount']);
	Route::get('/delete-account/{id}', [LoginController::class, 'deleteAccount']);
});


// Test Routes
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

// About Us Route
Route::get('/about-us', function() {
	return view('about-us');
});

// JobOpportunitiesController Routes
Route::middleware(['auth', 'acct_verified:Verified'])->group(function () {
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

// WorkshopsController Routes
Route::middleware(['auth', 'acct_verified:Verified'])->group(function () {
	Route::get('/workshops', [WorkshopsController::class, 'index']);
	Route::get('/workshop-details/{id}', [WorkshopsController::class, 'workshopDetails']);
});

Route::middleware(['auth', 'role_checked:Admin'])->group(function () {
	Route::get('/add-workshop', function() {
		return view('workshops.add-workshop');
	});
	Route::post('/add-workshop', [WorkshopsController::class, 'addWorkshop']);
	Route::get('/edit-workshops', [WorkshopsController::class, 'editWorkshops']);
	Route::get('/edit-workshop/{id}', [WorkshopsController::class, 'editWorkshop']);
	Route::post('/update-workshop/{id}', [WorkshopsController::class, 'updateWorkshop']);
	Route::get('/delete-workshop/{id}', [WorkshopsController::class, 'deleteWorkshop']);
});

// EventController Routes
Route::middleware(['auth', 'acct_verified:Verified'])->group(function () {
	Route::get('/events', [EventsController::class, 'index']);
	Route::get('/event-details/{id}', [EventsController::class, 'eventDetails']);
});

Route::middleware(['auth', 'role_checked:Admin'])->group(function () {
	Route::get('/add-event', function() {
		return view('events.add-event');
	});
	Route::post('/add-event', [EventsController::class, 'addEvent']);
	Route::get('/edit-events', [EventsController::class, 'editEvents']);
	Route::get('/edit-event/{id}', [EventsController::class, 'editEvent']);
	Route::post('/update-event/{id}', [EventsController::class, 'updateEvent']);
	Route::get('/delete-event/{id}', [EventsController::class, 'deleteEvent']);
});

// ResumeBuilder Routes
Route::middleware(['auth', 'acct_verified:Verified'])->group(function () {
	Route::get('/resume-builder', [ResumeBuilderController::class, 'index']);
	Route::post('/resume', [ResumeBuilderController::class, 'resume']);
	Route::post('/resume-pdf', [ResumeBuilderController::class, 'resumePDF']);
});

// LoginController Routes
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
