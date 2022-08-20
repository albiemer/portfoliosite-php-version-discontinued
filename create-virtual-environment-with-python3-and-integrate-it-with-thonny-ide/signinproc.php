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

if (isset($_POST['LOGINEMAIL']) && isset($_POST['LOGINPWD']) ){

			$pwd = $_POST['LOGINPWD'];
			
			$email = $_POST['LOGINEMAIL'];
			
			//$nameidcomment = $_POST['NAME'] . $_POST['ID'] . "comment";

			$servername = "localhost";
			$username = "albiemer";
			$password = "albi3mer";
			$commentdbase = "comment_db";
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $commentdbase);


			if ($conn->connect_error){


			echo 'Connect failed' . $conn->connect_error;


			}
			
			$read = "SELECT * FROM User_account WHERE Email = '$email' AND Password = '$pwd' ";
			
			$result = $conn->query($read);
				
				if ($result->num_rows>0){
				
				
					while($row = $result->fetch_assoc()){
					
						if($row["Email"] == $email && $row["Password"] == $pwd){
							
							
							$_SESSION['LOGINFNAME'] = $row["Fname"];
							$_SESSION['LOGINLNAME'] = $row["Lname"];
							$_SESSION['LOGINEMAIL'] = $row["Email"];
							$_SESSION['LOGINID'] = 	$row["Id"];
							$_SESSION['LOGINWEBSITE'] = $row["Website"];
							$_SESSION['LOGINMYPROFILE'] = $row["Myprofile"];
							
							
							header("Location:$main");
						} 
					
					
					}
					
				}else{
					
					
						$_SESSION['SIGNUPERROR'] = 'signuperror';
							
						$_SESSION['SIGNUPERRORFORM'] = '<div id="SignUp" class="modalDialog">
							<div>
								<a href="" title="Close" class="close">X</a>
								<form action = "signupproc.php" method = "post">
					
									<h3 class = "myformh3modal" >Note</h3>
						
									<h5 style = "color:blue;">Login Failed, Account Does Not Exist. Please Register First To Have An Account</h5>
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
						
						header("Location:$main?loginfailed#SignUp");
					
					
					}

}

?>	


</body>
	
</html>
