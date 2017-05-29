<?php 

		$emailErr = "";
			if (empty($_POST["email"])) {
				$emailErr = "Email is required";
		  } else {
				$email = test_input($_POST["email"]);
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo '<script language="javascript">';
					echo 'alert("wrong email format");';
					echo 'window.location.href="register.php";';
					echo '</script>';
			}
		  }
		  function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;


		?>