<!DOCTYPE html>
<html>
<body>
<style>
body{
	background-image:url('ad.gif');
	background-size:cover;
	margin:0;
	padding: 10px;
}
</style>
</body>
</html>

<?php

$uname="User HEHEH🙂😆😊🤗😘😋";


session_start();

if(isset($_SESSION['uname'])){
	
	echo "<h1>Welcome ".$_SESSION['uname']."</h1>";
	
	echo "<a href='product1.php'>Product</a><br>";
	
	echo "<br><a href='logout1.php'><input type=button value=logout name=LOGOUT></a>";

}
else {
	if($_POST['uname']=="mariaemmanuellamarie" && $_POST['pwd']=="050819" && $_POST['match']==$_POST ["captcha"]){
		
	$_SESSION['uname']=$uname;
	
	echo "<script>location.href='welcome1.php'</script>";
	}
	else {
		echo "<script>alert('username or password incorrect!')</script>";
		
		echo "<script>location.href='login1.php'</script>";
	}
	
}
?>