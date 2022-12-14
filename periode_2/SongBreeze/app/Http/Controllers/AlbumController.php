<?php

namespace App\Http\Controllers;


use App\Models\Album;
use App\Models\Band;
use App\Models\Song;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class Albumcontroller extends Controller
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
        $albums = Album::all();
        return view('Album_View.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bands = Band::all();
        return view('Album_View.create',['bands'=>$bands]);
       
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
            'album_name'=>'required|max:25',
            'year'=>'required|nullable',
            'times_sold'=>'required|max:4|',
            'band_id'=>'required'
       
        ]);

        // Getting values from the  formss
        $input = new Album([
            'album_name' => $request->get('album_name'),
            'year' => $request->get('year'),
            'times_sold' => $request->get('times_sold'),
        
        ]);
        //gets band by id which is selected from the dropdown
        $band = Band ::find($request->get('band_id'));
        //associates band with album(relation)
        $input->band()->associate($band);
        $input->save();
        return redirect('/albums')->with('success', 'album saved.');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $album = Album ::find($id);
        return view('Album_View.detail', ['id' => $album[$id]], compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $songs = Song::wheredoesntHave('albums', function ($query) use ($album) {
            $query->where('album_id', $album->id);  })->get();
        return view('Album_View.edit', ['album' => $album, 'songs' => $songs] );
   
    }
    public function attach(Album $album, Song $song )
    {
        $album->songs()->attach($song);
        return redirect()->route('albums.edit', $album);
    }
    public function detach(Album $album, Song $song)
    {
        $album->songs()->detach($song);
        return redirect()->route('albums.edit', $album);
      
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
            'album_name'=>'required|max:25',
            'year'=>'required|nullable',
            'times_sold'=>'required|max:4|',
       
        ]);

        $album = Album::find($id);
        $album->album_name = $request->get('album_name');
        $album->year = $request->get('year');
        $album->times_sold = $request->get('times_sold');
   
        $album->save();

        return redirect('/albums')
            ->with('success', 'Album updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
    
        $album->delete();

        return redirect('/albums')
            ->with('success', 'Album deleted successfully');
    }

 
}
