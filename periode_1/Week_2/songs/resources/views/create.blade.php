@extends('layouts.app') 

@section('content')

<html>

   <head>
      <title>Song creator</title>
   </head>

   <body>
      <form action = "/song" method = "POST">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            
         <table>
            <tr>
               <td>Name song</td>
               <td><input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           type = "text" name = "name" /></td>
            </tr>
          
            <tr>
               <td colspan = "2" align = "center">
                  <input class="bg-red-500 rounded-md p-3" type = "submit" value = "Register Song" />
               </td>
            </tr>
         </table>
      
      </form>
   </body>
</html>

@endsection