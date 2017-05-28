<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

</head>
<body>

<div class="header"> logga in </div>

<form  name="loginForm" method= "POST" action = "salt_login.php">
		<label>email</label>
		<input type="email" placeholder="Din Emailadress.." name="email" required>

		<label>Password</label>
		<input type="password" placeholder="Ditt lösenord.." name="password" required>

		<button type="submit">logga in</button>
	</form>
	

</body>
</html>