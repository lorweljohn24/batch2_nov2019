<form action="" method="post">
     <input type="text" name="n"  value="" placeholder="enter no"><br>
	 <input type="text" name="n2"  value="" placeholder="enter no"><br>
	 <input type="submit" name="a" value=" ADDITION + ">
	 <input type="submit" name="m" value=" MULTIPLICATION * ">
	 <input type="submit" name="d" value=" DIVISION / ">
	 <input type="submit" name="s" value=" SUBTRACTION - ">
</form>
<?php
if(isset($_POST['a']))
{
    $n = $_POST['n'];
    $n2 = $_POST['n2'];
	$a = $n+$n2;
	echo "Addition Is".$a;
}


if(isset($_POST['m']))
{
    $n = $_POST['n'];
    $n2 = $_POST['n2'];
	$m = $n*$n2;
	echo "Multiplication Is".$m;
}

if(isset($_POST['d']))
{
    $n = $_POST['n'];
    $n2 = $_POST['n2'];
	$d = $n/$n2;
	echo "Division Is".$d;
}

if(isset($_POST['s']))
{
    $n = $_POST['n'];
    $n2 = $_POST['n2'];
	$s = $n-$n2;
	echo "Subtraction Is".$s;
}

?>
<style>
}
form{
	width:500px;
	background: #3c3c3c;
	border-radius: 4px;
	height:300px;
	border:1px #3cb371;
	margin:0 auto;
	padding: 10px;
}
form input {
	width:50%;
	padding: 10px;
	border-radius:4px;
	border:1px solid #3cb371;
	background:#light blue;
}
form button{
	background:#ffa500;
    border:1px #000000;
    border-radius:4px;
    padding: 10px;
	width:50%;
}
	</style>