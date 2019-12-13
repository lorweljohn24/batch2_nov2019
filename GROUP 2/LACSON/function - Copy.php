<?php

$username = $_POST['UserName'];
$password = $_POST['PassWord'];

if { $username=="angelene" && 
$password=="lacson" }
{
	echo '<a>You are succesfully log in </a> ' . '<a href="session.php">Continue</a>';
}
else
{
	echo '<a>You're Credentials are incorrect <a/> '.' <a href="login.php">Try Again </a>';
}
?>