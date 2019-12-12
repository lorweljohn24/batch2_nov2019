<?php
session_start();
if(isset($_SESSION['username'])){
session_destroy();
echo "<script>location.href='indexs.php'</script>";
}else{
	echo"<script>location.href='indexs.php'</script>";
}


?>