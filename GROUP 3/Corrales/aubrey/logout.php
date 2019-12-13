<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>

<?php 
	session_start();
	session_destroy(); 
	echo "You are now logged out ";
	
?>
<a href = "index.php">LOG IN AGAIN</a>
</body>
</html>
<style>
body{
	background-image: url("v.jpg");
	color: white;
	font-size: 25px;
}
</style>