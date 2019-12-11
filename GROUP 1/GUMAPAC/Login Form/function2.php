<?php

$username = $_POST['UserName'];
$password = $_POST['PassWord'];
$captcha = $_POST['Captchas'];

if ( $username=="adowbong" && $password=="manac" && $captcha=="WOToD" )
{
echo '<a>You are succesfully logged in </a>' . '<a href="session.php">Continue</a>';
}
else
{
echo '<a>Your Credentials are incorrect </a>'. '<a href="login.php">Try again</a>';
}

?>