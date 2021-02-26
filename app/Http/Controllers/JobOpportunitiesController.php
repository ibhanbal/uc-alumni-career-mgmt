<?php

namespace App\Http\Controllers;

use App\Models\JobOpportunity;
use Illuminate\Http\Request;

class JobOpportunitiesController extends Controller
{
    public function index()
    {

    	// get the data
    	$job_opportunities = JobOpportunity::all();
    	// pass the data to the view
    	return view('job-opportunities.index')
    		->with(['jobs' => $job_opportunities]);
    }

}
