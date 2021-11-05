<?php

namespace App\Http\Controllers;

use App\Models\NowPlaying;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NowPlayingController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function index()
    {
        $active_now_playing = "active";

        $now_playings = NowPlaying::all();
        NowPlaying::all();
        return view('now_playing', compact(
            'active_now_playing',
            'now_playings'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $active_now_playing = "active";

        return view('createNowPlaying', compact(
            'active_now_playing'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        NowPlaying::create($request->all());
        return redirect('/now-playing');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $active_now_playing = "active";

        $now_playing = NowPlaying::find($id);
        return view('showNowPlaying', compact(
            'now_playing',
            'active_now_playing'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $active_now_playing = "active";

        $now_playing = NowPlaying::find($id);
        return view('editNowPlaying', compact(
            'now_playing',
            'active_now_playing'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $now_playing = NowPlaying::find($id);
        $now_playing->update($request->all());
        return redirect('/now-playing');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $now_playing = NowPlaying::findOrFail($id);
        $now_playing->delete();
        return redirect(route('now_playing.index'));
    }
}
