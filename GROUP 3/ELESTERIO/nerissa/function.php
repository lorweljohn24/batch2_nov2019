<!DOCTYPE html>
<html>
<head>

<style type="text/css">


body {
	margin:0;
	padding:0;
	font-family:century gothic;
	background:url(o.gif);
	background-size:cover;
	
}

</style>















<?php

$username = $_POST['username'];
$password = $_POST['password'];

	if($username =="ness" && $password == "red")
	{
	
		echo "<a> You're now successfully log in</a>" . '<a href = "session.php">CONTINUE</a>';
		}
		
	else{
		echo '<a> log in failed </a>' . '<a href = "index.php">TRY AGAIN</a>';
		}
		
?>
		