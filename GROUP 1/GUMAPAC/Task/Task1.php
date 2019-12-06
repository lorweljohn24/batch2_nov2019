<?php
$mailid  = 'john.smith@gmail.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
echo "<br />";
$mailid2 = 'sweet_six16@mcl.edu.ph';
$user = strstr($mailid2, '@', true);
echo $user."\n";
echo "<br />";
$mailid3 = 'yorme_isk0@yahoo.com.ph';
$user = strstr($mailid3, '@', true);
echo $user."\n";
?>