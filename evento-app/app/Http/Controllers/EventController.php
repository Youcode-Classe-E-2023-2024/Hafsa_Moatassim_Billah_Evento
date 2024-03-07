<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showForm()
    {
        $content = file_get_contents('https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json');
        $data = json_decode($content);
        return view('organiser.createEvent', compact('data'));
    }


    public function AllEvents()
    {
        $events = Event::all();
        return view('organiser.allEvents', compact('events'));
    }

    public function ShowEvent()
    {
        $events = Event::all();
        return view('organiser.allEvents', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::id();

        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'price' => 'required',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
            'reservation_type' => 'required',
            'image' => 'required',
        ]);

        Event::create([
            'title' => $request->title,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'price' => $request->price,
            'nbr_place' => $request->nbr_place,
            'description' => $request->description,
            'reservation_type' => $request->reservation_type,
            'image' => $request->image,
            'creator' => $user,
        ]);

        return redirect('/allEvents');
    }

    /**
     * Display the specified resource.
     */
    public function editEvent($id)
    {
        $content = file_get_contents('https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json');
        $data = json_decode($content);

        $event = Event::find($id);

        return view('organiser.updateEvent', compact('event', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateEvent(Request $request, $id)
    {
        $user = Auth::id();
        $event = Event::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'price' => 'required',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
            'reservation_type' => 'required',
            'image' => 'required',
        ]);


        $event->title = $request['title'];
        $event->location = $request['location'];
        $event->date = $request['date'];
        $event->time = $request['time'];
        $event->price = $request['price'];
        $event->nbr_place = $request['nbr_place'];
        $event->description = $request['description'];
        $event->reservation_type = $request['reservation_type'];
        $event->image = $request['image'];
        $event->creator = $user;

        $event->save();
        return redirect('/allEvents');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteEvent(string $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->back();
    }
}
