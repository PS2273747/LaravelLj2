@extends('layouts.app')

@section('content')
    @if(session('success'))
        {{session('success')}}
    @endif
 
    <br>
<div class="center">
    <button class="btn btn-blue">
        <a href="/bookCreate">Create Book</a>
    </button> </div>
    <div class="grid grid-cols-2 gap-9">
        <div class=" text-lg headerMakeup">Title</div>
        <div class=" text-lg headerMakeup"> Author</div>
    @foreach($books as $book)
   
  
  <div class=" text-lg txtMakeup"> <a href="/book/{{$book->id}}">{{$book->title}} </a> </div>
 
  <div class=" text-lg txtMakeup"> <a href="/book/{{$book->id}}">{{$book->author}} </a> </div>
  @endforeach
</div>
     <br>
   

@endsection
