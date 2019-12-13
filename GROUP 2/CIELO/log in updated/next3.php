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

   'Five o'clock, I think,' said Dele plaintively. 'The iron - I mean
the rabbit came off the fire about that time. You ought to have
seen General Pinkney, Joe, when - '
'Sit down here a moment, Dele,' said Joe. He drew her to the
couch, sat down beside her and put his arm across her shoulders.
'What have you been doing for the last two weeks, Dele?' he
asked.
She braved it for a moment or two with an eye full of love and
stubbornness, and murmured a phrase or two vaguely of General
Pinkney; but at length down went her head and out came the truth
and tears.
'I couldn't get any pupils,' she confessed. 'And I couldn't bear to
have you give up your lessons; and I got a place ironing shirts in
that big Twenty-fourth Street laundry. And I think I did very well
to make up both General Pinkney and Clementina, don't you,
Joe? And when a girl in the laundry set down a hot iron on my
hand this afternoon I was all the way home making up that story
about the Welsh rabbit. You're not angry are you, Joe? And if I
hadn't got the work you mightn't have sold your sketches to that
man from Peoria.'
'He wasn't from Peoria,' said Joe slowly.
'Well, it doesn't matter where he was from. How clever you are,
Joe - and - kiss me, Joe - and what made you ever suspect that I
wasn't giving music lessons to Clementina?'
'I didn't,' said Joe, 'until to-night. And I wouldn't have then,
only I sent up this cotton waste and oil from the engine-room this
afternoon for a girl upstairs who had her hand burned with a
smoothing-iron..",
		"page" => 1
		
	),
);

echo "A Service of Love" . $string[0] ["story"]; 
	
?>
<br></br>
<div>
<a href = "next4.php">next..4</a>
<a href = "next2.php">Previous</a>

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













