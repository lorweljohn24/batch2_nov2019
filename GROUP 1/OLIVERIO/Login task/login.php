<?php

$username = $_POST['Username'];
$password = $_POST['Password'];

if ( $username=="admin" && 
$password=="pogi" )
{
	echo "<a>You're Succesfully Log in </a> " , '<a href="sessions.php"> Continue</a>';
}
else
{
	echo "<a>Your Credentials are incorrect <a/> "," <a href='myfirst.php'> Sorry Please Try Again </a>";
}
?>