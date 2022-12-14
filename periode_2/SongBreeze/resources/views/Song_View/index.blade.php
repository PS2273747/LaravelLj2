@extends('layouts.sitelayout.app')

@section('content')
    @if(session('success'))
        {{session('success')}}
    @endif

 @if (Auth::Check())
    <div class="center">
        <button class="btn btn-blue">
            <a href="{{ route('songs.create')}}"> Create Song</a>
        </button> 
    </div>
@endif

<div class="grid grid-cols-2 gap-9">
    <div class=" text-lg headerMakeup">Song</div>
    <div class=" text-lg headerMakeup"> Singer</div>

    
    @foreach($songs as $song)
    <div class=" text-lg txtMakeup"> <a href="{{ route('songs.show', $song->id) }}">{{$song->song_name}} </a> </div>
    <div class=" text-lg txtMakeup"> <a href="{{ route('songs.show', $song->id) }}">{{$song->singer_name}} </a> </div>

    @endforeach
</div>
    
   

@endsection
