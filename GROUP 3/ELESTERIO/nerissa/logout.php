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
	session_start();
	session_destroy();
	echo "You are now logged out";
 ?>
 <a href = "index.php">LOGIN AGAIN</a>
 