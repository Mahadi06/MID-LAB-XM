<?php 

	

 ?>

<?php
	session_start(); 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Registration</title>
 </head>
 <body>
 	<fieldset >
 	<legend ><h3>Registratoin</h3></legend>
 	<form method="POST" action="regCheck.php">
 		
 		Id:<br>
 		<input type="text" name="id"><br>
 			
 		Password <br>
 		<input type="password" name="password1"><br>
 			
 		Confirm Password <br>
 		<input type="password" name="password2"><br>

 		Name <br>
 		<input type="text" name="name"><br>
 		<hr>
 		User Type <br>
 		<input type="radio" name="type" value="user">User
 		<input type="radio" name="type" value="admin">Admin <br>
 		<input type="submit" name="signup" value="Sign Up">
 		<a href="login.php">Sign In</a>

 	</fieldset>	


 			

 	</form>
 
 </body>
 </html>