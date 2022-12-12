@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header headerMakeup">
    Edit your album:
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
    
      <form method="POST" action="{{route('albums.update', $album->id)}}">
        @method('PATCH')
        
        <div class="form-group">
            @csrf
            <label for="band" class="headerMakeup"> Album:</label>
            <input type="text" class="form-control txtMakeup border border-solid border-gray-300" name="album_name" value="{{ $album->album_name }}"/>
        </div>
        <div class="form-group">
            <label for="genre" class="headerMakeup">Year :</label>
            <input type="text" class="form-control txtMakeup    border border-solid border-gray-300" name="year" value="{{ $album->year }}"/>
        </div>
        <div class="form-group">
            <label for="founded" class="headerMakeup">Times sold :</label>
            <input type="text" class="form-control txtMakeup    border border-solid border-gray-300" name="times_sold" value="{{ $album->times_sold }}"/>
        </div>
        <br>
       
        <button type="submit" class="btn btn-blue">Update album</button>
      </form>
      <div>
            <!-- gekoppelde songs -->
            @foreach($album->songs as $song)
            {{$song->song_name}}
            <form action="{{ route('albums.detach', [$album, $song]) }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-blue">
                 - 
              </button>
            </form>
            <br>
            @endforeach
          </div>
      
          <div>
            <!-- ongekoppelde songs -->
            @foreach($songs as $song)
            {{$song->song_name}}
            <form action="{{ route('albums.attach', [$album, $song]) }}" method="POST">
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