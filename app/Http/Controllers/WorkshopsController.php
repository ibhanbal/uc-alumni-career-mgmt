<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class WorkshopsController extends Controller
{
    public function index()
    {
    	$workshops = Workshop::all();
    	return view('workshops.index', ['workshops' => $workshops]);
    }
}
