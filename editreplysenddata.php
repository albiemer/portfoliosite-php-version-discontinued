<?php

session_start();

?>
<!DOCTYPE html>

<html lang = "en-US">

	<head>
		
	</head>




<body>

<?php

if (isset($_SESSION['LOGINEMAIL'])){

	$fname_s = $_SESSION['LOGINFNAME'];
	$email_s = $_SESSION['LOGINEMAIL'];

	if (isset($_POST['EMAIL']) && isset($_POST['TEXTAREAREPLYCOMMENT']) && isset($_POST['ID']) ){

		$commentreplyedit = $_POST['TEXTAREAREPLYCOMMENT'];

		$id =  $_POST['ID'];
			
		$email = $_POST['EMAIL'];
			
		if($email_s == $email){
			
			$_SESSION['NAME'] = $fname_s;
			
			$_SESSION['ID'] = $id;
			
			$_SESSION['TEXTAREAREPLYCOMMENT'] = $commentreplyedit;
			
			$replyedit = $fname_s . $ses_id . "comment";
			
			$nameidcomment = $fname_s . $id . "comment";
			
			header("Location:bloggs.php#replyedit");
			
			exit();
				
		}else{
				
				
			$_SESSION['SUBEDIT'] = 'todeletequery';
				
			header("Location:bloggs.php#thisisnotyoursubcommentedit");
				
		}
			


	}else{
	
	
		echo 'error 1';	
	
	}

}else{
		
	header("Location:bloggs.php#SignUp");
	
} //

?>	


</body>
	
</html>
