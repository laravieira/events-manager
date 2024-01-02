<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;

class GalleriesController extends Controller
{
    public function index()
    {
        return view('galleries', [
            'galleries' => Gallery::all()->load('user')->sortByDesc('created_at')
        ]);
    }
}
