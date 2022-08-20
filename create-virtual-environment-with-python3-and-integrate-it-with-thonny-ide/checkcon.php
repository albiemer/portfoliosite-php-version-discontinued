<!DOCTYPE html>

	<html lang = "en-US">

	<head>
	
	<link rel="shortcut icon" href="adeguin-logo/spokenewsmall.ico">
	
	<link rel="stylesheet" type="text/css" href="adeguin-css/Design.css">
	<script src="adeguin-js/counter_and_toggle.js"></script>

	
	
	</head>
	
	<title>Adeguin.com</title>

	<link rel="shortcut icon" href="adeguin-logo/spokenewsmall.ico">
	
	<script src="adeguin-js/counter_and_toggle.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


	</head>




	<body>
	<?php
	
	$tosearch = 100;
	
	$ar = array(0 => 100, 1 => "red");
	
	$key = array_search($tosearch, $ar);
	
	$ar[$key] = 200;
	
	echo $key;
	
	
	?>
	
	</body>
	
</html>
