<!DOCTYPE html>
<html>
<head>
     <title></title>
<style type="text/css">
table{
	
	 margin-top: 50px;
	 border: 10px solid;
	 background-color: #BE7B3B;
}

td{
	 border: 20px;
     padding: 20px;

}
th{	 
     border-bottom: 2px solid;
	 background-color: #fff;
}

</style>
</head>
<body>

 <form action="hello.php" method="post">
     <table align="center">
	     <tr>
	         <tr colspan="2"><h2 align="center">Login to Continue</h2>
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
		     <td align="left" colspan="100"><input type="submit" name="Login" value="Login"></td>
	     </tr>
	 </table>
</form>