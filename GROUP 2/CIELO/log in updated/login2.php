<!DOCTYPE html>
<html>
<head>
  <title>cielo</title>
 <center><h1>LOG IN TO CONTINUE</h1></center>
 <style type="text/css">
 table {
 
      margin-top:50px;
	  border: 1px solid;
	  background-color: transparent;
	  
}

td { 
    border:0px;
	padding: 10px;
}
th {
    border-bottom: 1px solid;
	background-color:transparent;
}

body {
	 margin:0;
	 padding:0;
	 font-family:century gothic;
	 background:url(9.gif) no-repeat;
	 background-size:cover;
	 
}

</style>
</head>
<body>

<form action="function.php" method="post">
  <table align="center">
     <tr>
	     <th colspan="2"> <h2 align="center">Log in</h2></h2>
		 </tr>
		 <tr>
		     <td>Username:</td>
			 <td><input type="text" name="uname"></td>
			 </tr>
			 <tr>
			    <td>Password:</td>
				<td><input type="password" name="pwd"></td>
				</tr>
				
								
				
				
	<form>			 
		 
<table  border="0" align="center">

    <tr>

      <td width="230"> Validation code:</td>

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
	 
	 
	 
	 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 