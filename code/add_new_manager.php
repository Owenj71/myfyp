<h1>Add a new manager to the database</h1>


<form method = "POST" action = "processManager.php">

	<table>
	     
		<tr><td><b>User Email</B></td><td><input type = "text" name = "user_email"  id= "user_email"></td></tr>
		<tr><td><b>Manager First Name</B></td><td><input type = "text" name = "manager_fname"  id= "manager_fname"></td></tr>
		<tr><td><b>Manager Surname</B></td><td><input type = "text" name = "manager_sname"  id= "manager_sname"></td></tr>
		<tr><td><b>Manager Phonenumber</B></td><td><input type = "text" name = "phonenumber"  id= "phonenumber"></td></tr>
		<tr><td><b>Manager Password</B></td><td><input type = "text" name = "user_password"  id= "user_password"></td></tr>

           <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Create New Manager"> 
               </td>
            </tr>
	</table>

</form>
<HR/>

 <p>
Go back to the main page [<a href = "index.php">Home</a>]
 </p>
