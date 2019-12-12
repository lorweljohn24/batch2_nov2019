<?php
if(isset($_POST['check']))
{
echo "Form Submitted<br>";
echo "<script>location.href='indexs.php'</script>";
}

$rand=substr(rand(),0,4); 

?>
<style type="text/css">
.captcha
{
width:60px; 
background-image:url(cat.png); 
font-size:20px; 
border: 1px solid;
}
.color
{
	color:#FF0000;
}
body{
	background-image:url("back.gif");
	background-size:cover;
}


</style>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css.css">
</head>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>" name="form1">
<table width="400px" align="center" bgcolor="#EBEBEB">
<tr>
<td>Enter Captcha</td>
<td><input type="text" name="chk" id="chk">
<span id="error" class="color"></span>
</td>
</tr>
<tr>
<td>&nbsp;</td>

<td><input type="text" value="<?=$rand?>" id="ran" readonly="readonly" class="captcha">
<input type="button" value="Refresh" onclick="captch()" required class="form-control" />

<input type="submit" name="check" onclick="return validation();" required class="form-control">
</td>
</table>
</form>




<script type="text/javascript">



function captch() {
    var x = document.getElementById("ran")
    x.value = Math.floor((Math.random() * 10000) + 1);
}




function validation()
{

if(document.form1.name.value=="")
{
document.getElementById("name").innerHTML="Enter your Name!";
document.form1.name.focus();
return false;
}

if(document.form1.chk.value=="")
{
document.getElementById("error").innerHTML="Enter Captcha!";
document.form1.chk.focus();
return false;
}


if(document.form1.ran.value!=document.form1.chk.value)
{
document.getElementById("error").innerHTML="Captcha Not Matched!";
document.form1.chk.focus();
return false;
}

return true;
}



</script>
