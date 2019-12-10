<html>
	<body>
		<head>
			<title>MDAS</title>
		</head>
		
		<form action= "calcu_process.php" method= "POST">
			<label>Select an operation: </label>
			<select name= "dropdown">
			<option></option>
			<option value = "Addition">Addition</option>
			<option value = "Subtraction">Subtraction</option>
			<option value = "Multiplication">Multiplication</option>
			<option value = "Division">Division</option>
			</select></br>
			Enter the first number: <input type="text" name = "FirstNum" required/><br></br>
			Enter the second number: <input type="text" name = "SecondNum" required/><br></br>
			<input type = "submit" value = "Enter"/>
		
	</form>
		</body>
		</html>
<style>
	body{
		Background:pink;
		color:black;
		margin: 0 auto;
	}
	
		</style>
		
	