<?php
session_start();

if(isset($_SESSION['username'])){
echo "<h2>Welcome to the Real World</h2>";
echo "<br />";
echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
}else{
echo "<script>location.href='index.php'</script>";
}
?> 