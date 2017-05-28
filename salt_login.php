
<?php
	include("conn.php");
	$email = $_POST['email'];
	$password = $_POST['password'];
	$db_password = ("SELECT Losenord FROM Kundinfo WHERE Email = '$email'");    
	//$salt_db_password = 
	$salt = "SELECT Salt FROM Kundinfo WHERE Email = '$email'";  
	$salt_password = md5($password.$salt);
	
	
	//echo($email); 
	//echo($password);
	echo ($db_password); 
	echo($salt); 
	//echo($salt_password);

	

	if ($salt_password == $db_password){
		echo '<script language="javascript">';
		echo 'alert("Logged in");';
		echo 'window.location.href="inloggad_index.php";';
		echo '</script>';
		}
	else{
		echo '<script language="javascript">';
		echo 'alert("Login failed");';
		echo 'window.location.href="login.php";';
		echo '</script>';
		}

	?>