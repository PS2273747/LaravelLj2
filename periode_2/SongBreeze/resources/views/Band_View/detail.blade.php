@extends('layouts.app')
@section('content')

<div class="grid grid-cols-4 gap-3">
    <div class=" text-lg headerMakeupDash">Band Name</div>
    <div class=" text-lg headerMakeupDash"> Genre</div>
    <div class=" text-lg headerMakeupDash"> Founded</div>
    <div class=" text-lg headerMakeupDash"> Active till</div>

    <div>{{ $band->band_name}}</div>
    <div>{{ $band->genre}}</div>
    <div>{{ $band->founded}}</div>
    <div>{{ $band->active_till}}</div>

    <form action="{{ route('bands.destroy', $band) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-darkgrey">Delete</button>
    </form>

    <a href="{{ route('bands.edit', $band) }}">
        <button class="btn btn-grey"> Edit </button>
    </a>

</div>
<div>
    <div>
        <h1 class=" text-lg headerMakeupDash">Albums die gemaakt zijn door deze band:</h1>
        @foreach( $band->albums as $album)
        <div>
            {{$album->album_name}}
        </div>
        @endforeach

    </div>


</div>

@endsection