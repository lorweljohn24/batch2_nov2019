<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></script>
<link rel="stylesheet" href="style.css">

<body>


<div class = "container">
<br/>
<h1 class = "text-center">LOG IN TO CONTINUE</h1>
<form action = "function.php" method = "POST" style = "max-width: 450px; margin: auto;">
	UserName <input type = "text" name = "username" placeholder = "Enter username" class = "form-control">
	PassWord <input type = "password" name = "password" placeholder = "Enter password" class = "form-control"><br/>
	Captcha:  <input type = "text" name = "captcha" placeholder = "enter captcha" class = "form-control"><br/>

<?php

	$text = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	echo $text = substr(str_shuffle($text),0,6);
	session_start();
	
	
	
	if(isset($_POST['check']))
	{
		$code = $_SESSION['captcha_code'];
		
		$username = $_POST['captcha'];
		
		if($code === $username)
		{
			echo "valid";
		}
		else
		{
			echo "invalid";
		}
	}


?>

<br/><br/>
<button type="submit" name = 'check' class="btn btn-primary btn-block">Log in</button>
</form>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>

<style>
body{
	background-image: url("giphy.gif");
	
}
</style>






