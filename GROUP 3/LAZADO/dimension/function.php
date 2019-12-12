<?php

$username = $_POST['username'];
$password = $_POST['password'];

if 
   ( $username=="richard" && $password=="1234")
{
	echo '<a>You are succesfully log in </a>' . '<a href="session.php">Continue</a>';
}
else
{
echo '<a>Log in Failed </a>'. '<a href="index.php">Try again</a>';

}

?>