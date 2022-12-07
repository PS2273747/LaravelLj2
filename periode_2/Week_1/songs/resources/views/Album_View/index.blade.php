@extends('layouts.app')

@section('content')
    @if(session('success'))
        {{session('success')}}
    @endif
 
    <br>
<div class="center">
    <button class="btn btn-blue">
        <a href="{{ route('albums.create')}}"> Create Album</a>
    </button> 
</div>
    <div class="grid grid-cols-3 gap-9">
        <div class=" text-lg headerMakeup">Album Name</div>
        <div class=" text-lg headerMakeup"> Year</div>
        <div class=" text-lg headerMakeup"> Times sold</div>
      
       
    @foreach($albums as $album)
   
  
  <div class=" text-lg txtMakeup"> <a href="{{ route('albums.show', $album->id) }}">{{$album->album_name}} </a> </div>
  <div class=" text-lg txtMakeup"> <a href="{{ route('albums.show', $album->id) }}">{{$album->year}} </a> </div>
  <div class=" text-lg txtMakeup"> <a href="{{ route('albums.show', $album->id) }}">{{$album->times_sold}} </a> </div>

  @endforeach
</div>
     <br>
   

@endsection
