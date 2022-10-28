@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Songs
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
      <form method="post" action=" /edited/{{$song->id}}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="title"> Title:</label>
              <input type="text" class="form-control" name="title" value="{{ $song->title }}"/>
          </div>
          <div class="form-group">
              <label for="singer">singer :</label>
              <input type="text" class="form-control" name="singer" value="{{ $song->singer }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection