
<?php
	include("conn.php");
	$email = $_POST['email'];
	$password = $_POST['password'];

	//$sql_command = "select * from User where email = '" . $email; $sql_command .= "' AND password = '" . $password . "'";
	$salt = "SELECT salt FROM User WHERE email = '$email'";
	$salt_password = md5($password.$salt);
	if ($salt_password == $password){
		echo '<script language="javascript">';
		echo 'alert("Logged in");';
		echo 'window.location.href="index2.php";';
		echo '</script>';
		}
	else{
		echo '<script language="javascript">';
		echo 'alert("Login failed");';
		echo 'window.location.href="login.php";';
		echo '</script>';
		}

	

	?>
	
	
	