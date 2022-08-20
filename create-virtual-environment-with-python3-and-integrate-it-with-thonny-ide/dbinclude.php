<?php

// db connection

$servername = "localhost";
$username = "albiemer";
$password = "albi3mer";
$commentdbase = "comment_db"; // database name

$conn = new mysqli($servername, $username, $password, $commentdbase);

/////////////////////////////////////////////////

$dbinclude = "create_venv_withpython3andthonny";

$main = "bloggs.php";

$blogscontent = "uploaded_blogs";

//$usersaccountdb = "guest_commentv3";

?>
