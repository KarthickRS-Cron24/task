<html>

   <head>
      <title>Form Example</title>
   </head>

   <body>
   
      {{$errors}}
      
      <form action = "check" method = "POST">
      @csrf
      <label for="title">Post Title</label>

         <input id="title" type="text" class="@error('title') is-invalid @enderror">

         @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <br><br>
         <label for="body">Post body</label>

         <input id="body" type="text" class="@error('body') is-invalid @enderror">

         @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
         @enderror
               
         <br><br>
               <td colspan = "2" align = "center">
                  <input type = "submit" value = "Register" />
               </td>
            </tr>
         </table>
      
      </form>
   </body>
</html>