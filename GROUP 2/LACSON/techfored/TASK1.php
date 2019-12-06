<?php
$mailid  = 'john.smith@gmail.com';

$mailid5  = 'sweet_six16@mcl.edu.ph';

$mailid6  = 'yorme_isk0@yahoo.com.ph';

$user = strstr($mailid, '@', true);

echo $user."\n";

$user = strstr($mailid5, '@', true);

echo $user."\n";

$user = strstr($mailid6, '@', true);

echo $user."\n";
?>