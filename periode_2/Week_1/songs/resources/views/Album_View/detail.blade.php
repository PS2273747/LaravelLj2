@extends('layouts.app')
@section('content')
  
        <div class="grid grid-cols-3 gap-3">
            <div class=" text-lg headerMakeup">Album Name</div>
            <div class=" text-lg headerMakeup"> Year</div>
            <div class=" text-lg headerMakeup"> Times sold</div>
        
            
                    <div>{{ $album->album_name}}</div>
                    <div>{{ $album->year}}</div>
                    <div>{{ $album->times_sold}}</div>
                
                
                <form action="{{ route('albums.destroy', $album) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-purple">Delete</button>
                </form>

                    <a href="{{ route('albums.edit', $album) }}">
                        <button class="btn btn-blue"> Edit </button>
                    </a>
                
        </div>

@endsection