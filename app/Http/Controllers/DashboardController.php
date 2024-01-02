<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'booking' => Event::with('bookings')->whereHas('bookings', function ($query) {
                $query->where('user_id', auth()->id());
            })->get(),
            'saved' => Event::with('savedEvents')->whereHas('savedEvents', function ($query) {
                $query->where('user_id', auth()->id());
            })->get(),
            'liked' => Event::with('likes')->whereHas('likes', function ($query) {
                $query->where('user_id', auth()->id());
            })->get()
        ]);
    }
}
