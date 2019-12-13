<?php
$username = "admin";
$password = "admin";


session_start();

if (isset($_SESSION['username'])){

echo "<h1>Welcome " . $_SESSION['username'] ."</h1>";
echo "<center><br><a href='session.php'><input type=button name=Continue value=Continue class='form-control'></a>";

}
else{
if($_POST['username']==$username && $_POST['password']==$password ){
$_SESSION['username']=$username;
echo "<script>location.href='func.php'</script>";
}else{
echo "<script>alert('Invalid credentials')</script>";
echo "<script>location.href='indexs.php'</script>";
}
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
