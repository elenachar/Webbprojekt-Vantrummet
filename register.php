<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<script src="js/regvalidering.js"></script>


<script language="javascript" type="text/javascript">
function randomString() {
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
	var string_length = 8;
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		randomstring += chars.substring(rnum,rnum+1);
	}
	document.registerForm.randomfield.value = randomstring;
}
</script>
</head>
<body>

<form  name="registerForm" method= "POST" action = "databas_salt.php">




		<input type="button" value="Get username" onClick="randomString();">&nbsp;
		<input type="label" name="randomfield" value="" readonly>
		
		<label>Email</label>

		<input type="email" placeholder="Enter Email" name="email" required>
		
		
		<label>Password</label>
		<input type="password" placeholder="Enter Password" name="password" required> <br>
		
		<label>Age</label>
		  <input type="radio" name="age" value="12-20"> 12-20
		  <input type="radio" name="age" value="21-35"> 21-35
		  <input type="radio" name="age" value="36-50"> 36-50 
		  <input type="radio" name="age" value="51+"> 51+ <br>
	
		<button type="submit" name="register" >Register</button>

		

</form>



</body>
</html>