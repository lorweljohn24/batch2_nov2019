<?php

echo <a href='first.php'>logout</a>;

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username =="ness" && $password == "red"){
	
		echo "<a> You're now successfully log in</a>" . '<a href = "session.php">CONTINUE</a>';
		}
	else{
		echo "<a> log in failed </a>" . '<a href = "index.php">TRY AGAIN</a>;
		}
?>
		