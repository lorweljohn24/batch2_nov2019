<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style type="text/css">
body{
	   background-image: url(16.JPG);
	   background-size: cover;
	   
   }
#container{
	    background-color: white;
		padding:50px;
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
			<br>
	       <center><h1>LOG IN TO CONTINUE</h1>
		   <form method="POST" action="function.php">
		        Username <input type="text" name="username" placeholder="Enter username" class="form-control">
				Password <input type="password" name="password" placeholder="Enter password" class="form-control">
				<br><center>
				<input type="submit" value="LOG IN" name="log in" class="btn btn-primary btn-block">
				<br>
				<?php
$arr= array_merge(range(0,9),range("A","Z"));

//print_r($arr);

for($i=1;$i<=5;$i++)

{
	$ch = $arr[array_rand($arr)];

	@$captcha=$captcha.$ch;

	@$fc=$fc.$ch.",";

}

//echo $fc."<br>";
$nar = explode(",",$fc);

for($i=0;$i<5;$i++)

{

echo $nar[$i];
//echo "<img src='$nar[$i].GIF'/>";

}
?>
<br>	
<form method="POST" action="function.php">
<center>
<input type="text" name="captcha" placeholder="Enter captcha" class="form-control"><br>
<input type="submit" value="submit" name="submit" class="btn btn-success btn-block">
</div>
</div>
</body>
</html>