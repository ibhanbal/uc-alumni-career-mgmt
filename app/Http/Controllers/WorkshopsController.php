<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class WorkshopsController extends Controller
{
    public function index()
    {
      // gets all the workshop data and passes it to the view
    	$workshops = Workshop::all();
    	return view('workshops.index', ['workshops' => $workshops]);
    }

    public function workshopDetails($id)
    {
    	// gets specific workshop data based on the given id
    	$workshop = Workshop::find($id);
      // passes the specific workshop data to the view
    	return view('workshops.workshop-details')
    		->with(['workshop' => $workshop]);
    }

    public function addWorkshop(Request $request)
    {
      // gets the input data from the forms in the view and placed them in variables
      $new_workshop_name = $request->input('input_workshop_name');
      $new_workshop_topics = $request->input('input_workshop_topics');
      $new_workshop_host = $request->input('input_workshop_host');
      $new_workshop_location = $request->input('input_workshop_location');
      $new_workshop_start_date = $request->input('input_workshop_start_date');
      $new_workshop_end_date = $request->input('input_workshop_end_date');
      $new_workshop_time = $request->input('input_workshop_time');
      $new_workshop_description = $request->input('input_workshop_description');
      $new_workshop_event_url = $request->input('input_workshop_event_url');

      // creates a new entry in the workshop database
      $workshop = new Workshop;

      // assigns the new entries to the given variables in the database
      $workshop->name = $new_workshop_name;
      $workshop->topics = $new_workshop_topics;
      $workshop->host = $new_workshop_host;
      $workshop->location = $new_workshop_location;
      $workshop->start_date = $new_workshop_start_date;
      $workshop->end_date = $new_workshop_end_date;
      $workshop->time = $new_workshop_time;
      $workshop->description = $new_workshop_description;
      $workshop->event_url = $new_workshop_event_url;

      // validates if the file uploaded is an image
      $this->validate($request,
      [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      // stores the image and creates a link to it
      if( $request->hasFile('image')) {
        $image = $request->file('image');
        $path = public_path(). '/images/workshop-images/';
        $filename = $workshop->name . '.' . $image->getClientOriginalExtension();
        $image->move($path, $filename);
        $workshop->image_url=$filename;
      }

      // saves the new entry
      $workshop->save();

      // returns to the edit page
      return redirect('/edit-workshops');

    }

    public function editWorkshops()
    {
    	$workshops = Workshop::all();
    	return view('workshops.edit-workshops', ['workshops' => $workshops]);
    }

    public function editWorkshop($id)
    {
      // get the data
      $workshop = Workshop::find($id);
      // pass the data to the view
      return view('workshops.edit-workshop')
        ->with(['workshop' => $workshop]);
    }

    public function updateWorkshop(Request $request, $id)
    {
      // gets the specific data from the input forms
      $updated_workshop_name = $request->input('input_workshop_name');
      $updated_workshop_topics = $request->input('input_workshop_topics');
      $updated_workshop_host = $request->input('input_workshop_host');
      $updated_workshop_location = $request->input('input_workshop_location');
      $updated_workshop_start_date = $request->input('input_workshop_start_date');
      $updated_workshop_end_date = $request->input('input_workshop_end_date');
      $updated_workshop_time = $request->input('input_workshop_time');
      $updated_workshop_description = $request->input('input_workshop_description');
      $updated_workshop_event_url = $request->input('input_workshop_event_url');

      // looks for the specific entry to be updated
      $workshop = Workshop::find($id);

      // updates the data
      $workshop->name = $updated_workshop_name;
      $workshop->topics = $updated_workshop_topics;
      $workshop->host = $updated_workshop_host;
      $workshop->location = $updated_workshop_location;
      $workshop->start_date = $updated_workshop_start_date;
      $workshop->end_date = $updated_workshop_end_date;
      $workshop->time = $updated_workshop_time;
      $workshop->description = $updated_workshop_description;
      $workshop->event_url = $updated_workshop_event_url;

      $this->validate($request,
      [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      // stores the image and creates a link to it
      if( $request->hasFile('image')) {
        $image = $request->file('image');
        $path = public_path(). '/images/workshop-images/';
        $filename = $workshop->name . '.' . $image->getClientOriginalExtension();
        $image->move($path, $filename);
        $workshop->image_url = $filename;
      }

      // saves the entries in the database
      $workshop->save();

      // returns to the edit page
      return redirect('/edit-workshops');
    }

    public function deleteWorkshop($id)
    {
      // looks for the specific entry to be deleted based on the id
      $workshopDelete = Workshop::find($id);
      // checks if the entry exists
      if ($workshopDelete != null) {
        // deletes the entry
        $workshopDelete->delete();
        return redirect('/edit-workshops');
      }
      return redirect('/edit-workshops');
    }
}
