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

}
	
	if (isset($_SESSION['MAINCOMMENTNAME']) && isset($_SESSION['MAINCOMMENTEMAIL']) && isset($_SESSION['MAINCOMMENTDATE']) && isset($_SESSION['MAINCOMMENTWEBSITE']) ){
		
		$name_s = $_SESSION['MAINCOMMENTNAME'];

		$email_s =  $_SESSION['MAINCOMMENTEMAIL'];

		$date_s = $_SESSION['MAINCOMMENTDATE'];

		$website_s = $_SESSION['MAINCOMMENTWEBSITE'];
			
			
		$servername = "localhost";
		$username = "albiemer";
		$password = "albi3mer";
		$commentdbase = "comment_db";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $commentdbase);


		if ($conn->connect_error){

			echo 'Connect failed' . $conn->connect_error;


		}

			
		$read = "SELECT * FROM guest_commentv2 WHERE Name = '$name_s' AND Date = '$date_s' ";
			
		$result = $conn->query($read);
				
		if ($result->num_rows>0){
				
				
			while($row = $result->fetch_assoc()){
					
				$id = $row["Id"];
						
				$nameidcomment = $row["Name"] . $row["Id"] . "comment";
					
				$nameiddelete = $row["Name"] . $row["Id"] . "delete";
						
				$nameidedit = $row["Name"] . $row["Id"] . "edit";
						
				// $nameidreplycomment = $row["Name"] . $row["Id"] . "replycomment";
					
				$delete_form = '<div id="' . $nameiddelete . '" class="modalDialog">
								<div>
						
									<a href="javascript:history.go(-1)" title="Close" class="close">X</a>
				
										<form action = "home/deletecomment.php" method = "post">
					
										<br><br><h3 class = "deleteconfirmlabel" >Are you sure, you want to delete this comment?</h3>
					
										<input class = "regnamemodal" type = "text" name = "NAME" value = "' . $fname_s . '" placeholder = "Name" readonly hidden><br>
										<input class = "regemailmodal" type = "text" name = "EMAIL"  value = "' . $email_s . '" placeholder = "Email" readonly hidden>
										<input type = "text" name = "ID" value = "' . $row["Id"] . '" readonly hidden>
										
										<br><br><input class = "myformbuttonmodal" type = "submit" value = "YES, Delete This Comment" >
			
			
										</form>
								</div>
							</div>' . '<div id="'. $nameidcomment . '" style="display: block">
							<form id = "' . $nameidcomment . '" action = "commentrep.php" method = "post">
							<font size="1">(Maximum characters: 225)You have <input readonly type="text" name="countdown" resize = "none" size="3" value="225"> characters left.</font>
							<textarea id = "replycommentcount" type = "text" name = "COMMENTREPLY" onKeyDown="limitText(this.form.replycommentcount,this.form.countdown,225);" placeholder = "Reply Comment..." style="width: 100%; resize: none; " required></textarea>
							<input type = "text" name = "NAME" value = "' . $row["Name"] . '" readonly hidden>
							<input type = "text" name = "EMAIL" value = "' . $email_s . '" readonly hidden>
							<input type = "text" name = "ID" value  = "' . $row["Id"] . '" readonly hidden>
							<input type = "submit" value = "Post Reply" > 
							</div>
							</form><br>' . 
							
							
							
							'<div id="' . $nameidedit . '" class="modalDialogedit"><br><hr><br>&nbsp&nbsp' . $row["Name"] . '<hr><section class = "comment_head">' . $row["Date"] . '<br>' . $row["Weekdays"] . '<br>' . $row["Time"] . '</section>
							<a href="javascript:history.go(-1)" title="Close" class="close">X</a>
							<form action = "editcomment.php" method = "post">
							<textarea id = "comment_content" class = "comment_content_edit" name = "TEXTAREACOMMENT" resize = "none" rows = "12" cols = "10" required>' . $row["Comment"] . '</textarea>
							<input type = "text" name = "ID" value  = "' . $row["Id"] . '" readonly hidden>
							<input type = "text" name = "NAME" value  = "' . $row["Name"] . '" readonly hidden>
							<input type = "text" name = "EMAIL" value  = "' . $email_s . '" readonly hidden>
							<button id = "clkedit" class = "reply_to_albiemer" >SAVE</button>
							</form></div>';


				
					}
				
				
				}







								$update_record = "UPDATE guest_commentv2 SET Delete_content = '$delete_form' WHERE Id = '$id' ";

								if ($conn->query($update_record)===TRUE) {
				
									
				
									header("Location:../index.php.php#" . $nameidcomment);
									
				
								} else {

													

									echo 'Error updating record: ' . $conn->connect_error;
									
									
								}



$conn->close();

}			

?>	


</body>
	
</html>
