<!DOCTYPE html>
<html>
<head>
 <center><h1>CALCULATOR</h1>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <style type="text/css">
body{
		background-color:skyblue;
	}
#answer{
	    background-color: white;
		padding:10px;
		text-align:center; 5px;
		font-size:25px;
 }
  </style>
</head>

<div class="container'>
	       <div class="row">
		   
		    <div class="col-lg-4"> </div>
			<div class="col-lg-6">

<form>
     <br>
     
	<center>
	<label>1st Number:</label>
     <input type="text" name="num1" placeholder="Enter First Number" class="form-control">
	 </br>
	 <br>
	 <label>2nd Number:</label>
	 <input type="text" name="num2" placeholder="Enter First Number" class="form-control">
	 </br>
	 <br>
	 <select name="operator" class="form-control">
	     <option>None</option>
		 <option>Add</option>
		 <option>Subtract</option>
		 <option>Multiply</option>
		 <option>Divide</option>
	 </select>
	 </br>
	 <br>
	 <input type="submit" name="submit" value="Calculate" class="btn btn-success">
	  </br>
  </form>
  <p>Answer</p>
 <div id="answer">
<?php
     if (isset($_GET['submit'])) {
		 $result1 = $_GET["num1"];
		 $result2 = $_GET["num2"];
		 $operator = $_GET["operator"];
		 switch ($operator) {
			case "None":
			     echo "You need to select method!";
			break;
			case "Add":
			     echo $result1 + $result2;
			break;
			case "Subtract":
			     echo $result1 - $result2;
			break;
			case "Multiply":
			     echo $result1 * $result2;
			break;
			case "Divide":
			     echo $result1 / $result2;
			break;			
        }
		 
	 }
?>
 </div>
       <div class="col-lg-3"></div>
</div>
</body>

</html>