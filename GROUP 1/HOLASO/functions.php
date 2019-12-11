<?php

echo <a href='loginform.php'>logout</a>;

      $username = $_POST['username'];
	  $password = $_POST['password'];
	    
		if($username == "jen" && $password == "rose"]{
			
			echo "<a> You're now log in</a>" . '<a href = "session.php">continue</a>';
		}
		else{
			
			echo "<a> Log in failed </a>" . '<a href= "loginform.php">try again</a>';
		}
?>