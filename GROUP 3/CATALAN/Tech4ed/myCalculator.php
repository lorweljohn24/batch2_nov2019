<?php
    if(isset($_POST['submit'])){
        $num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$submit=$_POST['submit'];
		$result="";
		
		switch ($submit){
			case 'Add':
			      $result=$num1+$num2;
			       break;
			case 'Subtraction':
			       $result=$num1-$num2;
			       break;
			case 'Multiply':
			       $result=$num1*$num2;
			        break;
			case 'Divide':
			       $result=$num1/$num2;
			       break;
			
			default:
			    $result="Error";
				break;
		}			
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> MY CALCULATOR</title>
  <style type="text/css">
   *{
	   margin: 0;
	   padding: 0;
	   -webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	   box-sizing: border-box;
	   font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
   }
   body{
	   background-color: #ff884d;
   }
   .main{
	   width: 400px;
	   margin: 50px auto;
	   background-color: #ffd9cc;
	   box-shadow: 0 0 10px 1px ;
   }
   h2{
	  width: 100%;
	  padding: 10px;
	  background-color: #ffaa80;
	  color: #000000;
	  text-align: center;
	  text-shadow: 1px 1px 1px #000000;    
   }
   #form-box{
	   padding: 15px;   
   }
   .inp{
	   width:  100%;
	   padding: 15px;
	   font-size: 20px;
	   margin-bottom: 10px;
	   border: none;
	   color: #ff9933;
	   border-radius: 20px;
   }
   .inp:focus{
	   outline: none;
	   box-shadow: 1px 2px 5px #000;
   }
   ::-webkit-input-placeholder{
	   color: #ff9933;
   }
   .btn{
	   width: 100%;
	   margin: 8px;
	   margin-bottom: 5px;
	   border: none;
	   cursor: pointer;
	   box-shadow: 0 0 25px #000 inset, 1px 1px 1px #000000;
	   border-radius: 20px;
	   font-size: 18px;
   }
   .btn:focus{
	   outline: none;
	   background-color: #000000;
	   color: #ff9933;
   }
   .result{
	   width: 100%;
	   text-align: center;
	   background-color: #ffaa80;
	   color: #000000;
	   padding: 8px;
   }
   </style>
</head>
<body>
     <div class="main">
	      <h2> MY CALCULATOR</h2>
		  <form action="" method="post" id="form-box">
		        <input type="number" class="inp" name="num1" placeholder="Enter First Number"
				" required><br>
				<input type="number" class="inp" name="num2" placeholder="Enter Second Number"
				" required><br>
				<input type="submit" name="submit" class="btn" value="Add">
				<input type="submit" name="submit" class="btn" value="Subtraction">
				<input type="submit" name="submit" class="btn" value="Multiply">
				<input type="submit" name="submit" class="btn" value="Divide"> 
		  </form>
		  <h1 class=" result">Result :<?php if(isset($result)){echo $result;} ?></h1>  
     </div>
</body>
</html> 