@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header headerMakeup">
    Edit your Book:
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
      <form method="POST" action="/book/{{$book->id}}">
        @method('PUT')
        <div class="form-group">
            @csrf
            <label for="title" class="headerMakeup"> Title:</label>
            <input type="text" class="form-control txtMakeup border border-solid border-gray-300" name="title" value="{{ $book->title }}"/>
        </div>
        <div class="form-group">
            <label for="author" class="headerMakeup">Author :</label>
            <input type="text" class="form-control txtMakeup    border border-solid border-gray-300" name="author" value="{{ $book->author }}"/>
        </div>
        <button type="submit" class="btn btn-blue">Update Book</button>
      </form>
  </div>
</div>
@endsection