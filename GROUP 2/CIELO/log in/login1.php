<!DOCTYPE html>
<html>
<head> 
<title> LOGIN</title>
</head>
<body> 
       <div id="main">
	   <h1> Log in ka na </h1>
	   <form method="post">
	   Username<input type="text"name="username" class="text" autocomplete="off"
	   required>
	   Password<input type="password"name="password" class="text" required>
	   <input type="Submit" name="submit" id="sub">
	   </form>
	   </div>
	   </body>
	   </html>
	   
<?php
     if (isset ($_POST['submit'])) {
		 $un=$_POST['username'];
		 $pw=$_POST['password'];
		 
		 if ($un=='username' && $pw=='password') {
			  header ("location:login.html");
			  exit();
			  
		 }
		 else 
			 echo"Invalid username/password";
	 }
	 
?>	   
	   
	   
	   
	   
	   