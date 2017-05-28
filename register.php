<?php

if(isset($_POST['register']))
{
 $email = trim($_POST['email']);
 $pass = trim($_POST['password']);

 
if(empty($email))
 {
  $error = "enter your email !";
  $code = 2;
 }
 else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
 {
  $error = "not valid email !";
  $code = 2;
 }
 else if(empty($pass))
 {
  $error = "enter password !";
  $code = 4;
 }
 else if(strlen($pass) < 8 )
 {
  $error = "Minimum 8 characters !";
  $code = 4;
 }
 else
 {
  ?>
        <script>
        alert('success');
  document.location.href='index.html';
        </script>
        <?php
 }
}
?>



<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<script src="js/regvalidering.js"></script>

<link rel="stylesheet" type="text/css" href="/css/stylesheet.css">

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

<form  name="registerForm" method= "POST" action = "databas_salt.php" >


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

		<input type="text" class="userLogin" placeholder="Enter Email" name="email" required>
		
		
		<label>Password</label>
		<input type="password" placeholder="Enter Password" name="password" required>
		
		<label>Age</label>
		  <input type="radio" name="age" value="12-20"> 12-20<br>
		  <input type="radio" name="age" value="21-35"> 21-35<br>
		  <input type="radio" name="age" value="36-50"> 36-50 <br>
		  <input type="radio" name="age" value="51+"> 51+
	
		<button type="submit">Register</button>

</form>



</body>
</html>