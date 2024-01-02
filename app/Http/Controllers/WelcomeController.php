<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'events' => Event::all()->load('country', 'city', 'user', 'tags')->sortByDesc('start_date')
        ]);
    }
}
