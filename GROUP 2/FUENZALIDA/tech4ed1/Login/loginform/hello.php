<?php

$uname="muryel";
$pwd="kyut";

session_start();

if(isset($_SESSION['uname'])){
	
	echo "<h1>Welcome".$_SESSION['uname']."</h1>";
	
	echo "<a href='pro.php'>Production</a><br>";
	
	echo "<br><a href='muri.php'><input type=button value=logout name=out></a>";
}
else{
	if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
		
		$_SESSION['uname']=$uname;
		
		echo "<script>location.href='hello.php'</script>";
	     
	}
}