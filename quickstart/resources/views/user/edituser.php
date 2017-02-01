<html>

   <head>
      <title>Add user</title>
   </head>
   
   <body>
      <form action = "/testuser/edit" method = "post">
      
         <table>
            <tr>
               <td>id</td>
               <td><input type='text' name='id' /></td>
            </tr>
            <tr>
               <td>name</td>
               <td><input type='text' name='name' /></td>
            </tr>
              <tr>
               <td>email</td>
               <td><input type='text' name='email' /></td>
            </tr>
               <tr>
               <td>username</td>
               <td><input type='text' name='username' /></td>
            </tr>
                 <tr>
               <td>phone</td>
               <td><input type='text' name='phone' /></td>
            </tr>
                    <tr>
               <td>dob</td>
               <td><input type='text' name='dob' /></td>
            </tr>
                 <tr>
               <td>address</td>
               <td><input type='text' name='address' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "adduser"/>
               </td>
            </tr>
         </table>
			
      </form>
   
   </body>
</html>