<?php

//run the code only if the form has been submitted 
 
 if (isset($_POST['submit'])) {
	 
	 
	if ($_SESSION ["captcha"] !==$_POST ["captcha"])

    {
 
           echo 'matched';
	 
	}
	   else {
		  echo ' CHARACTER DO NOT MATCH ON THE image';

		   
	   }
	   
 }
 
 
 
