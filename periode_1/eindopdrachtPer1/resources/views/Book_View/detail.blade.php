@extends('layouts.app')
@section('content')
<div>
<table>
    <thead>
        <tr class="headerMakeup">
            <th>Title</th>
           
            <th >Author</th>

        </tr>
    </thead>
    <tbody>
        <tr class="text-lg txtMakeup">
            <td>{{ $books->title}}</td>
            <td>{{ $books->author}}</td>
        </tr>
        <form action= "/book/{{$books->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-purple">Delete</button>
        </form>
        
        <form action= "/bookEdit/{{$books->id}}" method="GET">
            @csrf
          
            <button class="btn btn-blue"> Edit </button>
        </form>
        </div>
        
@endsection