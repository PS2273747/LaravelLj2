<?php

namespace App\Http\Controllers;


use App\Models\Band;
use Illuminate\Http\Request;

class Bandcontroller extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // gets songs from the Model and shows only the titles
        $bands = Band::all();
        return view('Band_View.index', compact('bands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Band_View.create');
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
            'band_name'=>'required|max:25',
            'genre'=>'required',
            'founded'=>'required|max:4|',
            'active_till'=>'required|max:5'
        ]);
        // Getting values from the  formss
        $input = new Band([
            'band_name' => $request->get('band_name'),
            'genre' => $request->get('genre'),
            'founded' => $request->get('founded'),
            'active_till' => $request->get('active_till')
        ]);
        $input->save();
        return redirect('/bands')->with('success', 'band saved.');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $band = Band ::find($id);
        return view('Band_View.detail', ['id' => $band[$id]], compact('band'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Band $band)
    {
        // $band = Band::find($id);
        return view('Band_View.edit', ['band' => $band]);
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
            'band_name'=>'required|max:25',
            'genre'=>'required',
            'founded'=>'required|max:4|',
            'active_till'=>'required|max:5'
        ]);

        $band = Band::find($id);
        $band->band_name = $request->get('band_name');
        $band->genre = $request->get('genre');
        $band->founded = $request->get('founded');
        $band->active_till = $request->get('active_till');
        $band->save();

        return redirect('/bands')
            ->with('success', 'Band updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Band $band)
    {
    
        $band->delete();

        return redirect('/bands')
            ->with('success', 'Band deleted successfully');
    }

 
}
