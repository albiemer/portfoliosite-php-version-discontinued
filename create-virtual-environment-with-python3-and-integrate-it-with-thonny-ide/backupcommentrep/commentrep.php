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
	$profile_s = $_SESSION['LOGINMYPROFILE'];


	if (isset($_POST['NAME']) && isset($_POST['COMMENTREPLY']) && isset($_POST['ID']) && isset($_POST['EMAIL']) ){
		
		$commentreply = $_POST['COMMENTREPLY'];

		$commentreplyid =  $_POST['ID'];
			
		$email = $_POST['EMAIL'];
			
		$name = $_POST['NAME'];
			
		$nameidcomment = $_POST['NAME'] . $_POST['ID'] . "comment";
			
		$commentreply = str_replace(',','', $commentreply);
		$commentreply = str_replace('\'','', $commentreply);
		$commentreply = str_replace('fucker','*****', $commentreply);
		
		
}
	
		$servername = "localhost";
		$username = "albiemer";
		$password = "albi3mer";
		$commentdbase = "comment_db";
			
		// Create connection
		$conn = new mysqli($servername, $username, $password, $commentdbase);


		if ($conn->connect_error){
			
			echo 'Connect failed' . $conn->connect_error;


			}
			
		$read = "SELECT * FROM $dbinclude WHERE Email = '$email' AND Id = '$commentreplyid' ";
			
		$result = $conn->query($read);
				
		if ($result->num_rows>0){
				
			while($row = $result->fetch_assoc()){
					
				$id = $row["Id"];
					
				$commentarray = [];
					
				$commentarray[] = $row["Comment_reply"];
					
				$nameidreplyedit = $name . $id . "replyedit";
					
					
				$comm = '<div style="background-color: #F6F5E1; padding: 5px; border-left:1px solid #000; height: auto; margin-left: 3%;">
					&emsp;[' . $fname_s . ']<br><img class = "comment_reply_image" src="' . "../Useraccount/" . $email_s . "/" .  $profile_s . '" alt="Trusted online service review" style="width:50px;height:50px; margin-left: 15px; margin-right: 15px; " align="left" >
					<form name="editcommentreplyform" method = "post" action = "editreplysenddata.php">
							<textarea id = "textareaedit" class = "textareareplycomment" name = "TEXTAREAREPLYCOMMENT" readonly style="width: 80%; height: 100px; ">' . $commentreply . '</textarea>
							<input type = "text" name = "EMAIL" value = "' . $email_s . '" readonly hidden>
							<input type = "text" name = "ID" value  = "' . $id . '" readonly hidden>
							<br>&emsp;<input id = "edit" type = "submit" class = "clkedit" value = "Edit" > | <input type = "submit" class = "clkdel" formaction="deletecommentreply.php" value = "Delete" >
					</form></div><br>';
					
				// unshift is insert new $comm
					
				array_unshift($commentarray, $comm);
					
					
				$commentarray = implode(',', $commentarray);
					
			}
					
		}
			
			
			
		$update_record = "UPDATE $dbinclude SET Comment_reply = '" . $commentarray . "' WHERE Id = '$commentreplyid' ";

		if ($conn->query($update_record)===TRUE) {
			
				
			header("Location:bloggs.php#" . $nameidcomment);
									
									
				
		} else {

			echo 'Error updating record: ' . $conn->connect_error;
									

		}

}else{
	
	
	header("Location:bloggs.php#SignUp");


}

$conn->close();
?>	


</body>
	
</html>
