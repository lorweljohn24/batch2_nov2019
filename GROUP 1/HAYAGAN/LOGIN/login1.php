<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<style>
body{
	background-image:url('story.gif');
	background-size:cover;
	margin:0;
	padding: 100px;
}
table{
	margin-top: 150px;
	border: 1px solid:;
	background-color: #eee;
}
td{
	border:0px;
	padding: 10px;
	
}

th{
	border-bottom: 1px solid;
	background-color: #ddd;
}
</style>
<body>
<form action="welcome1.php" method="POST" style="max-width: 450px; margin: auto;>
	<table align="center">
		<tr>
			<th colspan="2"><h2 align="center">LOG IN💔 </h2></th>
		</tr>
		</br>
		<tr>
			<td><input class="form-control" type="text" name="uname" placeholder="Username🔒"></td>
		</tr>
		</br>
		<tr>		
			<td><input class="form-control" type="password" name="pwd" placeholder="Password🔑‍"></td>
		</tr>	
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
        <td align="right" colspan="2"><input class="form-control" type="text" placeholder="Enter the  above code here"></td>
    </tr>
</br>
		<tr>
			<td align="right" colspan="2"><input class="form-control" type="submit" value="LOGIN😑"></td>
		</tr>
<input type="hidden" value="<?php echo $captcha; ?>" name="hid"/>


		 

		 
		 
		 
		 
		 </table>
</form>

</body>
</html>






	
