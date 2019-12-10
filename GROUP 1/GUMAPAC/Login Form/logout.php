<?php
session_start();

session_destroy();

echo "You are now logged out ";

?>
<a href="login.php">Log in again</a>