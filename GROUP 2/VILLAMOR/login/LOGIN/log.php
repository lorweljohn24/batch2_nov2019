<!DOCTYPE html>
<html>
<head>
     <title></title>
<style type="text/css">
table{
	
	 margin-top: 50px;
	 border: 2px solid;
	 background-color:#mmm;
}

td{
	 border: 0px;
     padding: 20px;

}
th{	 
     border-bottom: 20px solid;
	 background-color:#ddd; 
}
body{
	background: url(123.jpg) no-repeat;
	background-size: cover;
}
</style>
</head>
<body>

 <form action="welcome.php" method="post">
     <table align="center">
	     <tr>
	         <tr colspan="2"><h2 align="center">Login</h2>
		 </tr>
		 <tr>
		     <td>Username:</td>
			 <td><input type="text" name="uname"></td>
		 </tr>
		 <tr>
		     <td>Password:</td>
			 <td><input type="password" name="pwd"></td>
		 </tr>
		 <tr>
		     <td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
	     </tr>
	 </table>
</form>
<form>			 
		 
<table  border="0" align="center">

    <tr>

      <td width="250"> Validation code:</td>

      <td width="162">

<?php

$arr= array_merge(range(0,9),range("A","Z"));

//print_r($arr);

for($i=1;$i<=5;$i++)

{
	$ch = $arr[array_rand($arr)];

	@$captcha=$captcha.$ch;

	@$fc=$fc.$ch.",";

}

//echo $fc."<br>";
$nar = explode(",",$fc);

for($i=0;$i<5;$i++)

{

echo $nar[$i];
//echo "<img src='$nar[$i].GIF'/>";

}

if(isset($_POST['match']))

{

    if($_POST['img']==$_POST['hid'])

     {

      echo  "<br/><font color='blue'>security code matched</font>";

     }

    else

    {

	echo "<br/><font color='red'> try again</font>";

    }

}

?>

    <tr>

        <td>Enter the  above code here :</td>

       <td> <input name="img" type="text">

        </td>

    </tr>

    <tr>

      <td colspan="2" align="center">

	  <input name="match" type="submit"  value="Submit"></td>

    </tr>

  

<input type="hidden" value="<?php echo $captcha; ?>" name="hid"/>
<br/>
		 
		 
		 
		 
		 
		 
		 </table>
	 </form>
