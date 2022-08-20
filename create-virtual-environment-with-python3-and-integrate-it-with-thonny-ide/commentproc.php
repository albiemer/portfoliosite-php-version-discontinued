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
if ('albiemer.porte@yahoo.com' == $_SESSION['LOGINEMAIL']){
	
	$mainusertype = 'Staff';
	
}else{
	
	$mainusertype = 'User';
	
}

if (isset($_POST['MAINCOMMENT']) && isset($_POST['MAINCOMMENTNAME']) && isset($_POST['MAINCOMMENTEMAIL']) && isset($_POST['MAINCOMMENTWEBSITE']) ){

			$maincomment = $_POST['MAINCOMMENT'];
			
			$maincommentname = $_POST['MAINCOMMENTNAME'];

			$maincommentemail =  $_POST['MAINCOMMENTEMAIL'];

			$maincommentwebsite = $_POST['MAINCOMMENTWEBSITE'];
			
			$maincommentmyprofile = $_SESSION['LOGINEMAIL'] . "/" . $_SESSION['LOGINMYPROFILE'];
			

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

				
				if (isset($_SESSION['LOGINEMAIL'])){
				
					$sql = "INSERT INTO $dbinclude (Comment, Name, Email, Usertype, Date, Weekdays, Time, Website, Myprofile) VALUES ('$maincomment', '$maincommentname', '$maincommentemail', '$mainusertype', '$date', '$weekdays', '$time', '$maincommentwebsite', '$maincommentmyprofile')";

					if ($conn->query($sql)===TRUE){

				
						$_SESSION['MAINCOMMENTNAME'] = $maincommentname;
					
						$_SESSION['MAINCOMMENTEMAIL'] = $maincommentemail;
				
						$_SESSION['MAINCOMMENTDATE'] = $date;
					
						$_SESSION['MAINCOMMENTWEBSITE'] = $maincommentwebsite;
					
						header("Location:addformdelete.php");
					
					
					
					}else{


						echo 'insert failed';
					
						header("Location:bloggs.php");


					}
					
				}else{
						
				header("Location:bloggs.php#SignUp");	
				
				}

			
			
$conn->close();

?>	


</body>
	
</html>
