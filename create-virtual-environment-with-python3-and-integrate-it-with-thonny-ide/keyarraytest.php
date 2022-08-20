
<!DOCTYPE html>

<html lang = "en-US">

	<head>

	<title>Adeguin.com</title>

	<link rel="shortcut icon" href="adeguin-logo/spokenewsmall.ico">
	
	<link rel="stylesheet" type="text/css" href="adeguin-css/Design.css">
	<script src="adeguin-js/counter_and_toggle.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


	</head>




	<body>
	
<?php
include("dbinclude.php");
//$a1 = 1

$al = [];
    
$kiko1 = 'hello';
$kiko2 = 'fuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuck';
  
//$oha = implode(",", $a1);


						
						//$key = array_search('hello', $al); // to get current key
						//unset($al[$key]);
						//array_push($al, 'jiego', 'ola');
						//print_r($al);
						
						
						
						//$id = $row["Id"];
						//$commentarray = [];
						//$comm = '<br>' . '&emsp; &emsp; &#8627;GUEST:&emsp;<input class = "textareareplycomment" type = "readonly" name = "ERROR" readonly value = "hello" style="width: 350px;"><br>';
						//array_push($commentarray, $comm);
						//implode(",", $commentarray);
						//echo $commentarray;
					
					
						$servername = "localhost";
						$username = "albiemer";
						$password = "albi3mer";
						$commentdbase = "comment_db";
	
						$conn = new mysqli($servername, $username, $password, $commentdbase);
				
						if (!$conn){
		
							echo 'Connect Failed';
		
						}
						
						$read = "SELECT * FROM $dbinclude";
			
						$result = $conn->query($read);
				
						if ($result->num_rows>0){
				
				
							while($row = $result->fetch_assoc()){
							
							$comm = $row["Comment_reply"];
							
							 
							$comm = explode(",", $comm);
							
							//unset($comm[2]);
							
							$comm = array_reverse($comm);
							
							print_r($comm);
							
							}
						}
						
						
			
	?>
	</body>
	
</html>
