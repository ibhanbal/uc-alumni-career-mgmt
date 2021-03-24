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

    public function jobDetails($id)
    {
    	// get the data
    	$job_opportunity = JobOpportunity::find($id);
      // pass the data to the view
    	return view('job-opportunities.job-details')
    		->with(['job' => $job_opportunity]);
    }

    public function addJob(Request $request)
    {
      // get data from the forms
      $new_job_name = $request->input('input_job_name');
      $new_job_type = $request->input('input_job_type');
      $new_timeline = $request->input('input_timeline');
      $new_company_name = $request->input('input_company_name');
      $new_job_description = $request->input('input_job_description');
      $new_job_requirements = $request->input('input_job_requirements');
      $new_location = $request->input('input_location');
      $new_email = $request->input('input_email');
      $new_phone = $request->input('input_phone');

      // create a new job in the database
      $job_opportunity = new JobOpportunity;

      // pass the data to the database
      $job_opportunity->job_name = $new_job_name;
      $job_opportunity->job_type = $new_job_type;
      $job_opportunity->timeline = $new_timeline;
      $job_opportunity->company_name = $new_company_name;
      $job_opportunity->job_description = $new_job_description;
      $job_opportunity->job_requirements = $new_job_requirements;
      $job_opportunity->location = $new_location;
      $job_opportunity->email = $new_email;
      $job_opportunity->phone = $new_phone;

      // save the job in the database
      $job_opportunity->save();

      // return the user to the edit jobs screen
      return redirect('/edit-jobs');
    }


    public function editJobs()
    {
    	// get the data
    	$job_opportunities = JobOpportunity::all();
      // pass the data to the view
    	return view('job-opportunities.edit-jobs')
    		->with(['jobs' => $job_opportunities]);
    }

    public function editJob($id)
    {
      // find a specific job based on the given id
    	$job_opportunity = JobOpportunity::find($id);
      // pass the data from the specific id to the view
    	return view('job-opportunities.edit-job')
    		->with(['job' => $job_opportunity]);
    }

    public function updateJob(Request $request, $id)
    {
      // get the data from the forms in the view
      $updated_job_name = $request->input('input_job_name');
      $updated_job_type = $request->input('input_job_type');
      $updated_timeline = $request->input('input_timeline');
      $updated_company_name = $request->input('input_company_name');
      $updated_job_description = $request->input('input_job_description');
      $updated_job_requirements = $request->input('input_job_requirements');
      $updated_location = $request->input('input_location');
      $updated_email = $request->input('input_email');
      $updated_phone = $request->input('input_phone');

      // look for the database entry to be updated
    	$job_opportunity = JobOpportunity::find($id);

      // updated the different fields with the new data entered by the user
      $job_opportunity->job_name = $updated_job_name;
      $job_opportunity->job_type = $updated_job_type;
      $job_opportunity->timeline = $updated_timeline;
      $job_opportunity->company_name = $updated_company_name;
      $job_opportunity->job_description = $updated_job_description;
      $job_opportunity->job_requirements = $updated_job_requirements;
      $job_opportunity->location = $updated_location;
      $job_opportunity->email = $updated_email;
      $job_opportunity->phone = $updated_phone;

      // save the changes to the database
      $job_opportunity->save();

      // return the user back to the edit jobs page
      return redirect('/edit-jobs');
    }

    public function deleteJob($id)
    {
      // find the job to be deleted based on the id
      $jobDelete = JobOpportunity::find($id);

      // check if the job is in the database
      if ($jobDelete != null) {
        // if the job is found, it is deleted
        $jobDelete->delete();
        return redirect('/edit-jobs');
      }
      // returns to the edit page
      return redirect('/edit-jobs');
    }
}
