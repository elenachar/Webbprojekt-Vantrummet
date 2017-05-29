
<?php
	include("conn.php");
	if(isset($conn)){
		if(isset($_POST['email'])){
			$email = trim($_POST['email']);
			$pass = trim($_POST['password']);
			$email = $_POST['email'];
			$password = $_POST['password'];
			$sql_db_password = "SELECT Losenord FROM Inlogg WHERE Email = '$email'";    
			$db_password = mysqli_fetch_assoc(mysqli_query($conn, $sql_db_password));
			
			
			//$salt_db_password = 
			$salt = "SELECT Salt FROM Inlogg WHERE Email = '$email'";  
			$salt_db = mysqli_fetch_assoc(mysqli_query($conn, $salt));
			$salt_password = md5($password.$salt_db["Salt"]);
		}
	}

	$KundID = "SELECT KundID FROM Kundinfo WHERE Email = '$email'";
	$KundID = mysqli_fetch_assoc(mysqli_query($conn, $KundID));
	
	if ($salt_password == $db_password["Losenord"]){
		echo '<script language="javascript">';
		echo 'alert("Logged in");';
		echo 'window.location.href="index.php";'; //ska vara index
		echo '</script>';
		session_start();
		$_SESSION['KundID'] = $KundID;
		
		}
	else{
		echo '<script language="javascript">';
		echo 'alert("Login failed");';
		echo 'window.location.href="login.php";';
		echo '</script>';
		}
	

	?>