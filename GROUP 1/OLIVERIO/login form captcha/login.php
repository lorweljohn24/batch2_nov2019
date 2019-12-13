<?php
$username = "admin";
$password = "pogi";
$captcha_num = "captcha_num";
session_start();


if (isset($_SESSION['username'])){

echo "<h1>You're now logged in " . $_SESSION['username'] ."</h1>";
echo "<a href='welcome.php'>Proceed</a><br>";

}
else{
if($_POST['username']==$username && $_POST['password']==$password ){	
$_SESSION['username']=$username;
echo "<script>location.href='login.php'</script>";
}
else{
echo "<script>alert('Credentials are Invalid')</script>";
echo "<script>location.href='index.php'</script>";
}
}
?>
