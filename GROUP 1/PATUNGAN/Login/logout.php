<  <?php
	session_start();
		
	session_destroy();
	
	echo "You are now logged out <br>";
	echo "<a href='login.php'>Log In Again?</a>";
	


?> 

	