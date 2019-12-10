<?php

function compute()

{

     $num1 = $_POST['firstnum'];
     $num2 = $_POST['secondnum'];
	 
	 switch ($_POST['dropdown'])
	 {
	 
	    case "ADDITION":
		     $sum = $num1 + $num2;
             return $sum;
			 break;

         case "SUBTRACTION":
		     $sum = $num1 - $num2;
             return $diff;
			 break;


         case "MULTIPLICATION":
		     $sum = $num1 * $num2;
             return $prod;
			 break;


        case "DIVISION":
		     $sum = $num1 / $num2;
             return $quo;
			 break;

         default :
		        echo "Invalid Operatiion";
	  
   }
}

       echo "The result is : " . compute();

?>
<br>
<a href = "task.22.php">Back</a>

