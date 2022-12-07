@extends('layouts.app')
@section('content')
  
        <div class="grid grid-cols-2 gap-3">
            <div class=" text-lg headerMakeup">Song </div>
            <div class=" text-lg headerMakeup"> Singer</div>
          
            
                    <div>{{ $song->song_name}}</div>
                    <div>{{ $song->singer_name}}</div>
                
            
                <form action="{{ route('songs.destroy', $song) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-purple">Delete</button>
                </form>

                    <a href="{{ route('songs.edit', $song) }}">
                        <button class="btn btn-blue"> Edit </button>
                    </a>
                
        </div>

@endsection