<?php

echo <a href="Index.php">logout</a>;

$username = $_POST['username'];
$password = $_POST['password'];

if ( $username == "shaina" && $password == "9876"){
	
	echo  '<a> You have Successfully logged in</a>' . '<a href= "session.php">Continue</a>';
}
else
{
	echo '<a> Log in Failed </a>' . '<a href= "function.php">Try again</a>';
}
?>