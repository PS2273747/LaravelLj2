<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Band;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Songcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

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
    public function create(Request $request)
    {
        // The code is defining an empty array called $songsFromAPI
        $songsFromAPI = [];

        // it checks if the title query parameter is present in the request
        if ($request->query->has('title')) {
            
               // the code sets  $api_key  to a given value 
            $api_key = '6b4fe43c2ad4c5b83019e380ac5a61c1';

            // the code assigns the value of the title query parameter to  $title 
            $title = $request->query('title');

            // send a GET request to the API with $title to search for the track  
            $response = Http::get(
                'http://ws.audioscrobbler.com/2.0/?method=track.search&track=' .
                    $title . '&api_key=' . $api_key . '&format=json'
            )->json();

            // Get results from $response and save it into $songsFromAPI
            $songsFromAPI = $response["results"]["trackmatches"]["track"];
        }
        $API = collect($songsFromAPI)->map(function ($song) {
            return [
                'song_name' => $song['name'],
                'singer_name' => $song['artist'],
            ];
        });
        return view('Song_View.create',['songsFromAPI' => $API]);
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
            'song_name' => 'required|',
            'singer_name' => 'required',

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

        $song = Song::find($id);
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
        $albums = Album::wheredoesntHave('songs', function ($query) use ($song) {
            $query->where('song_id', $song->id);
        })->get();
        return view('Song_View.edit', ['song' => $song, 'albums' => $albums]);
    }
    public function attach(Song $song, Album $album)
    {
        $song->albums()->attach($album);
        return redirect()->route('songs.edit', $song);
    }
    public function detach(Song $song, Album $album)
    {
        $song->albums()->detach($album);
        return redirect()->route('songs.edit', $song);
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
            'song_name' => 'required|',
            'singer_name' => 'required',

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
