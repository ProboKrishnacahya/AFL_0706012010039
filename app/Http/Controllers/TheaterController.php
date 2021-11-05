<?php

namespace App\Http\Controllers;

use App\Models\Theater;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use phpDocumentor\Reflection\Types\This;

class TheaterController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function index()
    {
        $active_theater = "active";

        $theaters = Theater::all();
        Theater::all();
        return view('theater', compact(
            'active_theater',
            'theaters'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $active_theater = "active";

        return view('createTheater', compact(
            'active_theater'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Theater::create($request->all());
        return redirect('/theater');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $active_theater = "active";

        $theater = Theater::find($id);
        return view('showTheater', compact(
            'theater',
            'active_theater'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $active_theater = "active";

        $theater = Theater::find($id);
        return view('editTheater', compact(
            'theater',
            'active_theater'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $theater = Theater::find($id);
        $theater->update($request->all());
        return redirect('/theater');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $theater = Theater::findOrFail($id);
        $theater->delete();
        return redirect(route('theater.index'));
    }
}
