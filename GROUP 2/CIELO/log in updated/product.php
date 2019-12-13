<html>
<title>HTML Tutorial</title>
<body>  



<?php
	session_start();
	
	echo '<h1 class = "text-center ">A Service of Love</h1>';
	
	$string = array(
	
  array(
  "title" => "A Service of Love",
  "story" => "
   WHEN ONE LOVES ONES ART no service seems too hard.
That is our premise. This story shall draw a conclusion from it,
and show at the same time that the premise is incorrect. That will
be a new thing in logic, and a feat in story-telling somewhat older
than the Great Wall of China.
Joe Larrabee came out of the post-oak flats of the Middle West
pulsing with a genius for pictorial art. At six he drew a picture of
the town pump with a prominent citizen passing it hastily. This
effort was framed and hung in the drug store window by the side
of the ear of corn with an uneven number of rows. At twenty he
left for New York with a flowing necktie and a capital tied up
somewhat closer.
Delia Caruthers did things in six octaves so promisingly in a
pine-tree village in the South that her relatives chipped in enough
in her chip hat for her to go 'North' and 'finish.' They could not
see her f -, but that is our story
Joe and Delia met in an atelier where a number of art and music
students had gathered to discuss chiaroscuro, Wagner, music,
Rembrandt's works pictures, Waldteufel, wall-paper, Chopin, and
Oolong.
Joe and Delia became enamoured one of the other or each of
the other, as you please, and in a short time were married - for
(see above), when one loves one's Art no service seem too hard.
Mr. and Mrs. Larrabee began housekeeping in a flat.",
		"page" => 1
		
	),
);

echo "A Service of Love" . $string[0] ["story"]; 
	
?>
<br></br>
<div>
<a href = "next.php">Next </a>
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





