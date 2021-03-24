<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
  public function index()
  {
    // get the data
    $events = Event::all();
    // pass the data to the view
    return view('events.index')
      ->with(['events' => $events]);
  }

  public function eventDetails($id)
  {
    // get the data
    $event = Event::find($id);
    // pass the data to the view
    return view('events.event-details')
      ->with(['event' => $event]);
  }

  public function addEvent(Request $request)
  {
    // gets the specific data from the input forms
    $new_event_name = $request->input('input_event_name');
    $new_event_topics = $request->input('input_event_topics');
    $new_event_short_description = $request->input('input_event_short_description');
    $new_event_long_description = $request->input('input_event_long_description');

    $event = new Event;

    // updates the data
    $event->name = $new_event_name;
    $event->topics = $new_event_topics;
    $event->short_description = $new_event_short_description;
    $event->long_description = $new_event_long_description;

    $this->validate($request,
    [
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // stores the image and creates a link to it
    if( $request->hasFile('image')) {
      $image = $request->file('image');
      $path = public_path(). '/images/event-images/';
      $filename = $event->name . '.' . $image->getClientOriginalExtension();
      $image->move($path, $filename);
      $event->image_url = $filename;
    }

    // saves the entries in the database
    $event->save();

    // returns to the edit page
    return redirect('/edit-events');
  }

  public function editEvents()
  {
    // get the data
    $events = Event::all();
    // pass the data to the view
    return view('events.edit-events')
      ->with(['events' => $events]);
  }

  public function editEvent($id)
  {
    // get the data
    $event = Event::find($id);
    // pass the data to the view
    return view('events.edit-event')
      ->with(['event' => $event]);
  }

  public function deleteEvent($id)
  {
    // get the data
    $eventDelete = Event::find($id);
    // pass the data to the view
    if ($eventDelete != null) {
      $eventDelete->delete();
      return redirect('/edit-events');
    }
    return redirect('/edit-events');
  }

  public function updateEvent(Request $request, $id)
  {
    // gets the specific data from the input forms
    $updated_event_name = $request->input('input_event_name');
    $updated_event_topics = $request->input('input_event_topics');
    $updated_event_short_description = $request->input('input_event_short_description');
    $updated_event_long_description = $request->input('input_event_long_description');

    // looks for the specific entry to be updated
    $event = Event::find($id);

    // updates the data
    $event->name = $updated_event_name;
    $event->topics = $updated_event_topics;
    $event->short_description = $updated_event_short_description;
    $event->long_description = $updated_event_long_description;

    $this->validate($request,
    [
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // stores the image and creates a link to it
    if( $request->hasFile('image')) {
      $image = $request->file('image');
      $path = public_path(). '/images/event-images/';
      $filename = $event->name . '.' . $image->getClientOriginalExtension();
      $image->move($path, $filename);
      $event->image_url = $filename;
    }

    // saves the entries in the database
    $event->save();

    // returns to the edit page
    return redirect('/edit-events');
  }
}
