<html>
<title>HTML Tutorial</title>
<body>  


<?php
	session_start();
	
	echo '<h1 class = "text-center ">THE WIND AND THE SUN</h1>';
	
	$string = array(
	
  array(
  "title" => "",
  "story" => " 

'It is beside the other kitchen utensils, Pina, you know where I keep them,' her mother weakly shouted back.

But the ladle was not anywhere near the other kitchen utensils, and Pina was too lazy to look for it elsewhere. 'I can’t find the ladle, mother,' she complained. 'I guess I won’t be cooking without the ladle.'

pinya5digital art by karlamuriel from deviantart.com

",
		"page" => 1
		
	),
);

echo "Once the Wind and the Sun" . $string[0] ["story"]; 
	
?>.",
	



<html>

<div>
<a href="1.php">PREVIOUS</a>
<a href="3.php">NEXT</a>

</div>

</body>
</html>
<style>
body{
	background-image: url("wind.gif");
	background-size:cover;
	font-size:30px;
	text-align:center;
	color:;
	padding: 20px;
	margin: 10px;
}
h1{
	text-align:center;
	color:pink;
}


td { 
    border:0px;
	padding: 10px;
}
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>