<!DOCTYPE html>
<html>
<head>
<title> Log in </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css.css">
<style>
body{
	background-image:url("back.gif");
	background-size:cover;
}

</style>
</head>
<body>
<div class="field-column">
<center>
<h1>LOGIN </h1>
<form action = "func.php" method = "POST" style="max-width: 450px; margin: auto;">
	 Username: <input type="text" name ="username" required class="form-control"></br>
	 Password: <input type="password" name ="password" required class="form-control"></br>
	 
<input type ="submit" value="Login" name="Login" class="btn btn-primary btn-block"/></br>
</form>

</div>
</body>

</html>