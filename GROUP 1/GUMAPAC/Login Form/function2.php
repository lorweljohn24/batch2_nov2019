<?php

$username = $_POST['UserName'];
$password = $_POST['PassWord'];

if ( $username=="adowbong" && $password=="manac" )
{
echo '<a>You are succesfully log in </a>' . '<a href="session.php">Continue</a>';
}
else
{
echo '<a>Youre Credentials are incorrect </a>'. '<a href="login.php">Try again</a>';
}

?>