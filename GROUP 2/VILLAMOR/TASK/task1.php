<?php
$mailid  ='john.smith@gmail.com' ; 
$mailid2  ='sweet_six16@mcl.edu.ph' ; 
$mailid3  ='yorme.isk0@yahoo.com.ph' ;
$user = strstr($mailid, '@', true) ;
echo $user."\n";
echo "<br />";
$user = strstr($mailid2, '@', true) ;
echo $user."\n";
echo "<br />";
$user = strstr($mailid3, '@', true) ;
echo $user."\n";
?>