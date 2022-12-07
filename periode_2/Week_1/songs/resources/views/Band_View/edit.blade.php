@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header headerMakeup">
    Edit your band:
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
    
      <form method="POST" action="{{route('bands.update', $band->id)}}">
        @method('PATCH')
        
        <div class="form-group">
            @csrf
            <label for="band" class="headerMakeup"> Band:</label>
            <input type="text" class="form-control txtMakeup border border-solid border-gray-300" name="band_name" value="{{ $band->band_name }}"/>
        </div>
        <div class="form-group">
            <label for="genre" class="headerMakeup">Genre :</label>
            <input type="text" class="form-control txtMakeup    border border-solid border-gray-300" name="genre" value="{{ $band->genre }}"/>
        </div>
        <div class="form-group">
            <label for="founded" class="headerMakeup">Founded :</label>
            <input type="text" class="form-control txtMakeup    border border-solid border-gray-300" name="founded" value="{{ $band->founded }}"/>
        </div>
        <div class="form-group">
            <label for="active_till" class="headerMakeup">Active till :</label>
            <input type="text" class="form-control txtMakeup    border border-solid border-gray-300" name="active_till" value="{{ $band->active_till }}"/>
        </div>
        <button type="submit" class="btn btn-blue">Update band</button>
      </form>
  </div>
</div>
@endsection