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
        return view('organizer_event', compact('data'));
    }


    public function AllEvents()
    {
        $categories = Category::all();
        $events = Event::all();
        return view('organizer_event', compact('events', 'categories'));
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
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
            'reservation_type' => 'required',
            'image' => 'required|image',
            'category' => 'required',

        ]);

//        if($validator->fails()) {
//            return back()
//                ->withErrors($validator)
//                ->withInput();
//        }

        if ($request->hasFile('image')) {
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('image', $fileName, 'public');
            $picturePath = Storage::url($path);
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
//            'creator' => $user,
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
            'image' => 'required|image',
        ]);

        if ($request->hasFile('image')) {
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('image', $fileName, 'public');
            $picturePath = Storage::url($path);
        } else {
            $picturePath = null;
        }

        $event->title = $request['title'];
        $event->location = $request['location'];
        $event->date = $request['date'];
        $event->time = $request['time'];
        $event->price = $request['price'];
        $event->nbr_place = $request['nbr_place'];
        $event->description = $request['description'];
        $event->reservation_type = $request['reservation_type'];
        $event->image = $picturePath;
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

        return redirect('/allEvents');
    }
}
