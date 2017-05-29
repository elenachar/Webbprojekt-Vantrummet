<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

</head>
<body>

<?php if (!isset($_SESSION['KundID'])) : ?>
<div class="header"> logga in </div>

<form  name="loginForm" method= "POST" action = "salt_login.php">
		<label>email</label>
		<input type="text" placeholder="Din Emailadress.." name="email" required>

		<label>Password</label>
		<input type="password" placeholder="Ditt lösenord.." name="password" required>

		<button type="submit">logga in</button>
	</form>
	
	<a href="register.php"> Inte medlem? REGISTRERA DIG </a>
	
<?php elseif (isset($_SESSION['KundID'])) : ?>
	<a href="loggaut.php"> Du är redan inloggad. LOGGA UT</a>
	
<?php endif; ?>
</body>
</html>