<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style type="text/css">
body{
	   background-color: lightgreen;
   }
#container{
	    background-color: white;
		padding:30px;
		text-align:center; 5px;
		font-size:25px;
  }
 
  </style>
</head>
<body>
       <div class="container">
	   <div class="row">
		   
		    <div class="col-lg-3"> </div>
			<div class="col-lg-6">
	       <center><h1>Log in to continue</h1>
		   <form method="POST" action="function.php">
		        Username <input type="text" name="username" placeholder="Enter username" class="form-control">
				Password <input type="password" name="password" placeholder="Enter password" class="form-control">
				<br><center>
				<input type="submit" value="LOG IN" name="log in" class="btn btn-primary btn-block">
		   </form>
		   </div>
</body>
</html>