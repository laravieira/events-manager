<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\SavedEvent;
use App\Http\Requests\StoreSavedEventRequest;
use App\Http\Requests\UpdateSavedEventRequest;
use Illuminate\Database\Eloquent\Model;

class SavedEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Event $event): Model|false
    {
        $save = $event->savedEvents()->where('user_id', auth()->id())->first();
        if ($save) {
            $save->delete();
            return false;
        } else {
            return $event->savedEvents()->create([
                'user_id' => auth()->id(),
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSavedEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SavedEvent $savedEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SavedEvent $savedEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSavedEventRequest $request, SavedEvent $savedEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SavedEvent $savedEvent)
    {
        //
    }
}
