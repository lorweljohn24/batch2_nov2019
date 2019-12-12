<?php 
	session_start();
	
	echo '<h1 class = "text-center">Welcome Enjoy Our Website!</h1>';

?>
<a href = "logout.php">Log out</a>

<?php 
	session_start();
	$file ='cielo.pdf';
    echo '<h1 class="text-center" >WELCOME!</h1>';
    $filename ='cielo.pdf';
    header('Content-type:application/pdf');
    header('Content-Disposition: inline; filename"'. $filename . '"');    
    header('Content-Transfer-Encoding: binary');
    header ('Accept-Ranges: bytes');
    @readfile($file);
	
	$path = $_SERVER['REQUEST_URI'];
 $paths = explode('/', $path);
 $lastIndex = count($paths) - 1;
 $fileName = $paths[$lastIndex]; 

 $file = basename($path);

 $filepath = $path;

 if (file_exists($file)) {
     header( 'Location: http://localhost/tech4ed/dimensional/multi.php'.$path ) ;
     header("Content-type: application/pdf");
     header("Content-Disposition: attachment; filename=".$file);
     readfile($file);

 }else{
     echo "file not found using path ".$path." and file is ".$file;
 }
  
 ?>




		 
		 
		 
		 
		 