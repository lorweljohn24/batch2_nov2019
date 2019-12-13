<!DOCTYPE html>
<html>
<head>
    
  <style type="text/css">
body{
	   background-image: url(111.jpg) ;
	   background-size: ;
	   background-position:;
	   margin:;
}
  <style>
div {
  background-image: url('111.jpg');
}
</style>
<?php

$uname="admin";
$pwd="admin";

session_start();

if(isset($_SESSION['uname'])){
	
	echo "<h1>Welcome".$_SESSION['uname']."</h1>";
	
	echo "<a href='product.php'>Production</a><br>";
	
	echo "<br><a href='log.php'><input type=button value=logout name=logout></a>";
}
else{
	if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
		
		$_SESSION['uname']=$uname;
		
		echo "<script>location.href='welcome.php'</script>";
	     
	}
}
