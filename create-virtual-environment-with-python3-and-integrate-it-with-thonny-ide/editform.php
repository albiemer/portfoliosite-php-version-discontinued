<!DOCTYPE html>

<html lang = "en-US">

	<head>
	<link rel="stylesheet" type="text/css" href="adeguin-css/Design.css">
	<script src="adeguin-js/counter_and_toggle.js"></script>

	</head>




<body>

<?php

	if (isset($_POST['NAME']) && isset($_POST['TEXTAREAREPLYCOMMENT']) && isset($_POST['ID']) ){

			
			$commentreply = $_POST['TEXTAREAREPLYCOMMENT'];

			$commentreplyid =  $_POST['ID'];
			
			$name = $_POST['NAME'];
			
			$nameidcomment = $_POST['NAME'] . $_POST['ID'] . "comment";
			
			$commentreply = str_replace(',','', $commentreply);
	}

			
			echo '<br><a id="displaycomment" href="javascript:toggle();">Add comment</a>
				<div id="toggleText" style="display: block">

				<h1>Editing Comment<h1>
				
				<form id = "comment_form" action = "commentproc.php" method = "post">
				
				<textarea id = "textarea" onKeyDown="limitText(this.form.textarea,this.form.countdown,1000);"   class = "commentbox" cols = "50" name = "COMMENT" placeholder = "Enter your comment here..." required>' . $commentreply . '</textarea><br>
				<font size="1">(Maximum characters: 1000)You have <input readonly type="text" name="countdown" size="3" value="1000"> characters left.</font><br><br>
				<input type = "submit" value = "save"><input type = "submit" value = "cancel">
				
				</form>'
			


?>	


</body>
	
</html>
