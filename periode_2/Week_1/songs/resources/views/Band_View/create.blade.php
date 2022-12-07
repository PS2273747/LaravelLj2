@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
 Create Band
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
      <form method="POST" action="{{ route('bands.store') }}">
     
        <div class="form-group">
            @csrf
            <label for="title"> Band:</label>
            <input type="text" class="form-control" name="band_name" />
        </div>
        <div class="form-group">
            <label for="author">Genre :</label>
            <input type="text" class="form-control" name="genre"/>
        </div>
        <div class="form-group">
            <label for="author">Founded :</label>
            <input type="text" class="form-control" name="founded"/>
        </div>
        <div class="form-group">
            <label for="author">Active till :</label>
            <input type="text" class="form-control" name="active_till"/>
        </div>
        <button type="submit"class="btn btn-blue">Create Band</button>
      </form>
  </div>
</div>
@endsection