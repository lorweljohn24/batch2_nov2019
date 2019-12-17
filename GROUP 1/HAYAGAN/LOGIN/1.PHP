<html>
<title>HTML Tutorial</title>
<body>  


<?php
	session_start();
	
	echo '<h1 class = "text-center ">THE VILLAGER AND THE SPECTACLES</h1>';
	
	$string = array(
	
  array(
  "title" => "",
  "story" => "Pina had never been asked to do anything in her life, and she was quite prepared to refuse, but she said anyway, 'What is it, Mother?'

'Pina,' said the doting mother, 'I am too sick to make you anything to eat. I am too sick to eat anything solid. I need you to cook lugaw for me, Pina. It is very easy: just put some rice in a pot, pour some water in with it, add a pinch of sugar, and leave the mixture to boil for a while.'

'Oh, that’s too hard! I won’t do it,' Pina said firmly.

'You have to, Pina!' her mother pleaded. 'What will your poor Nanay eat?'

But Pina was immovable. At length her mother resorted to shouting if only to catch her attention. Moping, Pina dragged her heavy feet down the stairs to gather the things she needed to make lugaw. She managed to find the rice, the water, the bowl, the sugar – but she could not find the ladle anywhere. How was she supposed to cook lugaw without a ladle?

'Nanay, where is the ladle?' Pina shouted.",
		"page" => 1
		
	),
);

echo "A Service of Love" . $string[0] ["story"]; 
	
?>.",
	



<html>
<br></br>
<div>
<a href="next.php">PREVIOUS</a>
<a href="2.php">NEXT</a>

</div>

</body>
</html>
<style>
body{
	background-image: url("spect.gif");
	background-size:cover;
	font-size:30px;
	text-align:center;
	color:yellow;
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