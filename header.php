<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Klinik Ajwa</title>
</head>
<body>

	<?php
	//extract($_POST);

	//connect to server
	$connect = mysqli_connect("localhost","root","","klinik_ajwa");

	if(!$connect){
		die('ERROR:'.mysqli_connect_error());
	}

	?>

</body>
</html>