<?php
session_start ();

session_destroy();

echo "You are now Logged out ";

?>
<a href = "Index.php">Log in again</a>