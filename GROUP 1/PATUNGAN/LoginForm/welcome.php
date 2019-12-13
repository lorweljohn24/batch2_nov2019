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
	 background:url(sun.gif) no-repeat;
	 background-size:cover;
	 
}

</style>
</head>
<body>


<?php

$uname="kerby";
$pwd="admin";

session_start();

if(isset($_SESSION['uname'])){
	
	echo "<h1>YOU ARE NOW LOG IN!".$_SESSION['uname']."</h1>";
	
	echo "<a href='product.php'>Enter</a><br>";
	
	echo "<br><a href='logout.php'><input type=button value=logout name=logout> </a>";
}	
else{
	if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
		
	$_SESSION['uname']=$uname;
	
	echo "<script>location.href='welcome.php'</script>";
	}
	else{
		echo "<script>alert('Wrong Credentials')</script>";
		
		echo "<script>location.href='login.php'</script>";
		
	}
}
?>
