<?php
session_start();
//unset($_SESSION['LOGINFNAME']);
//unset($_SESSION['LOGINLNAME']);
//unset($_SESSION['LOGINEMAIL']);


session_destroy();
header("Location:../index.php");
?>
