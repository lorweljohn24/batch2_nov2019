<html>

<head><link  rel="stylesheet" style="text/css">
<style>
body
{
	background-size:100% 100%;
	background-repeat:no-repeat;
	color:#d9d9d9;
	font-family:Century Gothic;
	text-align:center;
	font-size:20px;
}
h1
{
	color:#8c8c8c;
	text-align:center;
	font-size:110px;
	text-shadow:5px 4px black;
	
}
h3
{
	color:#1EFFF0;
	text-align:center;
	font-style:oblique;
	opacity:75%;
	
	
	

}
a{
	text-decoration:none;
	color:#1EFFF0;
	font-size:17px;
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
.loginbox
{
	  width:1200px;
	  height:600px;
	  background:#1EFFF0;
	  color:#fff;
	  top:50%;
	  left:50%;
	  position:absolute;
	  transform:translate(-50%,-50%);
	  box-sizing:border-box;
	  padding:70px 30px;
	  opacity:80%;
}
h5
{
	font-family:Candara;
	color:#cccccc;
	text-align:center;
	font-size:19px;
	
}
h4
{
	font-family:Segeo Print;
	color:#ff6666;
	text-align:center;
	font-style:oblique;
	
}
a{
	text-decoration:none;
	color:#ff6666;
	font-size:17px;
}

</style>

</head>

<h1> Login </h1>


<body>





<div class="loginbox">
<?php
 session_start();
if(array_key_exists("username",$_POST)){
	
	
	 if($_POST['username'] == "username" && $_POST['password']=="1244")
	{
		$_SESSION["username"] = $_POST["username"];
		@$_POST["Submit"] <> "useraccount.php";
		
{
	echo "User not logged in"." "."<a href='login.php'>Please try Again</a>";
	exit;
}


echo " <a href='logout.php'><h4>Log Out </h4></a>";


@$_POST["Submit"] <> "useraccount.php";
}

if(!array_key_exists("username",$_SESSION)){
	echo "<h5>User not logged in"." "."<br><a href='login.php'>Please Try Again</a></h5>";
    exit;
}




?>
</div>
</body>

</html>