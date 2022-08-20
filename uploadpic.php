<?php

	session_start();

?>
<?php
include("dbinclude.php");
$msg = ""; 

// check if the user has clicked the button "UPLOAD" 

if (isset($_SESSION['LOGINEMAIL'])){
	$email_s = $_SESSION['LOGINEMAIL'];
	$id_s = $_SESSION['LOGINID'];
	
	if (isset($_POST['uploadfile'])) {

		$filename = $_FILES["choosefile"]["name"];
		
		$tempname = $_FILES["choosefile"]["tmp_name"];    

		//$id_file = $id_s;

		$folder = 'Useraccount/' . $email_s . "/" . $id_s;

		// connect with the database

		$servername = "localhost";
		$username = "albiemer";
		$password = "albi3mer";
		$commentdbase = "comment_db";
	
		$conn = new mysqli($servername, $username, $password, $commentdbase);
		
		if ($conn->connect_error){
			echo 'Connect failed' . $conn->connect_error;
		}

		// query to insert the submitted data
	
		//$sql = "INSERT INTO $dbv3 (Myprofile) VALUES ('$filename')";
		$sql = "UPDATE $dbuser SET Myprofile = '$id_s' WHERE Id = '$id_s' ";
		// function to execute above query

			if ($conn->query($sql)===TRUE){      
				
				list($width, $height) = getimagesize($tempname);
				
				if ($width >= $height){
				
					// Add the image to the "image" folder"

					if (move_uploaded_file($tempname, $folder)) {

						$_SESSION['LOGINMYPROFILE'] = $id_s;
							
							unset($_SESSION['FAILEDUPLOAD']);
							$msg = "?uploadedsuccessfully";
							header("Location: home.php" . $msg);
				

					}else{

						$msg = "Failed to upload image";

					}
					
				}else{
					
					$_SESSION['FAILEDUPLOAD'] = '<div class="alert"><span class="closenote" onclick="this.parentElement.style.display=\'none\';">&times;</span>Please choose image that has larger width than height...</div>';
					
					$msg = "?uploadedfailed";
					header("Location: home.php" . $msg);
					
				} // widz hyts

			}else{
			
				echo 'insert failed';
			
			}
			
	}else{
		
		header("Location: home.php?nofileselected");
		
	}//post ends
	
	
}else{
	
	
header("Location: home.php?failedupload");
	
}// session ends

$conn->close();

?>
