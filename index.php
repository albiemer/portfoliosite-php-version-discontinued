
<?php

session_start();

unset($_SESSION['FAILEDUPLOAD']);

header("Location:home.php");

?>
