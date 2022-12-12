@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header headerMakeup">
    Edit your song:
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
    
      <form method="POST" action="{{route('songs.update', $song->id)}}">
        @method('PATCH')
        
        <div class="form-group">
            @csrf
            <label for="song_name" class="headerMakeup"> Song:</label>
            <input type="text" class="form-control txtMakeup border border-solid border-gray-300" name="song_name" value="{{ $song->song_name }}"/>
        </div>
        <div class="form-group">
            <label for="singer_name" class="headerMakeup">Singer :</label>
            <input type="text" class="form-control txtMakeup    border border-solid border-gray-300" name="singer_name" value="{{ $song->singer_name }}"/>
        </div>
        
        <button type="submit" class="btn btn-blue">Update song</button>
      </form>
      <div>
            <!-- gekoppelde albums -->
            @foreach($song->albums as $album)
            {{$album->album_name}}
            <form action="{{ route('songs.detach', [$song, $album]) }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-blue">
                 - 
              </button>
            </form>
            <br>
            @endforeach
          </div>
      
          <div>
            <!-- ongekoppelde albums -->
            @foreach($albums as $album)
            {{$album->album_name}}
            <form action="{{ route('songs.attach', [$song, $album]) }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-blue"> 
                + 
              </button>
            </form>
            <br>
            @endforeach
          </div>
  </div>
</div>
@endsection