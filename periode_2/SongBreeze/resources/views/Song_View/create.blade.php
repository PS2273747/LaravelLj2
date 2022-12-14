@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header text-center">
    Add Song
  </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div><br />
    @endif
    <!-- reads song from API  -->
    @foreach ($songsFromAPI as $song)
    <form method="POST" action="{{ route('songs.store') }}">
      @csrf
      <div class="grid grid-cols-1 gap-9 text-center">
        <div class=" text-lg txtMakeupDash">
          {{ $song['song_name'] }} - {{ $song['singer_name']}}
        <input type="hidden" name="song_name" value="{{$song['song_name']}}">

        <input type="hidden" name="singer_name" value="{{ $song['singer_name']}}">
        <button name="addSong" type="submit" class="btn btn-grey">
          +
        </button>
      </div>
    </form>
    @endforeach
  </div>
</div>
@endsection