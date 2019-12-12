<!DOCTYPE html>	
<html>
<head>
	<title></title>
<style type="text/css">
body {
	 margin:0;
	 padding:0;
	 font-family:century gothic;
	 font-color: white;
	 background:url(killer.gif) no-repeat;
	 background-size:cover;
	 
}

</style>
</head>
<body>

<?php
	session_start();
	
	if(isset($_SESSION['uname'])){
		
		echo "<h2>WELCOME USER</h2>";
		
		echo "<br><a href='login.php'><input type=button name=logout value=Logout></a><br>";
	}
	else{
		echo "<script>location.href='login.php'</script>";
	}
?>