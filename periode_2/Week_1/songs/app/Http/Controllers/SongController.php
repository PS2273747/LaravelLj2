<?php

namespace App\Http\Controllers;


use App\Models\Song;
use Illuminate\Http\Request;

class Songcontroller extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // gets songs from the Model and shows only the titles
        $songs = Song::all();
        return view('Song_View.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Song_View.create');
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
            'song_name'=>'required|',
            'singer_name'=>'required',
           
        ]);
        // Getting values from the  formss
        $input = new Song([
            'song_name' => $request->get('song_name'),
            'singer_name' => $request->get('singer_name'),

        ]);
        $input->save();
        return redirect('/songs')->with('success', 'song saved.');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $song = Song ::find($id);
        return view('Song_View.detail', ['id' => $song[$id]], compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
       
        return view('Song_View.edit', ['song' => $song]);
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
            'song_name'=>'required|',
            'singer_name'=>'required',
           
        ]);

        $song = Song::find($id);
        $song->song_name = $request->get('song_name');
        $song->singer_name = $request->get('singer_name');
      
        $song->save();

        return redirect('/songs')
            ->with('success', 'Song updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
    
        $song->delete();

        return redirect('/songs')
            ->with('success', 'Song deleted successfully');
    }

 
}
