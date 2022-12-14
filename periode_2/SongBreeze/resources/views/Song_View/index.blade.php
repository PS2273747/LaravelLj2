@extends('layouts.sitelayout.app')

@section('content')
@if(session('success'))
{{session('success')}}
@endif

@if (Auth::Check())
<div class="center">
    <input type="text" id="titleInput" name="title" placeholder="Search songs by title " required><br><br>
    <button class="btn btn-blue" onclick="submitForm()">
        Search song
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

<script>
    function submitForm() {
        // Get the value of the title input field
        var title = document.getElementById('titleInput').value;
        if (title == "") {
            alert("Please fill in the searchbar to continue!")

        } else {
            // Navigate to the /songs/create URL with the selected title as a query parameter
            window.location.href = '/songs/create?title=' + title;
        }
    }
</script>



@endsection