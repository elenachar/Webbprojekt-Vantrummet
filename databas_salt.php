<?php
include once("conn.php");
	$email = $_POST["email"];
	$username= $_POST["randomfield"];
	$age = $_POST["age"];
	$password = $_POST['password'];
	$md5_password = md5($password);
	

	// Spara $md5_password i databasen
	
	var_dump(randomPassword());
		
		
	
	$salt_password = md5($password.$salt);
	$password = $_POST['password'];
	

function randomPassword() {
	$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	$salt = "";
		
	for ($i = 0; $i < 8; $i++) {
		$n = rand(0, $alphaLength);
		$salt .= $alphabet[$n];
	}
	return $salt; //turn the array into a string
}
	$conn->query("INSERT INTO Kundinfo (inlogg,losenord, email, age) VALUES ('$username','$salt_password','$email', '$age')");
	
	header('Location: index.html');
	?>