<?php 
$msg = "";
if(isset($_POST['btn'])){
	$first = $_POST['first'];
	$second = $_POST['second'];
	$calc = $_POST['calc'];

		if($calc == "1"){
			$msg = '<h1>'.$result = $first + $second.'</h1>';
		}elseif($calc == "2"){
			$msg = '<h1>'.$result = $first - $second.'</h1>';
		}elseif($calc == "3"){
			$msg = '<h1>'.$result = $first * $second.'</h1>';
		}elseif($calc == "4"){
			$msg = '<h1>'.$result = $first / $second.'</h1>';
		}
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
<form method = "post">
	<?php echo $msg; ?>
	<input type = "text" name = "first" value = "" placeholder = "enter number"><br><br>
	<select name="calc">
		<option value="1">+</option>
		<option value="2">-</option>
		<option value="3">*</option>
		<option value="4">/</option>
	</select><br><br>
	<input type = "text" name = "second" value = "" placeholder = "enter number"><br><br>
	<button type = "submit" name = "btn">Calculate</button>
</form>

</body>
</html>

<style>
	body{
		background: silver;
		color:white;
	}
	form{
		width:500px;
		background: white;
		border-radius: 4px;
		border: 1px solid red;
		margin: 0 auto;
		padding: 10px;
	}
	form input{
		width:96%;
		padding: 10px;
		border-radius:4px;
		border:1px solid black;
		background:  #8c8c8c;
		color: white;
	}
	form select{
		width: 100%;
		padding: 10px;
		background: #ECA95A;
		border: 1px solid #ECA95A;
		border-radius: 4px;
		color: black;
	}
	form button{
		background:#ECA95A;
		border: 1px solid #ECA95A;
		border-radius: 4px;
		padding: 10px;
		width: 100%;
		color: black;
	}
	h1{
		color: black;
	}

</style>