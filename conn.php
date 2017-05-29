<?php
session_start();
	$servername = "dbtrain.im.uu.se";
	$username = "dbtrain_575";
	$password = "dksdpt";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $username);
	
	//var_dump($_SESSION['KundID']);

header("Location: index.php")

?>