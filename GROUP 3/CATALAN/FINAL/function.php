<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ( $username == "shaina" && $password == "9876") {
	
	echo  '<a> You have Successfully logged in</a>' . '<a href= "multi.php">Continue</a>';
}
else{

	echo '<a> Log in Failed </a>' . '<a href= "index.php">Try again</a>';
}
?>
<style>
body {
	background-image: url("pink.jpg");
}
</style>