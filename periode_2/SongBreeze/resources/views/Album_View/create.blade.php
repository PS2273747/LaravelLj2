@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
 Create Album
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
      <form method="POST" action="{{ route('albums.store') }}">
     
        <div class="form-group">
            @csrf
            <label for="title"> Album:</label>
            <input type="text" class="form-control" name="album_name" />
        </div>
        <div class="form-group">
            <label for="author">Year :</label>
            <input type="text" class="form-control" name="year"/>
        </div>
        <div class="form-group">
            <label for="author">Times sold :</label>
            <input type="text" class="form-control" name="times_sold"/>
        </div>
        <div class="form-group">
            <label for="band">Band:</label>
            <select name="band_id">
             
                @foreach($bands as $band)
                <option value="{{$band->id}}"> {{$band->band_name}} </option>
                @endforeach
               
            </select>
        </div>
        <button type="submit"class="btn btn-grey">Create Album</button>
      </form>
  </div>
</div>
@endsection