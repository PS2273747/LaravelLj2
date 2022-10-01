@extends('layouts.app')

@section('content')





<html>

   <head>
      <title>Song editor</title>
   </head>

   <body>
<div id="wrapper">

<div >
 <form method="POST" action="/store" >
 <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
 
  <table id="song update table">
  
   
   <tr >
    <td >   <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" id="oldSong" name="songOld" value="{{$name}}"></td>
   
    <td><input class="bg-red-500 rounded-md p-3" type="submit" name="editSong" value="UPDATE"></td>

    </tr>
    
  
  </table>


 </form>
</div>

</div>
</body>
</html>
@endsection

