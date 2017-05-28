<?php
include("conn.php");

	$email = $_POST["email"];
	$username= $_POST["randomfield"];
	$age = $_POST["age"];
	$password = $_POST['password'];
	
	
		$salt = randomPassword();
		$salt_password = md5($password.$salt);                            
	

		
		
	function randomPassword() {
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		$tmp_salt = "";
			
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$tmp_salt .= $alphabet[$n];
		}
		return $tmp_salt; //turn the array into a string
	}

	$conn->query("INSERT INTO Kundinfo (Inlogg,Losenord,Salt, Email, Age) VALUES ('$username','$salt_password','$salt','$email','$age')");
		
		if(!$conn){
		echo '<script language="javascript">';
		echo 'alert("Registration failed");';
		echo 'window.location.href="register.php";';
		echo '</script>';
		}
		else {
		echo '<script language="javascript">';
		echo 'alert("Registration succeeded");';
		echo 'window.location.href="index.html";';
		echo '</script>';
		//session_start();
		
		}
	?>