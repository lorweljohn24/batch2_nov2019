<html>

<head><link href="LOG.css" rel="stylesheet" style="text/css">
<style>
body
{
	background-image:url("123.jpg");
	background-size:100% 100%;
	background-repeat:no-repeat;

}
h1
{
	color:#8c8c8c;
	text-align:center;
	font-size:110px;
	text-shadow:5px 8px black;
	
}
@font-face {
    src: url('splatch-webfont.woff2') format('woff2'),
         url('splatch-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    src: url('wrestlemania-webfont.woff2') format('woff2'),
         url('wrestlemania-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}

</style>

</head>

<h1> My Login form </h1>

<body >

<div class="loginbox">

<h2 align="center">LOG IN </h2> </br> 
<form method="post" action="useraccount.php" >
    Username:<input type="text" name="username" placeholder="Enter your Username" required> </br> </br>
    Password: <input type="password" name="password" placeholder="Enter your password" required></br>
    <input type="submit" value="Submit">
</form>
</div>

</body>

<?php
 session_start();
if(array_key_exists("username",$_POST)){
	 if($_POST['username'] == "Username" && $_POST['password']=="1244")
	{
		$_SESSION["username"] = $_POST["username"];
		@$_POST["Submit"] <> "useraccount.php";
		
	}
	
else 
{
	echo "wrong Password <a href='logout.php' >Please Try Again</a>";
	echo "<body style='background-color:pink'>";
	exit;
}
}

?>

</html>
