@extends('layouts.app')

@section('content')



<html>

   <head>
      <title>Song editor</title>
   </head>

   <body>
<div id="wrapper">

<div >
@foreach ($songs as $song)
 <form method="POST" action="/store" >
 <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
 
  <table id="song table">
  
  
   <tr >
    <td > <input type="text" id="{{$song}}" value="{{$song}}"></td>
    <td><input class="bg-red-500 rounded-md p-3" type="submit" name="editSong" value="EDIT"></td>
    <td><input type = "hidden" id="{{$song}}" name="songName" value="{{$song}}"></td>
    </tr>

  
  </table>


 </form>
 @endforeach
</div>

</div>
</body>
</html>
@endsection