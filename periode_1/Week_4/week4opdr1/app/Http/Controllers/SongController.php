<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Songs;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // gets songs from the Model and shows only the titles
        $songs = Songs::all();
        return view('songs_table.title', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs_table.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // Validation for required fields
          $request->validate([
            'title'=>'required|max:100',
            'singer'=>'required|max:255'
        ]);
        // Getting values from the  form
        $input = new Songs([
            'title' => $request->get('title'),
            'singer' => $request->get('singer')
        ]);
        $input->save();
        return redirect('/index')->with('success', 'Songs saved.');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $songs = Songs::find($id);
        return view('songs_table.details', ['id' => $songs[$id]], compact('songs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song = Songs::find($id);
        return view('songs_table.edit', ['song' => $song]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required|max:100',
            'singer'=>'required|max:255'
        ]);

        $song = Songs::find($id);
        $song->title = $request->get('title');
        $song->singer = $request->get('singer');
        $song->save();

        return redirect('/home')
            ->with('success', 'song updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $song = Songs::find($id);
        $song->delete();

        return redirect('/home')
            ->with('success', 'Song deleted successfully');
    }
}