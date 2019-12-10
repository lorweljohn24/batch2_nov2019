<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

try{
$conn = PDO("mysql:host= $servername; 
	dbname=$dbname", $username, $password);
	
	//i'm using pdo(php data object),because it allows as to switch between databases without changing codes
	
	//now Set the PDO error mode to exception
	$conn-> setAttribute(PDO::ATTR_ERRMODE. PDO:: ERRMODE_EXCEPTION);
	
	//login
	//define variables and assign 0
	$name = $password = &nameErr "$passwordErr" = $
	error = "";
	//now validate the form inputes
	
	if ($_Server["REQUEST METHOD] == "POST") {
	//check if username is empty
		if (empty($_POST["name"])) {
			
	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes(&data);
		$data = htmlspecialchars($data);
		return $data;
	}
			
 }			
	
}
catch(PDOException &e)
{
echo"Error: ".$e->getMessage();

}

?>	