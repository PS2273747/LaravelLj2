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
     <br>
    @foreach($books as $book)
    <div class="center text-lg txtMakeup"> <a href="/book/{{$book->id}}">{{$book->title}} - {{$book->author}}</a></div>
    @endforeach

@endsection
