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

if (isset($_POST['SIGNUPFNAME']) && isset($_POST['SIGNUPLNAME']) && isset($_POST['SIGNUPEMAIL']) && isset($_POST['SIGNUPWEBSITE'])){

			
			$signupfname = $_POST['SIGNUPFNAME'];

			$signuplname =  $_POST['SIGNUPLNAME'];
			
			$signupemail = $_POST['SIGNUPEMAIL'];
			
			$signupwebsite = $_POST['SIGNUPWEBSITE'];
			
			$date = date("y/m/d");

			$weekdays = date("l");

			$time = date("h:i:sa");
			
}

			if($_POST['PPASSWORD'] === $_POST['CONFIRMPASSWORD']){

				$ppassword = $_POST['PPASSWORD'];

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
									<form action = "signupproc.php" method = "post">
					
										<h3 class = "myformh3modal" >SIGN UP</h3>
						
										<h5 style = "color:red;">Account already exist with the Email, please create account with different Email!.</h5>
										<input class = "regnamemodal" type = "text" name = "SIGNUPFNAME" value = "' . $signupfname . '"placeholder = "First Name..." required><br>
										<input class = "regnamemodal" type = "text" name = "SIGNUPLNAME" value = "' . $signuplname . '" placeholder = "Last Name..." required><br>
										<input class = "regemailmodal" type = "email" name = "SIGNUPEMAIL" placeholder = "Email..." required>
										<input class = "regemailmodal" type = "password" name = "PPASSWORD" placeholder = "Password..." required>
										<input class = "regemailmodal" type = "password" name = "CONFIRMPASSWORD" placeholder = "Confirm Password..." required>
										OPTIONAL:
										<input class = "regemailmodal" type = "text" name = "SIGNUPWEBSITE" value = "' . $signupwebsite . '" placeholder = "Website..." >
						
										<br><br><input class = "myformbuttonmodal" type = "submit" value = "Next" >
									</form>
								</div>
							</div>
			
							<form id  = "Login" action = "signinproc.php" style="display: block" method = "post">
					
							<h3 class = "myformh3" >SIGN IN</h3>
					
							<input class = "signinname" type = "text" name = "LOGINEMAIL" placeholder = "Email" autofocus required><br>
							<input class = "signinpass" type = "password" name = "LOGINPWD" placeholder = "Password" required>
					
							<br><input class = "myformbutton" type = "submit" value = "Next" >
							<br><br><hr></form>';
						
						
							header("Location:$main#SignUp");
						
							$conn->close();
						
						}
					
					} // while
				
				}else{
				
				
					$sql = "INSERT INTO guest_commentv3 (Fname, Lname, Email, Date, Weekdays, Time, Website) VALUES ('$signupfname', '$signuplname', '$signupemail', '$date', '$weekdays', '$time', '$signupwebsite')";

					if ($conn->query($sql)===TRUE){
				
						$_SESSION['SIGNUPERROR'] = 'signuperror';
							
						$_SESSION['SIGNUPERRORFORM'] = '<div id="SignUp" class="modalDialog">
								<div>
									<a href="" title="Close" class="close">X</a>
									<form action = "signupproc.php" method = "post">
					
										<h3 class = "myformh3modal" >Note</h3>
						
										<h5 style = "color:blue;">Please Confirm the Verification From Your Email Account To Activate And Continue Login.</h5>
										<input class = "regnamemodal" type = "text" name = "SIGNUPFNAME" value = "' . $signupfname . '"placeholder = "First Name..." required hidden disable><br>
										<input class = "regnamemodal" type = "text" name = "SIGNUPLNAME" value = "' . $signuplname . '" placeholder = "Last Name..." required hidden disable><br>
										<input class = "regemailmodal" type = "email" name = "SIGNUPEMAIL" placeholder = "Email..." required hidden>
									
										<input class = "regemailmodal" type = "text" name = "SIGNUPWEBSITE" value = "' . $signupwebsite . '" placeholder = "Website..." hidden disable>
						
										<br><br><input class = "myformbuttonmodal" type = "submit" value = "Next" hidden disable>
									</form>
								</div>
							</div>
			
							<form id  = "Login" action = "signinproc.php" style="display: block" method = "post">
					
							<h3 class = "myformh3" >SIGN IN</h3>
					
							<input class = "signinname" type = "text" name = "LOGINEMAIL" placeholder = "Email" autofocus required disable><br>
							<input class = "signinpass" type = "password" name = "LOGINPWD" placeholder = "Password" required disable>
					
							<br><input class = "myformbutton" type = "submit" value = "Next" disable>
							<br><br><hr></form>';
					
						mkdir("Useraccount/" . $signupemail . "/", 0777, true);
						chmod("Useraccount/" . $signupemail . "/", 0777);
						header("Location:$main?createdaccountsuccessful#SignUp");
							
						$conn->close();
					
					}

			
				} //if ($result->num_rows>0){
			
			}else{ //$_POST['PPASSWORD'] === $_POST['CONFIRMPASSWORD']

			
				$_SESSION['SIGNUPERROR'] = 'signuperror';
							
							$_SESSION['SIGNUPERRORFORM'] = '<div id="SignUp" class="modalDialog">
								<div>
									<a href="" title="Close" class="close">X</a>
									<form action = "signupproc.php" method = "post">
					
										<h3 class = "myformh3modal" >SIGN UP</h3>
						
										<h5 style = "color:red;">Password not Match!.</h5>
										<input class = "regnamemodal" type = "text" name = "SIGNUPFNAME" value = "' . $signupfname . '"placeholder = "First Name..." required><br>
										<input class = "regnamemodal" type = "text" name = "SIGNUPLNAME" value = "' . $signuplname . '" placeholder = "Last Name..." required><br>
										<input class = "regemailmodal" type = "email" name = "SIGNUPEMAIL" placeholder = "Email..." required>
										<input class = "regemailmodal" type = "password" name = "PPASSWORD" placeholder = "Password..." required>
										<input class = "regemailmodal" type = "password" name = "CONFIRMPASSWORD" placeholder = "Confirm Password..." required>
										OPTIONAL:
										<input class = "regemailmodal" type = "text" name = "SIGNUPWEBSITE" value = "' . $signupwebsite . '" placeholder = "Website..." >
						
										<br><br><input class = "myformbuttonmodal" type = "submit" value = "Next" >
									</form>
								</div>
							</div>
			
							<form id  = "Login" action = "signinproc.php" style="display: block" method = "post">
					
							<h3 class = "myformh3" >SIGN IN</h3>
					
							<input class = "signinname" type = "text" name = "LOGINEMAIL" placeholder = "Email" autofocus required><br>
							<input class = "signinpass" type = "password" name = "LOGINPWD" placeholder = "Password" required>
					
							<br><input class = "myformbutton" type = "submit" value = "Next" >
							<br><br><hr></form>';
						
						
							header("Location:$main#SignUp");
						
			
			
			} ////$_POST['PPASSWORD'] === $_POST['CONFIRMPASSWORD']
			
$conn->close();

			


?>	


</body>
	
</html>
