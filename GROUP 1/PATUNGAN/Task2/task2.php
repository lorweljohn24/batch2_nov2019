<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> CALCULATOR </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>

<body>
<div>
<center>
<form>
	<form style="max-width: 450px; margin: auto;">
	<input type="text" name="num1" placeholder="Number 1">
	<input type="text" name="num2" placeholder="Number 2">
	<select name="operator">
		<option> None </option>
		<option> Add </option>
		<option> Subtract </option>
		<option> Multiply </option>
		<option> Divide	</option>
	</select>
	<br>
	<button type="submit" name="submit" value="submit" >Calculate</button>		
</form>
<p> The answer is: </p>
<?php
	if (isset($_GET['submit'])){
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['operator'];
		switch ($operator) { 
			case "None": 
				echo "You need to select method!" ;
			break;
			case "Add": 
				echo $result1 + $result2 ;
			break;
			case "Subtract": 
				echo $result1 - $result2 ;
			break;
			case "Multiply": 
				echo $result1 * $result2 ;
			break;
			case "Divide": 
				echo $result1 /	 $result2 ;
			break;
		}
		
	}	
?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</div>
</body>

</html>

