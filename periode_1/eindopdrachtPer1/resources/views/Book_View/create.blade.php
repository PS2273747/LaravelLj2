@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
 Create Book
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
      <form method="POST" action="/book">
     
        <div class="form-group">
            @csrf
            <label for="title"> Title:</label>
            <input type="text" class="form-control" name="title" />
        </div>
        <div class="form-group">
            <label for="author">Author :</label>
            <input type="text" class="form-control" name="author"/>
        </div>
        <button type="submit"class="btn btn-blue">Create Book</button>
      </form>
  </div>
</div>
@endsection