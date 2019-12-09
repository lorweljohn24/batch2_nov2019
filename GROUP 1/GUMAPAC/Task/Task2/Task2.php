<html>
<head>
<title> Calculator </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css.css">
</head>
<body>
<div>
<center>
<form action = "function.php" method = "POST" style="max-width: 450px; margin: auto;">
<label> Select an operation: </label>
<select name = "dropdown" class="form-control">
<option></option>
	<option value = "Addition">Addition</option>
	<option value = "Subtraction">Subtraction</option>
	<option value = "Multiplication">Multiplication</option>
	<option value = "Division">Division</option>
<select></br>
	 Enter the first number: <input type="text" name ="firstNum" required class="form-control"></br>
	 Enter the second number: <input type="text" name ="secNum" required class="form-control"></br>
<input type ="submit" value="Enter" class="btn btn-primary btn-block"/>
</form>
</div>
</body>

</html>