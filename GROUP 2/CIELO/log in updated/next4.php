<html>
<title>HTML Tutorial</title>
<body>  



<?php
	session_start();
	
	echo '<h1 class = "text-center ">A Service of Love</h1>';
	
	$string = array(
	
  array(
  "title" => "",
  "story" => "

   I've been firing the engine in that laundry for the
last two weeks.'
'And then you didn't - '
'My purchaser from Peoria,' said Joe, 'and General Pinkney are 
26 O HENRY - 100 SELECTED STORIES
both creations of the same art - but you wouldn't call it either
painting or music.
And then they both laughed, and Joe began:
'When one loves one's Art no service seems - '
But Delia stopped him with her hand on his lips. 'No,' she said -
'just When one love .",
		"page" => 1
		
	),
);

echo "A Service of Love" . $string[0] ["story"]; 
echo '<h1 class = "text-center ">The End</h1>';	
?>
<br></br>
<div>
<a href = "next3.php">Previous</a>
<a href = "logout.php">log out</a>
</div>

</body>
</html>
<style>
body{
	background-image: url("22.jpg");
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
</style>

