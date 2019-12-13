<!DOCTYPE html>
<html>
<head>
 
 <style type="text/css">
 

body {
	 margin:0;
	 padding:0;
	 font-family:century gothic;
	 background:url(giphy.gif) no-repeat;
	 background-size:cover;
	 
}


</style>


<?php

//run the code only if the form has been submitted 
 
 if (isset($_POST['submit'])) {
	 
	 
	if ($_SESSION ["captcha"] !==$_POST ["captcha"])

    {
 
           echo 'matched';
	 
	}
	   else {
		  echo ' CHARACTER DO NOT MATCH ON THE image';

		   
	   }
	   
 }
 
$username = $_POST['username'];
$password = $_POST['password'];


if ( $username=="admin" && $password=="1234" )
{
echo '<a>You are Succesfully log in </a>' . '<a href="new.php">Continue</a>';
}
else
{
echo '<a>Log in Failed </a>'. '<a href="login.php">Try again</a>';
}

 
 ?>
