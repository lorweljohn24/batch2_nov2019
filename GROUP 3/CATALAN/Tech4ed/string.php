<!DOCTYPE html>
<html>
<body>

<?php
$emailid  = 'john.smith@gmail.com';
$username = strstr($emailid, '@', true);
echo $username."\n";
?>
</br>
<?php
$emailid  = 'sweet_six16@mcl.edu.ph';
$username = strstr($emailid, '@', true);
echo $username."\n";
?> 
</br>
<?php
$emailid  = 'yorme_isk0@yahoo.com.ph';
$username = strstr($emailid, '@', true);
echo $username."\n";
?> 


</body>
</html>