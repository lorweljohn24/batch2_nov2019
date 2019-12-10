<?php 
     session_start();
	 
	  if (isset($SESSION['uname'])){
	   
	     echo "<h2>Welcome tho product page</h2>";
		 
		 echo "<br><a href='welcome.php'><input type=button name=back value=back></a>";
		 
	}

    else {
          echo "<script>location.href='login.php'</script>";

}

?>		  
		 
		 
		 
		 
		 
		 
		 