<?php

session_start();

?>
<!DOCTYPE html>

<html lang = "en-US">

	<head>

	</head>




<body>

<?php
include("dbinclude.php");
if (isset($_SESSION['LOGINEMAIL'])){
	
	$fname_s = $_SESSION['LOGINFNAME'];
	$email_s = $_SESSION['LOGINEMAIL'];
				
}

	$servername = "localhost";
	$username = "albiemer";
	$password = "albi3mer";
	$commentdbase = "comment_db";
	
	$conn = new mysqli($servername, $username, $password, $commentdbase);
				
	if (!$conn){
		
		echo 'Connect Failed';
		
		}

	if (isset($_POST['NAME']) && isset($_POST['EMAIL']) && isset($_POST['ID']) ){
		
		$name = $_POST['NAME'];
		$email = $_POST['EMAIL'];
		$id = $_POST['ID'];
		
		$nameidcomment = $name . $id . "comment";
		
		if($email_s == $email){
				
			$select_name = "Select * FROM $dbinclude WHERE Email = '$email' AND Id = '$id' ";
				
			$result = $conn->query($select_name);
		
		
			if ($result->num_rows>0){
			
				while($row = $result->fetch_assoc()){
				
					$name_r = $row["Name"];
					$email_r = $row["Email"];						
					$id_r = $row["Id"];
				
				
				
			
				} //$row = $result->fetch_assoc
					
			} //$result->num_rows>0
		
		} //$email_s == $email
				
				
		if($name == $name_r && $email == $email_r && $id == $id_r){
			
			$delete_comment = "DELETE FROM $dbinclude WHERE Email = '$email' And Id = '$id' ";

			if ($conn->query($delete_comment)===TRUE){
				
				header("Location:bloggs.php#displaycomment");
			}
			
		}else{
			
				echo '<h1>WRONG ENTRY</h1>';
				echo '<h3>Record Not Found to confirming deletion please try again.</h3><br>';
				echo $nameidcomment;
				
				header("Refresh: 3; URL=http://bloggs.php#" . $nameidcomment);
				
									
									
			}
		
				
	} // issets
			
$conn->close();

?>	


</body>
	
</html>
