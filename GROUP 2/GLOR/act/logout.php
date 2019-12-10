<html>

<head><link  rel="stylesheet" style="text/css">
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

h3
{
	color:#cccccc;
	text-align:center;
	font-style:oblique;
	
	
}
@font-face {
    src: url('splatch-webfont.woff2') format('woff2'),
         url('splatch-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
h5
{
	color:#cccccc;
	text-align:center;
	font-style:oblique;
	font-size:18px;
	
}
h4
{
	color:#ff6666;
	text-align:center;
	
	
}
a{
	text-decoration:none;
	color:#ff6666;
	font-size:17px;
}
.loginbox
{
	  width:1200px;
	  height:350px;
	  background:#000;
	  color:#fff;
	  top:50%;
	  left:50%;
	  position:absolute;
	  transform:translate(-50%,-50%);
	  box-sizing:border-box;
	  padding:70px 30px;
	  opacity:90%;
}
</style>

</head>
<h1>  </br>Logout </h1>
<body>

<div class="loginbox">


<?php

session_start();
session_destroy();
echo "<h5>Are you sure to Log out?</h5>";
echo "<br><h4><a href='login.php'></br>YES</a></h4>";
exit;

?>
</div>
</body>
</html> 