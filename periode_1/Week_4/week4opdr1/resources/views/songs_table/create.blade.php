@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Add Song</h1>
     <div>
       @if ($errors->any())



       <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
  <strong class="font-bold">Error</strong>
  <span class="block sm:inline"> <ul>
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
           </ul>.</span>
  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
</div>
      
       @endif
         <form method="POST" action="{{'/created'}}">
             @csrf
             <div class="form-group">
                 <label for="stock_name">Title:</label>
                 <input type="text" class="shadow appearance-none border rounded  text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="title"/>
             </div>

             <div class="form-group">
                 <label for="ticket">Artist:</label>
                 <input type="text" class="shadow appearance-none border rounded  text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="singer"/>
             </div>


             <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add</button>
         </form>
     </div>
   </div>
</div>
@endsection