@extends('layouts.app')
@section('content')
<div>
<table class="border-solid border-2 border-indigo-600 ml-40">
    <thead>
        <tr class="border-solid border-2 border-indigo-600">
            <th>Title</th>
            <th class="border-solid border-2 border-indigo-600">Artist</th>

        </tr>
    </thead>
    <tbody>
        <tr class="border-solid border-2 border-indigo-600">
            <td class="border-solid border-2 border-indigo-600 text-3xl">{{ $songs->title}}</td>
            <td>{{ $songs->singer}}</td>
        </tr>
        <form action= "/details/{{$songs->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-red">Delete</button>
        </form>
        <br>
        <form action= "/edit/{{$songs->id}}" method="GET">
            @csrf
          
            <button class="btn btn-blue"> Edit </button>
        </form>
        </div>
        
@endsection