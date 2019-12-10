<?php
function compute()
{
	$num1 = $_POST['FirstNum'];
	$num2 = $_POST['SecondNum'];
	
	switch($_POST['dropdown'])
	{
		case "Addition":
			$sum = $num1 + $num2;
			return $sum;
			break;
		case "Subtraction":
			$diff = $num1 - $num2;
			return $diff;
			break;
		case "Division":
			$quo = $num1 / $num2;
			return $quo;
			break;
		case "Multiplication":
			$prod = $num1 * $num2;
			return $prod;
			break;
		default:
			echo "Invalid Operation";
	}
	}
		echo"The Result is: " .compute();
?>
<br>
<a href = "cal.php">Back</br>