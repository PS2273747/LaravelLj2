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
               <td><input type = "text" name = "name" /></td>
            </tr>
          
            <tr>
               <td colspan = "2" align = "center">
                  <input type = "submit" value = "Register Song" />
               </td>
            </tr>
         </table>
      
      </form>
   </body>
</html>