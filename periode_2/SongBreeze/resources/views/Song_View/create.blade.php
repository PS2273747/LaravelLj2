@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
 Create Song
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
      <form method="POST" action="{{ route('songs.store') }}">
     
        <div class="form-group">
            @csrf
            <label for="title"> Song :</label>
            <input type="text" class="form-control" name="song_name" />
        </div>
        <div class="form-group">
            <label for="author">Singer :</label>
            <input type="text" class="form-control" name="singer_name"/>
        </div>
   
        <button type="submit"class="btn btn-grey">Create Song</button>
      </form>
  </div>
</div>
@endsection