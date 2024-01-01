<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gallery.index', [
            'galleries' => auth()->user()->galleries,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        if(!$request->hasFile('image'))
            return back();

        $data = $request->validated();
        // $data['image'] = Storage::putFile('public/gallery', $request->file('image'));
        $data['image'] = $request->file('image')->store('events-manager/gallery');

        auth()->user()->galleries()->create($data);
        return to_route('gallery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('gallery.edit', [
            'gallery' => $gallery,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $data = $request->validated();
        if($request->hasFile('image')) {
            Storage::delete($gallery->image);
            // $data['image'] = Storage::putFile('public/gallery', $request->file('image'));
            $data['image'] = $request->file('image')->store('events-manager/gallery');
        }
        $gallery->update($data);
        return to_route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        Storage::delete($gallery->image);
        $gallery->delete();
        return back();
    }
}
