<?php
session_start();

if(isset($_SESSION['username'])){
echo "<h2>Welcome to Summoners Rift</h2>";
echo "<br><a href='welcomepage.php'><input type=button name=back value=back></a>";
echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
}else{
echo "<script>location.href='index.php'</script>";
}
?>