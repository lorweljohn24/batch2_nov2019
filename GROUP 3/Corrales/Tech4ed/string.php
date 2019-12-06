<!DOCTYPE html>
<html>
<body>

<?php
$mailid  = 'john.smith@gmail.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
?>
<br/>
<?php
$mailid  = 'sweet_six16@mcl.edu.ph';
$user = strstr($mailid, '@', true);
echo $user."\n";
?>
<br/>
<?php
$mailid  = 'yorme_isk0@yahoo.com.ph';
$user = strstr($mailid, '@', true);
echo $user."\n";
?>



</body>
</html>