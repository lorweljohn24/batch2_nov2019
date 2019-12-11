<?php
    session_start();
	
	if(isset($_SESSION['uname'])){
	
	echo "<h2>Welcome Users!!!</h2>";
	
	echo "<br><a href='hello.php'><input type=button name=back value=back ></a>";
	}
	else{
		echo"<script>location.href='login.php'</script>";
		echo"<script>location.href='login.php'</script>";
	}
	?>