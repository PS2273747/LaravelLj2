@extends('layouts.app')
@section('content')

<div class="grid grid-cols-3 gap-3">
    <div class=" text-lg headerMakeupDash">Album Name</div>
    <div class=" text-lg headerMakeupDash"> Year</div>
    <div class=" text-lg headerMakeupDash"> Times sold</div>


    <div>{{ $album->album_name}}</div>
    <div>{{ $album->year}}</div>
    <div>{{ $album->times_sold}}</div>


    <form action="{{ route('albums.destroy', $album) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-darkgrey">Delete</button>
    </form>

    <a href="{{ route('albums.edit', $album) }}">
        <button class="btn btn-grey"> Edit </button>
    </a>

</div>
<div>
    <div>
    <h1 class=" text-lg headerMakeupDash">Songs in dit album:</h1>
        @foreach($album->songs()->get() as $song)
        <div>
            {{ $song->song_name}}
        </div>
        @endforeach
    </div>
    <div>
        <!-- ongekoppe;ld -->
    </div>
</div>

@endsection