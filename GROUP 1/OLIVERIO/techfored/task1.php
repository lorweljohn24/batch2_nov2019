<?php
$mailid  = 'john.smith@gmail.com';
$mailid1  = 'sweet_six16@mcl.edu.ph';
$mailid2  = 'yorme_isk0@yahoo.com.ph';

$user = strstr($mailid, '@', true);
echo $user."\n";
echo "<br />";
$user= strstr($mailid1, '@', true);
echo $user."\n";
echo "<br />";
$user = strstr($mailid2, '@', true);
echo $user."\n";
?>