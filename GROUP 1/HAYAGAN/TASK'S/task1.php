<?php
$user_name  ='john.smith@gmail.com' ; 
$user_name2  ='sweet_six16@mcl.edu.ph' ; 
$user_name3  ='yorme.isk0@yahoo.com.ph' ;
$user = strstr($user_name, '@', true) ;
echo $user."\n";
echo "<br />";
$user = strstr($user_name2, '@', true) ;
echo $user."\n";
echo "<br />";
$user = strstr($user_name3, '@', true) ;
echo $user."\n";
?>