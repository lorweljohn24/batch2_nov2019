<?php

echo <a href='index.php'>logout</a>;

	$username = $_POST['username'];
	$password = $_POST['password'];
	
		if($username == "aubrey" && $password == "joyce"){
			
			echo "<a> You're now succsefully log in</a>" . '<a href = "session.php">CONTINUE</a>';
		}
		else{
			echo "<a> Log in Failed </a>" . '<a href = "index.php">TRY AGAIN</a>';
		}
?>