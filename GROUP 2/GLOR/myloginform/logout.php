<html>
<h1>  <br> Logout  </br></h1>
<body>

<div class="loginbox">

<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Watzupp';
   header('Refresh: 2; URL = login.php');
   
?>
