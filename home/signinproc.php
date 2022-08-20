<?php

session_start();

?>
<!DOCTYPE html>

<html lang = "en-US">

	<head>
		
	</head>




<body>

<?php

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
			
			$read = "SELECT * FROM guest_commentv3 WHERE Email = '$email' AND Password = '$pwd' ";
			
			$result = $conn->query($read);
				
				if ($result->num_rows>0){
				
				
					while($row = $result->fetch_assoc()){
					
						if($row["Email"] == $email && $row["Password"] == $pwd){
							
							
							$_SESSION['LOGINFNAME'] = $row["Fname"];
							$_SESSION['LOGINLNAME'] = $row["Lname"];
							$_SESSION['LOGINEMAIL'] = $row["Email"];
							$_SESSION['LOGINWEBSITE'] = $row["Website"];
							
						
							header("Location:../index.php");
						} 
					
					
					}
					
				}

}

?>	


</body>
	
</html>
