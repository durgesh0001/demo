<html>
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      
      <table border = "1">
      <p><a href = 'insert'>Insert</a></p>
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Edit</td>
            <td>Delete</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td><a href = 'edit/{{ $user->id }}'>Edit</a></td>
            <td><a href = 'delete/{{ $user->id }}'>Delete</a></td>
         </tr>
         @endforeach
      </table>
   
   </body>
</html>