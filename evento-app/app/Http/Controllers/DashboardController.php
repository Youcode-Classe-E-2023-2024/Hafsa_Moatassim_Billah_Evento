<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }

    public function show()
    {
        $user = Auth::user();
        $users = User::paginate(8);
        $events = Event::all();
        return view('dashboard_user', compact('users', 'user', 'events'));
    }
}
