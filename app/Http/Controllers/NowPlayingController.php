<?php

namespace App\Http\Controllers;

use App\Models\NowPlaying;
use App\Models\Theater;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class NowPlayingController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function index()
    {
        $active_now_playing = "active";

        $now_playings = NowPlaying::latest()->filter(request(['search']))->paginate(3);
        $theaters = Theater::all();

        return view(
            'nowPlaying',
            ["active_now_playing" => "active"],
            compact(
                'now_playings',
                'theaters'
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $active_now_playing = "active";

        $theaters = Theater::all();
        return view('createNowPlaying', compact(
            'active_now_playing',
            'theaters'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $movie_code = Str::upper(Str::substr($request->judul, 0, 5));

        NowPlaying::create([
            'movie_code' => $movie_code,
            'nomor_theater' => $request->nomor_theater,
            'judul' => $request->judul,
            'jam' => $request->jam,
            'durasi' => $request->durasi,
            'genre' => $request->genre,
            'deskripsi' => $request->deskripsi,
            'cast' => $request->cast
            // 'poster' => $request->poster
        ]);
        return redirect(route('now-playing.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $active_now_playing = "active";

        $now_playing = NowPlaying::where('id_now_playing', $id)->first();
        return view('showNowPlaying', compact(
            'active_now_playing',
            'now_playing'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $active_now_playing = "active";

        $now_playing = NowPlaying::findOrFail($id);
        $theaters = Theater::all();
        return view('editNowPlaying', compact(
            'theaters',
            'now_playing',
            'active_now_playing'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $movie_code = Str::upper(Str::substr($request->judul, 0, 5));

        $now_playing = NowPlaying::findOrFail($id);
        $now_playing->update([
            'movie_code' => $movie_code,
            'nomor_theater' => $request->nomor_theater,
            'judul' => $request->judul,
            'jam' => $request->jam,
            'durasi' => $request->durasi,
            'genre' => $request->genre,
            'deskripsi' => $request->deskripsi,
            'cast' => $request->cast
            // 'poster' => $request->poster
        ]);
        return redirect(route('now-playing.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $now_playing = NowPlaying::findOrFail($id);
        $now_playing->delete();
        return redirect(route('now-playing.index'));
    }
}
