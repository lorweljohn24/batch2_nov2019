<?php
$username = "admin";
$password = "admin";
$captcha = "WOTDoD";

session_start();

if (isset($_SESSION['username'])){

echo "<h1>Welcome " . $_SESSION['username'] ."</h1>";
echo "<a href='firstpage.php'>First</a><br>";

}
else{
if($_POST['username']==$username && $_POST['password']==$password && $_POST['captcha']==$captcha){
$_SESSION['username']=$username;
echo "<script>location.href='welcomepage.php'</script>";
}else{
echo "<script>alert('Invalid credentials')</script>";
echo "<script>location.href='index.php'</script>";
}
}
?>
