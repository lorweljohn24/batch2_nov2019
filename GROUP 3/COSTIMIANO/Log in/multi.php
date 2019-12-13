<?php

    $file ='sample.pdf';
    $filename ='sample.pdf';
    header('Content-type:application/pdf');
    header('Content-Disposition: inline; filename"'. $filename . '"');    
    header('Content-Transfer-Encoding: binary');
    header ('Accept-Ranges: bytes');
    @readfile($file);
?>

<!DOCTYPE html>
<html>
<head>
      
      <title> Creating Multidimensional Array by exporting pdf book text into PHP script</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>  
<body>
     <br/> <br/>
     <div class ="container" style="width: 700px;">
         <h3 align="center">Creating Multidimensional Array by exporting pdf book text into a PHP script</h3>
         <br/>
         <div class="table-responsive">
                
     
      </div>

    </div>



</body>





</html>
