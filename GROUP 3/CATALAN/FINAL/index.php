<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<body>

<div class="container">
<div class="row">
<div class="col-lg-3"> </div>
<div class="col-lg-6">
<br/>
<h1 class="text-center">LOG IN TO CONTINUE</h1>
 <form action="function.php"  method="POST" >
		        Username <input type="text" name="username" placeholder="Enter username" class="form-control">
				Password <input type="password" name="password" placeholder="Enter password" class="form-control">
				<table  border="0" align="center">
				<center>
				<?php
	$text = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	echo $text = substr(str_shuffle($text),0,6);
	session_start();

	?>
	</center>
	Captcha:  <input type = "text" name = "captcha" placeholder = "Captcha Code" class = "form-control"><br/>
				<input type="submit" value="LOG IN" name="log in" class="btn btn-primary btn-block">
		   </form>		  		  
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html> 

<style>
body {
	background-image: url("pink.jpg");
}
</style>