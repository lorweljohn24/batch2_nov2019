<?php
session_start();

if(isset($_SESSION['username'])){
echo "<h2>Welcome to Summoners Rift</h2>";
echo "<br><a href='out.php'><input type=button value=logout name=logout class='form-control'></a>";
}else{
echo "<script>location.href='indexs.php'</script>";
}
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css.css">
<style>
body{
	background-image:url("back.gif");
	background-size:cover;
}

</style>
</head>
<body>
</body>
</html>