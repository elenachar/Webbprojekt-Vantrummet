<?php 
session_start();
	session_destroy();
	//unset($_SESSION['KundID']);
	
	header("Location: index.php");


?>