<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreTrackRequest;
use App\Http\Requests\UpdateTrackRequest;
use App\Models\Track;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tracks = Track::all();
        return view('track.index', compact('tracks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('track.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrackRequest $request)
    {
        //
        if($request->has('id')){
            $track = Track::find($request->input('id'));
        }else{
            $track = Track::create( $request->validated());
        }
        return redirect()->route('track.show', $track);
    }

    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
        //
        return view('track.show', compact('track'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Track $track )
    {
        //
        return view('track.edit', compact('track'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrackRequest $request, Track $track)
    {
        //
        try{

            $track->update( $request->validated());
        }catch(\Exception $e){
            return $e->getMessage();
        }
        return redirect('track.show',[$track]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        //
    }
}
