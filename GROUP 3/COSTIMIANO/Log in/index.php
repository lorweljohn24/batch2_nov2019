<!DOCTYPE html>
<html>
<head>
<title>LOG IN PAGE USING PHP</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style type="text/css">
body{
	background-image: url(giphy.gif);

	
	
 }

	   
#container{
        background-color: white;
		padding:20px;
		text-align:center: 5px;
		font-size:25px;
	}

h1{
	color:white;
}
h2{
	color:white;
}

    





</style>
</head>

<body>

<div class="container">
<br/>



<div class="row">
 <div class="col-lg-3"> </div>
			<div class="col-lg-7">
	       <center><h1> FREE PDF FILE ONLINE </h1><color:white>
	       	<center><h2> Log in to continue </h2>
		   <form method="POST" action="function.php">
		        Username <input type="text" name="username" placeholder="Enter username" class="form-control">
				Password <input type="password"  name="password" placeholder="Enter password" class="form-control">
				<br><center>
				<input type="submit" value="Log In" name="log in" class="btn btn-success btn-block">
				
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>

		   </form>
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
<div>
<form method="POST" action="function.php">
<center><input type="text" name="captcha" placeholder="Enter captcha" class="form-control"><br>
<input type="submit" value="Submit" name="submit" class="btn btn-primary btn-block">
</div>
</body>
</html>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html> 