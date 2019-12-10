<html>
<head>
  <title> CIELO CALCULATOR </title>
 <style type ="text/css">
 body {
	   
	    background-color:pink;
 }
 
 #answer{
	     background-color: white;
		 padding:20px
		 text-allign:center; 5px;
		 font-size:25px; 
 }
 
 </style>
 </head>
 <body> 
         <center>
       <head>
	       <title> MDAS </title>
		    <form action = "calc_process.php" method = "POST">
			 <label> SELECT AN OPERATION: </label>
			 <select name = "dropdown">
			     <option></option>
			<option value = "ADDITION">ADDITION</option>
			<option value = "SUBTRACTION">SUBTRACTION</option>
			<option value = "MULTIPLICATION">MULTIPLICATION</option>
			<option value = "DIVISION">DIVISION</option>
			
			</select> <br></br>
			ENTER THE FIRST NUMBER : <input type ="text" name = "firstnum" required><br></br>
			ENTER THE SECOND NUMBER : <input type ="text" name = "secondnum" required><br></br>
			 <input type = "SUBMIT" vallue = "Enter"/>
			 </form>
			
			
			
			</body>
			</html>
			