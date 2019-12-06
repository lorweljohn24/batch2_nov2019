<html>
	<body>
		<head>
			<title>CALCULATE</title>
		</head>
		
		<form action = "task2.php" method = "POST">
			<label>Select an operation: </label>
			<select name = "dropdown">
				<option></option>
				<option value = "Addition">Addition</option>
				<option value = "Subtraction">Subtraction</option>
				<option value = "Multiplication">Multiplication</option>
				<option value = "Division">Division</option>
			</select><br></br>
		Enter the First number: <input type="text" name = "FirstNum" required/><br></br>
		Enter the Second number: <input type="text" name = "SecondNum" required/><br></br>
		<input type = "submit" value = "Enter"/>
</form>
	</body>
</html>
