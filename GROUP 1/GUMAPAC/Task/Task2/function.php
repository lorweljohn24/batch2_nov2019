<?php
function compute()
{
$num1 = $_POST['firstNum'];
$num2 = $_POST['secNum'];
switch($_POST['dropdown'])
{
case "Addition":
$sum = $num1 + $num2;
return $sum;
break;

case "Subtraction":
$sum = $num1 - $num2;
return $sum;
break;

case "Division":
$sum = $num1 / $num2;
return $sum;
break;

case "Multiplication":
$sum = $num1 * $num2;
return $sum;
break;
}
}
echo "The result is: " .compute();
?>
</br>
<center>
<a href="Task2.php">Click here</a>
