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
'Oh, you lazy child,' Pina’s mother wept. 'You won’t even look! I hope you grow a thousand eyes so you’ll be able to find it!' After saying these words, Pina’s mother noticed that the house had fallen silent. Pina was no longer griping downstairs! That was a marvel. Perhaps she was already cooking. Pina’s mother would be happy if the child would cook her anything, even if it were burnt.

But a long time had passed, and still the house was silent, and still Pina’s mother could not smell the cooking coals burning. She began to get worried. With all her meager strength she called out for Pina. Pina did not come, but the neighbors heard her pitiful cries, and they decided to drop by to see what was wrong. They took care of Pina’s mother in the child’s place.

But a long time had passed, and still the house was silent, and still Pina’s mother could not smell the cooking coals burning. She began to get worried. With all her meager strength she called out for Pina. Pina did not come, but the neighbors heard her pitiful cries, and they decided to drop by to see what was wrong. They took care of Pina’s mother in the child’s place.",
		"page" => 1
		
	),
);

echo "Once the Wind and the Sun" . $string[0] ["story"]; 
	
?>.",
	



<html>

<div>
<a href = "2.php">PREVIOUS</a>
<a href="4.php" target="_blank">NEXT</a>

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