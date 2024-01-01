<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('events.index', [
            'events' => auth()->user()->events->load('country', 'city', 'tags', 'user')->sortByDesc('start_date'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create', [
            'countries' => Country::all(),
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        if(!$request->hasFile('image'))
            return back();

        $data = $request->validated();
//      $data['image'] = Storage::putFile('public/events', $request->file('image'));
        $data['image'] = $request->file('image')->store('events-manager/events');
        $data['user_id'] = auth()->id();
        $data['slug'] = Str::slug($request->name);

        $event = Event::create($data);
        $event->tags()->attach($request->tags);
        return to_route('events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit', [
            'event' => $event->load('country', 'city', 'tags', 'user'),
            'countries' => Country::all()->load('cities'),
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $data = $request->validated();

        if($request->hasFile('image')) {
            Storage::delete($event->image);
            // $data['image'] = Storage::putFile('public/events', $request->file('image'));
            $data['image'] = $request->file('image')->store('events-manager/events');
        }

        $data['slug'] = Str::slug($request->name);

        $event->update($data);
        $event->tags()->sync($request->tags);
        return to_route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        Storage::delete($event->image);
        $event->tags()->detach();
        $event->delete();
        return to_route('events.index');
    }
}
