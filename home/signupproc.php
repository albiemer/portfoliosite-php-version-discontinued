<?php

session_start();

?>
<!DOCTYPE html>

<html lang = "en-US">

	<head>
		
	</head>




<body>

<?php

if (isset($_POST['SIGNUPFNAME']) && isset($_POST['SIGNUPLNAME']) && isset($_POST['SIGNUPEMAIL']) && isset($_POST['SIGNUPWEBSITE'])){

			
			$signupfname = $_POST['SIGNUPFNAME'];

			$signuplname =  $_POST['SIGNUPLNAME'];
			
			$signupemail = $_POST['SIGNUPEMAIL'];
			
			$signupwebsite = $_POST['SIGNUPWEBSITE'];
			
			$date = date("y/m/d");

			$weekdays = date("l");

			$time = date("h:i:sa");
			
}

			$servername = "localhost";
			$username = "albiemer";
			$password = "albi3mer";
			$commentdbase = "comment_db";

			
			$conn = new mysqli($servername, $username, $password, $commentdbase);


			if ($conn->connect_error){


				echo 'Connect failed' . $conn->connect_error;


			}
			
			$read = "SELECT * FROM guest_commentv3 WHERE Email = '$signupemail' ";
			
			$result = $conn->query($read);
				
			if ($result->num_rows>0){
				
				
				while($row = $result->fetch_assoc()){
					
					if ($row["Email"] == $signupemail){
						
						$_SESSION['SIGNUPERROR'] = 'signuperror';
							
						$_SESSION['SIGNUPERRORFORM'] = '<div id="SignUp" class="modalDialog">
							<div>
								<a href="" title="Close" class="close">X</a>
								<form action = "/home/signupproc.php" method = "post">
					
									<h3 class = "myformh3modal" >SIGN UP</h3>
						
									<h5 style = "color:red;">Account already exist with the Email, please create account with different Email!.</h5>
									<input class = "regnamemodal" type = "text" name = "SIGNUPFNAME" placeholder = "First Name..." required><br>
									<input class = "regnamemodal" type = "text" name = "SIGNUPLNAME" placeholder = "Last Name..." required><br>
									<input class = "regemailmodal" type = "email" name = "SIGNUPEMAIL" placeholder = "Email..." required>
									OPTIONAL:
									<input class = "regemailmodal" type = "text" name = "SIGNUPWEBSITE" placeholder = "Website..." >
						
									<br><br><input class = "myformbuttonmodal" type = "submit" value = "Next" >
								</form>
							</div>
						</div>';
						
						header("Location:../index.php#SignUp");
						
						$conn->close();
						
					}
					
				} // while
				
			}else{
				
				
				$sql = "INSERT INTO guest_commentv3 (Fname, Lname, Email, Date, Weekdays, Time, Website) VALUES ('$signupfname', '$signuplname', '$signupemail', '$date', '$weekdays', '$time', '$signupwebsite')";

				if ($conn->query($sql)===TRUE){
				
				
					header("Location:../index.php");
							
					$conn->close();
					
				}

			
			} //if ($result->num_rows>0){

			
			
$conn->close();

			


?>	


</body>
	
</html>
