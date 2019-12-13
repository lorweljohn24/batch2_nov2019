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
There was a pretty little girl called Pina who was pampered by her mother as an only child. Everything that Pina asked for, Pina got. Everything that Pina scoffed at was taken away. No one in her village was ever so spoiled as Pina. No one was ever such a snobbish child. She was so lazy, and she had never stirred a finger to work in her life.

Pina’s mother was perfectly happy that way, for Pina remained dependent on her as a spoiled child. But one day, Pina’s mother fell ill and there was no one to take care of Pina. She resolved that she would get well immediately for Pina’s sake – but she knew she would need help.

'Pina, Pina', she called weakly, from her cot. 'Come here a moment. I have something to ask of you'.

",
		"page" => 1
		
	),
);

echo "Once the Wind and the Sun" . $string[0] ["story"]; 
	
?>.",
	



<html>

<div>
<a href="1.php" target="_blank">NEXT</a>

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