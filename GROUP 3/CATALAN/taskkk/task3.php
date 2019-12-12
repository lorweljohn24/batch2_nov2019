<?php

$file ='book.pdf;
$filename='book.pdf;
header('Content-type: application/pdf');
header('Content-Disposition: inline; file name"'. $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file)
?>
<!DOCTYPE html>
<html>
<title>Multi Dimensional Array by PHP script</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
|<br/><br/>
<div class="container" style ="width="700px;">
<h3 align="center">Multi Dimensional Array by PHP script</h3>
<br/>
<div class="table-responsive">
</div>
</div>
</body>
</html>