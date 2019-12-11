<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ( $username=="kevin" && $password=="1234" )
{
echo '<a>You are succesfully log in </a>' . '<a href="session.php">Continue</a>';
}
else
{
echo '<a>Log in Failed </a>'. '<a href="session.php">Try again</a>';
}

?>