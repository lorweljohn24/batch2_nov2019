<!DOCTYPE html>
<html>
<head>
 <title>PHP CALCULATOR</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <style type="text/css">
body{
	   background-color:skyblue;
   }
#answer{
	    background-color: white;
		padding:20px;
		text-align:center; 5px;
		font-size:25px;
  }
 </style>
 </head>
 <body>
       <div class="container'>
	       <div class="row">
		   
		    <div class="col-lg-3"> </div>
			<div class="col-lg-6">
			    <h2>CALCULATOR</h2>
			     <form method="POST">
				    <label>Enter First Number:</label>
					<input type="number" name="fnum" placeholder="First Number" class="form-control">
					<br>
					<label>Enter Second Number:</label>
					<input type="number" name="snum" placeholder="Second Number" class="form-control">
					<br>
					<p>Operator:</p>
					<select name="Operator" class="form-control">
					     <option>None</option>
						 <option>+</option>
						 <option>-</option>
						 <option>*</option>
						 <option>/</option>
					</select>	
					<br>
					<input type="submit" name="submit" value="Calculate" class="btn btn-success">
					<input type="reset" value="Clear" class="btn btn-danger">
		
		    </form>
		  <br>
		     
			<h4>Answer:</h4>
			<div id="answer">
			    
			     <?php
				 if (isset($_POST['submit'])){
				      $result1 = $_POST['fnum'];
					  $result2 = $_POST['snum'];
					  $sign = $_POST['Operator'];		
			}  
			switch($sign) {
				case "None":
			          echo "You need to select operator!";
			          break;
			      case "+":
			          echo $result1 + $result2;
			          break;
			      case "-":
			          echo $result1 - $result2;
			          break;
			      case "*":
			          echo $result1 * $result2;
			          break;
			     case "/":
			          echo $result1 / $result2;
			          break;					  
				}
				 ?>
			
			</div>
			
			    <div class="col-lg-3"></div>
			</div>
		</div>
</body>
</html>