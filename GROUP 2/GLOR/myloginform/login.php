<?php
	ob_start();
	session_start();
?>

<html lang = "en">
   
   <head>
      <title> Login </title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
	  
	    table{
		   margin-top: 150px;
		   border:0px;
		   background-color:#FAB7BD;
	    }
		td{
			border:0px;
			padding: 10px;
		}
		th{
			border-bottom: 1px solid;
			color: white;
			background-color:#58E4FA;
		 }
		 
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color:#58E4FA;
			background: url(giphy.gif) no-repeat;
			background-size: cover;
         }
		 
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #58E4FA;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: bold;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#58E4FA;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#58E4FA;
         }
		 
         h2{
            text-align: center;
            color: #58E4FA;
         }
      </style>
      
   </head>
	
   <body>
      
      <h2>My Login Form</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  
               }else {
                  $msg = "wrong Password <a href='logout.php' >Please Try Again</a>";
               }
            }
         ?>
      </div>
      
      <div class = "container">
      
         <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "Enter your username" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "Enter your password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">login</button>
         </form>
			
         <a href = "logout.php" tite = "Logout">
         
      </div> 
      
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

    if($_POST['img']==$_POST['hidden'])

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

  

<input type="hidden" value="<?php echo $captcha; ?>" name="hidden"/>
<br/>
		 
		 
		 
		 
		 
		 
		 </table>
	 </form>
	  
	  
	  
   </body>
</html>