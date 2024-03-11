<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showForm()
    {
        $content = file_get_contents('https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json');
        $data = json_decode($content);
        $events = Event::all();
        $user = Auth::user();
        $categories = Category::all();
        return view('organizer_event', compact('data', 'user', 'events', 'categories'));
    }


    public function AllEvents()
    {
        $categories = Category::all();
        $content = file_get_contents('https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json');
        $events = Event::where('softdelete', 'published')->get();
        $user = Auth::getUser();
        $data = json_decode($content);
        return view('organizer_event', compact('events', 'user', 'categories', 'data'));
    }


    public function ShowEventDescription($id)
    {
        $event = Event::find($id);
        return view('organiser.description', compact('event'));
    }

    public function ShowAddEvent()
    {
        $categories = Category::all();
        return view('organizer_event', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::id();

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'location' => 'required',
            'price' => 'required',
            'date' => 'required|after:now',
            'time' => 'required|after:now',
            'description' => 'required',
            'reservation_type' => 'required',
            'image' => 'required|image',
            'category' => 'required',

        ]);

        if ($request->hasFile('image')) {
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('/storage/picture', $fileName, 'public');
            $picturePath = 'storage/picture/' . $fileName;
        } else {
            $picturePath = null;
        }


        Event::create([
            'title' => $request->title,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'price' => $request->price,
            'nbr_place' => $request->nbr_place,
            'description' => $request->description,
            'reservation_type' => $request->reservation_type,
            'image' => $picturePath,
            'category' => $request->category,
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
    public function updateEvent(Request $request)
    {
        $user = Auth::id();
        $event = Event::findOrFail($request->eventId);

        $request->validate([
            'price' => 'required',
            'date' => 'required|after:now',
            'time' => 'required',
        ]);


        $event->date = $request['date'];
        $event->time = $request['time'];
        $event->price = $request['price'];

        $event->save();
        return redirect('/allEvents');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteEvent(string $id)
    {
        $event = Event::findOrFail($id);
        $event->softdelete = "archived";
        $event->save();

        return redirect('/allEvents');
    }
}
