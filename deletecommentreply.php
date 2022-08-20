<?php

session_start();

?>
<!DOCTYPE html>

<html lang = "en-US">

	<head>

	</head>




	<body>
	
<?php
include(dbinclude.php);
if (isset($_SESSION['LOGINEMAIL'])){

	$fname_s = $_SESSION['LOGINFNAME'];
	$email_s = $_SESSION['LOGINEMAIL'];



	if (isset($_POST['EMAIL']) && isset($_POST['ID']) && isset($_POST['TEXTAREAREPLYCOMMENT']) ){

		$commentreply = $_POST['TEXTAREAREPLYCOMMENT'];
			
		$email = $_POST['EMAIL'];

		$id =  $_POST['ID'];
			
		$nameidcomment = $fname_s . $id . "comment";
			
		$nameidreplyedit = $fname_s . $id . "replyedit";

		//$date = date("y/m/d");

		//$weekdays = date("l");

		//$time = date("h:i:sa");

		$tosearch = '<div style="background-color: #F6F5E1; padding: 5px; border-left:1px solid #000; height: auto; margin-left: 3%;">
					&emsp;[' . $fname_s . ']<br><img class = "comment_reply_image" src="images/me.jpg" alt="Trusted online service review" style="width:50px;height:50px; margin-left: 15px; margin-right: 15px; " align="left" >
					<form name="editcommentreplyform" method = "post" action = "editreplysenddata.php">
							<textarea id = "textareaedit" class = "textareareplycomment" name = "TEXTAREAREPLYCOMMENT" readonly style="width: 80%; height: 100px; ">' . $commentreply . '</textarea>
							<input type = "text" name = "EMAIL" value = "' . $email_s . '" readonly hidden>
							<input type = "text" name = "ID" value  = "' . $id . '" readonly hidden>
							<br>&emsp;<input id = "edit" type = "submit" class = "clkedit" value = "Edit" > | <input type = "submit" class = "clkdel" formaction="deletecommentreply.php" value = "Delete" >
					</form></div><br>';

			
		} // isset
			
			if ($email_s == $email){
			
				$servername = "localhost";
				$username = "albiemer";
				$password = "albi3mer";
				$commentdbase = "comment_db";

			
				$conn = new mysqli($servername, $username, $password, $commentdbase);


				if ($conn->connect_error){


					echo 'Connect failed' . $conn->connect_error;

	
				}

				$sql = "Select * FROM $dbinclude WHERE Id = '$id' ";
					
				$result = $conn->query($sql);
				
				if ($result->num_rows>0){
				
				
					while($row = $result->fetch_assoc()){
							
						$nameidcomment = $row["Name"] . $id . "comment";	
						
						$de = $row["Comment_reply"]; // to get the value
						
						
						//echo $de;
						
						//echo "<br>---------------------------<br>";
						
						$la = (explode(',', $de)); // to convert array to string
						
						
						$key = array_search($tosearch, $la); // to get current key
						
						//echo $key; //. ':' . $de . '<br';
						
						unset($la[$key]);
						
						$la = (implode(',', $la));
						
						$update_record = "UPDATE $dbinclude SET Comment_reply = '" . $la . "' WHERE Id = '$id' ";

						if ($conn->query($update_record)===TRUE) {
				
							header("Location:bloggs.php#" . $nameidcomment);
									
									
				
						} else {

							echo 'Error updating record: ' . $conn->connect_error;
									

						} //$conn->query($update_record
						
						
					} //$row = $result->fetch_assoc
						
						
						
					
					
				}else{


					echo $email . " " . $email_s . " " . $row["Email"];
					
					//header("Location:home.php");
					
				}
			
			}else{
				
			$_SESSION['SUBDELETE'] = 'todeletequery';
				
				header("Location:bloggs.php#thisisnotyoursubcommentdelete");
				
				} //$email_s == $email
				
}else{
	
	header("Location:bloggs.php#SignUp");	
	
} // isset($_SESSION['LOGINEMAIL']				

?>
</body>
	
</html>
