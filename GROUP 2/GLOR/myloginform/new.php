<html>
<title>login</title>
<body>  



<?php
	session_start();
	
	echo '<h1 class = "text-center ">Stress</h1>';
	
	$string = array(
	
  array(
  "title" => "Stress",
  "story" => "

   Stress is a normal reaction the body has when changes occur. It can respond to these changes physically, mentally, or emotionally.

What is stress?
Stress is the body's reaction to any change that requires an adjustment or response. The body reacts to these changes with physical, mental, and emotional responses. Stress is a normal part of life. You can experience stress from your environment, your body, and your thoughts. Even positive life changes such as a promotion, a mortgage, or the birth of a child produce stress.
How does stress affect health?
The human body is designed to experience stress and react to it. Stress can be positive, keeping us alert, motivated, and ready to avoid danger. Stress becomes negative when a person faces continuous challenges without relief or relaxation between stressors. As a result, the person becomes overworked, and stress-related tension builds. The body's autonomic nervous system has a built-in stress response that causes physiological changes to allow the body to combat stressful situations. This stress response, also known as the "fight or flight response", is activated in case of an emergency. However, this response can become chronically activated during prolonged periods of stress. Prolonged activation of the stress response causes wear and tear on the body – both physical and emotional.
Stress that continues without relief can lead to a condition called distress – a negative stress reaction. Distress can disturb the body's internal balance or equilibrium, leading to physical symptoms such as headaches, an upset stomach, elevated blood pressure, chest pain, sexual dysfunction, and problems sleeping. Emotional problems can also result from distress. These problems include depression, panic attacks, or other forms of anxiety and worry. Research suggests that stress also can bring on or worsen certain symptoms or diseases. Stress is linked to 6 of the leading causes of death: heart disease, cancer, lung ailments, accidents, cirrhosis of the liver, and suicide.
Stress also becomes harmful when people engage in the compulsive use of substances or behaviors to try to relieve their stress. These substances or behaviors include food, alcohol, tobacco, drugs, gambling, sex, shopping, and the Internet. Rather than relieving the stress and returning the body to a relaxed state, these substances and compulsive behaviors tend to keep the body in a stressed state and cause more problems. The distressed person becomes trapped in a vicious circle. .",
		"page" => 1
		
	),
);

echo "Stress" . $string[0] ["story"]; 
echo '<h1 class = "text-center ">The End</h1>';	
?>

<br></br>
<div>
<a href = "ses.php">Previous</a>
<a href = "logout.php">log out</a>
</div>

</body>
</html>
<style>
body{
	background-image: url("ll.gif");
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