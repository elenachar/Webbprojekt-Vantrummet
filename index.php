<?php
session_start();
//var_dump($SESSION['KundID']);

?>


<!DOCTYPE html>

<html lang="sv"> 

	<head>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Bad+Script|Cabin+Sketch" rel="stylesheet">     
		<script type="text/javascript" src="js/javascript.js"></script>		
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

	<?php if (!isset($_SESSION['email'])) :?> 
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
	
		<button type="submit" name="register">Register</button>

	</form>
	
	<form  name="loginForm" method= "POST" action = "salt_login.php">
		<label>email</label>
		<input type="email" placeholder="Din Emailadress.." name="email" required>

		<label>Password</label>
		<input type="password" placeholder="Ditt lösenord.." name="password" required>

		<button type="submit">logga in</button>
	</form>

	 <?php endif; ?> 

		
        <header>
        <h1>VÄNTRUMMET</h1>
        <img id="chairIcon" src="bilder/chair.png">    
        <img id="loginIcon" src="bilder/login.png">
        </header>
    
        <div id="flöde">
    
    	   <div class="omOss">
		      <p>Här har du möjlighet att ta del av och dela med dig av erfarenheter gällande sjukvård. Skriv bara in ett eller flera sökord i sökrutan nedan, för att se vad andra skrivit!</p>
	       </div>

	
	<?php if (isset($_SESSION['KundID'])) :?>
            <div id="meny">
                <a href="skapainlagg.php"><img class="icon icons8-Menu" src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNjQgNjQiIGZpbGw9IiNmYWxzZSIgPiAgICA8cGF0aCBkPSJNIDcgNiBDIDUuMzQ2IDYgNCA3LjM0NiA0IDkgTCA0IDU1IEMgNCA1Ni42NTQgNS4zNDYgNTggNyA1OCBMIDU3IDU4IEMgNTguNjU0IDU4IDYwIDU2LjY1NCA2MCA1NSBMIDYwIDkgQyA2MCA3LjM0NiA1OC42NTQgNiA1NyA2IEwgNyA2IHogTSA3IDggTCA1NyA4IEMgNTcuNTUxIDggNTggOC40NDggNTggOSBMIDU4IDU1IEMgNTggNTUuNTUyIDU3LjU1MSA1NiA1NyA1NiBMIDcgNTYgQyA2LjQ0OSA1NiA2IDU1LjU1MiA2IDU1IEwgNiA5IEMgNiA4LjQ0OCA2LjQ0OSA4IDcgOCB6IE0gMTUgMjIgQyAxNC40NDggMjIgMTQgMjIuNDQ3IDE0IDIzIEMgMTQgMjMuNTUzIDE0LjQ0OCAyNCAxNSAyNCBMIDQ5IDI0IEMgNDkuNTUyIDI0IDUwIDIzLjU1MyA1MCAyMyBDIDUwIDIyLjQ0NyA0OS41NTIgMjIgNDkgMjIgTCAxNSAyMiB6IE0gMTUgMzAgQyAxNC40NDggMzAgMTQgMzAuNDQ3IDE0IDMxIEMgMTQgMzEuNTUzIDE0LjQ0OCAzMiAxNSAzMiBMIDQ5IDMyIEMgNDkuNTUyIDMyIDUwIDMxLjU1MyA1MCAzMSBDIDUwIDMwLjQ0NyA0OS41NTIgMzAgNDkgMzAgTCAxNSAzMCB6IE0gMTUgMzggQyAxNC40NDggMzggMTQgMzguNDQ3IDE0IDM5IEMgMTQgMzkuNTUzIDE0LjQ0OCA0MCAxNSA0MCBMIDQ5IDQwIEMgNDkuNTUyIDQwIDUwIDM5LjU1MyA1MCAzOSBDIDUwIDM4LjQ0NyA0OS41NTIgMzggNDkgMzggTCAxNSAzOCB6IE0gOSA1MCBDIDguNDQ4IDUwIDggNTAuNDQ3IDggNTEgTCA4IDUzIEMgOCA1My41NTMgOC40NDggNTQgOSA1NCBDIDkuNTUyIDU0IDEwIDUzLjU1MyAxMCA1MyBMIDEwIDUxIEMgMTAgNTAuNDQ3IDkuNTUyIDUwIDkgNTAgeiBNIDE0IDUwIEMgMTMuNDQ4IDUwIDEzIDUwLjQ0NyAxMyA1MSBMIDEzIDUzIEMgMTMgNTMuNTUzIDEzLjQ0OCA1NCAxNCA1NCBDIDE0LjU1MiA1NCAxNSA1My41NTMgMTUgNTMgTCAxNSA1MSBDIDE1IDUwLjQ0NyAxNC41NTIgNTAgMTQgNTAgeiBNIDE5IDUwIEMgMTguNDQ4IDUwIDE4IDUwLjQ0NyAxOCA1MSBMIDE4IDUzIEMgMTggNTMuNTUzIDE4LjQ0OCA1NCAxOSA1NCBDIDE5LjU1MiA1NCAyMCA1My41NTMgMjAgNTMgTCAyMCA1MSBDIDIwIDUwLjQ0NyAxOS41NTIgNTAgMTkgNTAgeiBNIDI0IDUwIEMgMjMuNDQ4IDUwIDIzIDUwLjQ0NyAyMyA1MSBMIDIzIDUzIEMgMjMgNTMuNTUzIDIzLjQ0OCA1NCAyNCA1NCBDIDI0LjU1MiA1NCAyNSA1My41NTMgMjUgNTMgTCAyNSA1MSBDIDI1IDUwLjQ0NyAyNC41NTIgNTAgMjQgNTAgeiBNIDI5IDUwIEMgMjguNDQ4IDUwIDI4IDUwLjQ0NyAyOCA1MSBMIDI4IDUzIEMgMjggNTMuNTUzIDI4LjQ0OCA1NCAyOSA1NCBDIDI5LjU1MiA1NCAzMCA1My41NTMgMzAgNTMgTCAzMCA1MSBDIDMwIDUwLjQ0NyAyOS41NTIgNTAgMjkgNTAgeiBNIDM0IDUwIEMgMzMuNDQ4IDUwIDMzIDUwLjQ0NyAzMyA1MSBMIDMzIDUzIEMgMzMgNTMuNTUzIDMzLjQ0OCA1NCAzNCA1NCBDIDM0LjU1MiA1NCAzNSA1My41NTMgMzUgNTMgTCAzNSA1MSBDIDM1IDUwLjQ0NyAzNC41NTIgNTAgMzQgNTAgeiBNIDM5IDUwIEMgMzguNDQ4IDUwIDM4IDUwLjQ0NyAzOCA1MSBMIDM4IDUzIEMgMzggNTMuNTUzIDM4LjQ0OCA1NCAzOSA1NCBDIDM5LjU1MiA1NCA0MCA1My41NTMgNDAgNTMgTCA0MCA1MSBDIDQwIDUwLjQ0NyAzOS41NTIgNTAgMzkgNTAgeiBNIDQ0IDUwIEMgNDMuNDQ4IDUwIDQzIDUwLjQ0NyA0MyA1MSBMIDQzIDUzIEMgNDMgNTMuNTUzIDQzLjQ0OCA1NCA0NCA1NCBDIDQ0LjU1MiA1NCA0NSA1My41NTMgNDUgNTMgTCA0NSA1MSBDIDQ1IDUwLjQ0NyA0NC41NTIgNTAgNDQgNTAgeiBNIDQ5IDUwIEMgNDguNDQ4IDUwIDQ4IDUwLjQ0NyA0OCA1MSBMIDQ4IDUzIEMgNDggNTMuNTUzIDQ4LjQ0OCA1NCA0OSA1NCBDIDQ5LjU1MiA1NCA1MCA1My41NTMgNTAgNTMgTCA1MCA1MSBDIDUwIDUwLjQ0NyA0OS41NTIgNTAgNDkgNTAgeiBNIDU0IDUwIEMgNTMuNDQ4IDUwIDUzIDUwLjQ0NyA1MyA1MSBMIDUzIDUzIEMgNTMgNTMuNTUzIDUzLjQ0OCA1NCA1NCA1NCBDIDU0LjU1MiA1NCA1NSA1My41NTMgNTUgNTMgTCA1NSA1MSBDIDU1IDUwLjQ0NyA1NC41NTIgNTAgNTQgNTAgeiI+PC9wYXRoPjwvc3ZnPg=='/></a>
    
                <a href="index.php"><img class="icon icons8-Search" src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNjQgNjQiIGZpbGw9IiNmYWxzZSIgPiAgICA8cGF0aCBkPSJNIDI1IDAgQyAxMS4yMTUgMCAwIDExLjIxNSAwIDI1IEMgMCAzOC43ODUgMTEuMjE1IDUwIDI1IDUwIEMgMzAuNTE0IDUwIDM1LjYxMzk1MyA0OC4yMDIwMTYgMzkuNzUxOTUzIDQ1LjE2NjAxNiBDIDM5Ljc1MTk1MyA0NS4xNjYwMTYgNDIuNTI3MTA5IDQ3Ljg4NTU5NCA0Mi42NjIxMDkgNDcuOTMzNTk0IEMgNDIuNjYyMTA5IDQ3Ljk1NTU5NCA0Mi42NTYyNSA0Ny45NzcgNDIuNjU2MjUgNDggQyA0Mi42NTYyNSA0OS4zMzYgNDMuMTc3MDk0IDUwLjU5MjE1NiA0NC4xMjEwOTQgNTEuNTM1MTU2IEwgNTQuNDY0ODQ0IDYxLjg3ODkwNiBDIDU1LjQzOTg0NCA2Mi44NTM5MDYgNTYuNzIgNjMuMzM5ODQ0IDU4IDYzLjMzOTg0NCBDIDU5LjI4MSA2My4zMzk4NDQgNjAuNTYyMTA5IDYyLjg1MzkwNiA2MS41MzcxMDkgNjEuODc4OTA2IEwgNjEuODgwODU5IDYxLjUzMzIwMyBDIDYyLjgyNDg1OSA2MC41ODkyMDMgNjMuMzQzNzUgNTkuMzM1IDYzLjM0Mzc1IDU4IEMgNjMuMzQyNzUgNTYuNjY0IDYyLjgyMzkwNiA1NS40MDc4NDQgNjEuODc4OTA2IDU0LjQ2NDg0NCBMIDUxLjUzNTE1NiA0NC4xMjEwOTQgQyA1MC41NDQxNTYgNDMuMTMwMDk0IDQ5LjIzODU0NyA0Mi42NDkwMTYgNDcuOTM1NTQ3IDQyLjY2NjAxNiBDIDQ3Ljg4NzU0NyA0Mi41MzAwMTYgNDUuMTY2MDE2IDM5Ljc1MTk1MyA0NS4xNjYwMTYgMzkuNzUxOTUzIEMgNDguMjAyMDE2IDM1LjYxMzk1MyA1MCAzMC41MTQgNTAgMjUgQyA1MCAxMS4yMTUgMzguNzg1IDAgMjUgMCB6IE0gMjUgMiBDIDM3LjY4MiAyIDQ4IDEyLjMxNyA0OCAyNSBDIDQ4IDM3LjY4MyAzNy42ODIgNDggMjUgNDggQyAxMi4zMTggNDggMiAzNy42ODMgMiAyNSBDIDIgMTIuMzE3IDEyLjMxOCAyIDI1IDIgeiBNIDI1IDYgQyAxOS45MjUgNiAxNS4xNTM0NTMgNy45NzY0NTMxIDExLjU2NDQ1MyAxMS41NjQ0NTMgQyA0LjE1NjQ1MzEgMTguOTcyNDUzIDQuMTU2NDUzMSAzMS4wMjU1OTQgMTEuNTY0NDUzIDM4LjQzMzU5NCBDIDE1LjE1MzQ1MyA0Mi4wMjI1OTQgMTkuOTI1IDQ0IDI1IDQ0IEMgMzAuMDc1IDQ0IDM0Ljg0NjU0NyA0Mi4wMjM1NDcgMzguNDM1NTQ3IDM4LjQzNTU0NyBDIDQ1Ljg0MzU0NyAzMS4wMjY1NDcgNDUuODQzNTQ3IDE4Ljk3MzQ1MyAzOC40MzU1NDcgMTEuNTY0NDUzIEMgMzQuODQ2NTQ3IDcuOTc2NDUzMSAzMC4wNzUgNiAyNSA2IHogTSAyNSA4IEMgMjkuNTQxIDggMzMuODEwNDg0IDkuNzY4NTE1NiAzNy4wMjE0ODQgMTIuOTc4NTE2IEMgNDMuNjQ5NDg0IDE5LjYwNjUxNiA0My42NDk0ODQgMzAuMzkzNDg0IDM3LjAyMTQ4NCAzNy4wMjE0ODQgQyAzMy44MTA0ODQgNDAuMjMxNDg0IDI5LjU0MSA0MiAyNSA0MiBDIDIwLjQ1OSA0MiAxNi4xODk1MTYgNDAuMjMxNDg0IDEyLjk3ODUxNiAzNy4wMjE0ODQgQyA2LjM1MDUxNTYgMzAuMzkzNDg0IDYuMzUwNTE1NiAxOS42MDg0NjkgMTIuOTc4NTE2IDEyLjk4MDQ2OSBDIDE2LjE4OTUxNiA5Ljc2OTQ2ODcgMjAuNDU5IDggMjUgOCB6IE0gMjQuODA4NTk0IDExIEMgMjEuMTczNzg5IDExLjA0NDc3NSAxNy43MDI3MzQgMTIuNDk3MzU5IDE1LjA5OTYwOSAxNS4wOTk2MDkgQyAxNC43MDg2MDkgMTUuNDkwNjA5IDE0LjcwODYwOSAxNi4xMjI2NzIgMTUuMDk5NjA5IDE2LjUxMzY3MiBDIDE1LjI5NDYwOSAxNi43MDg2NzIgMTUuNTUwNjQxIDE2LjgwNjY0MSAxNS44MDY2NDEgMTYuODA2NjQxIEMgMTYuMDYyNjQxIDE2LjgwNjY0MSAxNi4zMTg2NzIgMTYuNzA4NjcyIDE2LjUxMzY3MiAxNi41MTM2NzIgQyAxOS4wNjI2NzIgMTMuOTYzNjcyIDIyLjU4MzY4OCAxMi43MDE2NDEgMjYuMTc5Njg4IDEzLjA1NjY0MSBDIDI2LjczMTY4NyAxMy4xMDM2NDEgMjcuMjE5NDM3IDEyLjcwOTE1NiAyNy4yNzM0MzggMTIuMTYwMTU2IEMgMjcuMzI3NDM4IDExLjYxMDE1NiAyNi45MjUgMTEuMTIwNDA2IDI2LjM3NSAxMS4wNjY0MDYgQyAyNS44NTExMjUgMTEuMDE0NTMxIDI1LjMyNzg1MiAxMC45OTM2MDQgMjQuODA4NTk0IDExIHogTSAzMS44NjEzMjggMTIuODc2OTUzIEMgMzEuNDc1NDUzIDEyLjgyMTEyNSAzMS4wNzUwNzggMTIuOTk2MDYyIDMwLjg2MTMyOCAxMy4zNTE1NjIgQyAzMC41NzUzMjggMTMuODIzNTYyIDMwLjcyODE3MiAxNC40Mzg2MDkgMzEuMjAxMTcyIDE0LjcyNDYwOSBDIDMyLjAyNTE3MiAxNS4yMjE2MDkgMzIuNzkyMzc1IDE1LjgyNDYyNSAzMy40ODQzNzUgMTYuNTE1NjI1IEMgMzMuNjc5Mzc1IDE2LjcxMDYyNSAzMy45MzU0MDYgMTYuODA4NTk0IDM0LjE5MTQwNiAxNi44MDg1OTQgQyAzNC40NDc0MDYgMTYuODA4NTk0IDM0LjcwNDM5MSAxNi43MTA2MjUgMzQuOTAwMzkxIDE2LjUxNTYyNSBDIDM1LjI5MDM5MSAxNi4xMjQ2MjUgMzUuMjkwMzkxIDE1LjQ5MTU2MyAzNC45MDAzOTEgMTUuMTAxNTYyIEMgMzQuMDkzMzkxIDE0LjI5NTU2MyAzMy4xOTYzNzUgMTMuNTkyNzE5IDMyLjIzNDM3NSAxMy4wMTE3MTkgQyAzMi4xMTYxMjUgMTIuOTM5OTY5IDMxLjk4OTk1MyAxMi44OTU1NjMgMzEuODYxMzI4IDEyLjg3Njk1MyB6IE0gMTEgMjQgQyAxMC40NDggMjQgMTAgMjQuNDQ3IDEwIDI1IEMgMTAgMjUuNTUzIDEwLjQ0OCAyNiAxMSAyNiBMIDEzIDI2IEMgMTMuNTUyIDI2IDE0IDI1LjU1MyAxNCAyNSBDIDE0IDI0LjQ0NyAxMy41NTIgMjQgMTMgMjQgTCAxMSAyNCB6IE0gMzcgMjQgQyAzNi40NDggMjQgMzYgMjQuNDQ3IDM2IDI1IEMgMzYgMjUuNTUzIDM2LjQ0OCAyNiAzNyAyNiBMIDM5IDI2IEMgMzkuNTUyIDI2IDQwIDI1LjU1MyA0MCAyNSBDIDQwIDI0LjQ0NyAzOS41NTIgMjQgMzkgMjQgTCAzNyAyNCB6IE0gMTMuODkwNjI1IDI4LjQ5NDE0MSBDIDEzLjc2MDY0MSAyOC40OTIgMTMuNjI2NTQ3IDI4LjUxNjYwOSAxMy40OTgwNDcgMjguNTY4MzU5IEwgMTEuNjQ0NTMxIDI5LjMxNjQwNiBDIDExLjEzMjUzMSAyOS41MjI0MDYgMTAuODg0Nzk3IDMwLjEwNTE4OCAxMS4wOTE3OTcgMzAuNjE3MTg4IEMgMTEuMjQ4Nzk3IDMxLjAwNzE4OCAxMS42MjM1MzEgMzEuMjQ0MTQxIDEyLjAxOTUzMSAzMS4yNDQxNDEgQyAxMi4xNDQ1MzEgMzEuMjQ0MTQxIDEyLjI3MTUzMSAzMS4yMjE4NzUgMTIuMzk0NTMxIDMxLjE3MTg3NSBMIDE0LjI0ODA0NyAzMC40MjE4NzUgQyAxNC43NjEwNDcgMzAuMjE1ODc1IDE1LjAwNzc4MSAyOS42MzMwOTQgMTQuODAwNzgxIDI5LjEyMTA5NCBDIDE0LjY0NTUzMSAyOC43MzcwOTQgMTQuMjgwNTc4IDI4LjUwMDU2MiAxMy44OTA2MjUgMjguNDk0MTQxIHogTSAzNi4wNDY4NzUgMjguNjg3NSBDIDM1LjY1NjkyMiAyOC42ODY0MjIgMzUuMjg3IDI4LjkxNzgyOCAzNS4xMjUgMjkuMjk4ODI4IEMgMzQuOTA5IDI5LjgwNjgyOCAzNS4xNDYyOTcgMzAuMzkzMzc1IDM1LjY1NDI5NyAzMC42MDkzNzUgTCAzNy40OTQxNDEgMzEuMzkwNjI1IEMgMzcuNjIyMTQxIDMxLjQ0NTYyNSAzNy43NTU3MTkgMzEuNDcwNzAzIDM3Ljg4NjcxOSAzMS40NzA3MDMgQyAzOC4yNzU3MTkgMzEuNDcwNzAzIDM4LjY0NDY0MSAzMS4yNDEzMjggMzguODA2NjQxIDMwLjg2MTMyOCBDIDM5LjAyMjY0MSAzMC4zNTMzMjggMzguNzg2MzQ0IDI5Ljc2Njc4MSAzOC4yNzczNDQgMjkuNTUwNzgxIEwgMzYuNDM3NSAyOC43Njk1MzEgQyAzNi4zMTAyNSAyOC43MTQ3ODEgMzYuMTc2ODU5IDI4LjY4Nzg1OSAzNi4wNDY4NzUgMjguNjg3NSB6IE0gMTYuNTEzNjcyIDMyLjQ4NDM3NSBDIDE2LjI1Nzc5NyAzMi40ODQ1IDE2LjAwMzU5NCAzMi41ODIzNDQgMTUuODA4NTk0IDMyLjc3NzM0NCBMIDE0LjM5NDUzMSAzNC4xOTE0MDYgQyAxNC4wMDM1MzEgMzQuNTgyNDA2IDE0LjAwMzUzMSAzNS4yMTQ0NjkgMTQuMzk0NTMxIDM1LjYwNTQ2OSBDIDE0LjU4OTUzMSAzNS44MDA0NjkgMTQuODQ1NTYyIDM1Ljg5ODQzOCAxNS4xMDE1NjIgMzUuODk4NDM4IEMgMTUuMzU3NTYzIDM1Ljg5ODQzOCAxNS42MTM1OTQgMzUuODAwNDY5IDE1LjgwODU5NCAzNS42MDU0NjkgTCAxNy4yMjI2NTYgMzQuMTkxNDA2IEMgMTcuNjEzNjU2IDMzLjgwMDQwNiAxNy42MTM2NTYgMzMuMTY4MzQ0IDE3LjIyMjY1NiAzMi43NzczNDQgQyAxNy4wMjcxNTYgMzIuNTgxODQ0IDE2Ljc2OTU0NyAzMi40ODQyNSAxNi41MTM2NzIgMzIuNDg0Mzc1IHogTSAzMy40ODQzNzUgMzIuNDg0Mzc1IEMgMzMuMjI4NjI1IDMyLjQ4NDM3NSAzMi45NzI4NDQgMzIuNTgxODQ0IDMyLjc3NzM0NCAzMi43NzczNDQgQyAzMi4zODYzNDQgMzMuMTY4MzQ0IDMyLjM4NjM0NCAzMy44MDA0MDYgMzIuNzc3MzQ0IDM0LjE5MTQwNiBMIDM0LjE5MTQwNiAzNS42MDU0NjkgQyAzNC4zODY0MDYgMzUuODAwNDY5IDM0LjY0MjQzNyAzNS44OTg0MzggMzQuODk4NDM4IDM1Ljg5ODQzOCBDIDM1LjE1NDQzOCAzNS44OTg0MzggMzUuNDEwNDY5IDM1LjgwMDQ2OSAzNS42MDU0NjkgMzUuNjA1NDY5IEMgMzUuOTk2NDY5IDM1LjIxNDQ2OSAzNS45OTY0NjkgMzQuNTgyNDA2IDM1LjYwNTQ2OSAzNC4xOTE0MDYgTCAzNC4xOTE0MDYgMzIuNzc3MzQ0IEMgMzMuOTk1OTA2IDMyLjU4MTg0NCAzMy43NDAxMjUgMzIuNDg0Mzc1IDMzLjQ4NDM3NSAzMi40ODQzNzUgeiBNIDIwLjMxMjUgMzUuMDQ2ODc1IEMgMTkuOTIyOTY5IDM1LjA0Njc4MSAxOS41NTI2MjUgMzUuMjczMjk3IDE5LjM5MDYyNSAzNS42NTQyOTcgTCAxOC42MDkzNzUgMzcuNDk2MDk0IEMgMTguMzkzMzc1IDM4LjAwNTA5NCAxOC42MzE2MjUgMzguNTkyNTk0IDE5LjE0MDYyNSAzOC44MDg1OTQgQyAxOS4yNjc2MjUgMzguODYyNTk0IDE5LjM5OTI5NyAzOC44ODY3MTkgMTkuNTI5Mjk3IDM4Ljg4NjcxOSBDIDE5LjkxODI5NyAzOC44ODY3MTkgMjAuMjg5MTcyIDM4LjY1NzM0NCAyMC40NTExNzIgMzguMjc3MzQ0IEwgMjEuMjMyNDIyIDM2LjQzNzUgQyAyMS40NDc0MjIgMzUuOTI4NSAyMS4yMDkxNzIgMzUuMzQxIDIwLjcwMTE3MiAzNS4xMjUgQyAyMC41NzQxNzIgMzUuMDcxNSAyMC40NDIzNDQgMzUuMDQ2OTA2IDIwLjMxMjUgMzUuMDQ2ODc1IHogTSAyOS41MTE3MTkgMzUuMTI2OTUzIEMgMjkuMzgxNzgxIDM1LjEyNDgyOCAyOS4yNDczOTEgMzUuMTQ3NDY5IDI5LjExOTE0MSAzNS4xOTkyMTkgQyAyOC42MDcxNDEgMzUuNDA2MjE5IDI4LjM1OTQwNiAzNS45ODg5NTMgMjguNTY2NDA2IDM2LjUwMTk1MyBMIDI5LjMxNjQwNiAzOC4zNTU0NjkgQyAyOS40NzM0MDYgMzguNzQ0NDY5IDI5Ljg0ODE0MSAzOC45ODA0NjkgMzAuMjQ0MTQxIDM4Ljk4MDQ2OSBDIDMwLjM2OTE0MSAzOC45ODA0NjkgMzAuNDk2MTQxIDM4Ljk1NjI1IDMwLjYxOTE0MSAzOC45MDYyNSBDIDMxLjEzMTE0MSAzOC42OTkyNSAzMS4zNzg4NzUgMzguMTE4NDY5IDMxLjE3MTg3NSAzNy42MDU0NjkgTCAzMC40MjE4NzUgMzUuNzUxOTUzIEMgMzAuMjY2NjI1IDM1LjM2ODcwMyAyOS45MDE1MzEgMzUuMTMzMzI4IDI5LjUxMTcxOSAzNS4xMjY5NTMgeiBNIDI1IDM2IEMgMjQuNDQ4IDM2IDI0IDM2LjQ0NyAyNCAzNyBMIDI0IDM5IEMgMjQgMzkuNTUzIDI0LjQ0OCA0MCAyNSA0MCBDIDI1LjU1MiA0MCAyNiAzOS41NTMgMjYgMzkgTCAyNiAzNyBDIDI2IDM2LjQ0NyAyNS41NTIgMzYgMjUgMzYgeiBNIDQzLjkxMDE1NiA0MS4zMjQyMTkgTCA0NS43ODcxMDkgNDMuMjAxMTcyIEMgNDUuMzEyMTA5IDQzLjQzNjE3MiA0NC44NTk4NDQgNDMuNzI5MDQ3IDQ0LjQ2NDg0NCA0NC4xMjMwNDcgTCA0NC4xMjEwOTQgNDQuNDY0ODQ0IEMgNDMuNzMyMDk0IDQ0Ljg1Mzg0NCA0My40MzYyNjYgNDUuMzA1MjAzIDQzLjE5NzI2NiA0NS43ODMyMDMgTCA0MS4zMjQyMTkgNDMuOTEwMTU2IEMgNDIuMjQ4MjE5IDQzLjExMjE1NiA0My4xMTIxNTYgNDIuMjQ4MjE5IDQzLjkxMDE1NiA0MS4zMjQyMTkgeiBNIDQ4LjAwMTk1MyA0NC42NTgyMDMgQyA0OC43NzA5NTMgNDQuNjU4MjAzIDQ5LjUzODA0NyA0NC45NTExNTYgNTAuMTIzMDQ3IDQ1LjUzNTE1NiBMIDYwLjQ2Njc5NyA1NS44Nzg5MDYgQyA2MS4wMzM3OTcgNTYuNDQ0OTA2IDYxLjM0NTcwMyA1Ny4xOTggNjEuMzQ1NzAzIDU4IEMgNjEuMzQ1NzAzIDU4LjgwMiA2MS4wMzE4NDQgNTkuNTU1MDk0IDYwLjQ2NDg0NCA2MC4xMjEwOTQgTCA2MC4xMjEwOTQgNjAuNDY0ODQ0IEMgNTguOTUxMDk0IDYxLjYzMjg0NCA1Ny4wNDg5MDYgNjEuNjMyODQ0IDU1Ljg3ODkwNiA2MC40NjQ4NDQgTCA0NS41MzUxNTYgNTAuMTIxMDk0IEMgNDQuOTY4MTU2IDQ5LjU1NTA5NCA0NC42NTYyNSA0OC44MDIgNDQuNjU2MjUgNDggQyA0NC42NTYyNSA0Ny4xOTggNDQuOTY5MTA5IDQ2LjQ0NTkwNiA0NS41MzcxMDkgNDUuODc4OTA2IEwgNDUuODc4OTA2IDQ1LjUzNTE1NiBDIDQ2LjQ2MzkwNiA0NC45NTExNTYgNDcuMjMyOTUzIDQ0LjY1ODIwMyA0OC4wMDE5NTMgNDQuNjU4MjAzIHoiPjwvcGF0aD48L3N2Zz4='/></a>
        
                <a href="min_sida.html"><img class="icon icons8-Speech-Bubble" src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNjQgNjQiIGZpbGw9IiNmYWxzZSIgPiAgICA8cGF0aCBkPSJNIDMyIDQuMTczODI4MSBDIDE0LjM1NSA0LjE3MzgyODEgMCAxNS42NTA3NjYgMCAyOS43NTk3NjYgQyAwIDQzLjg2ODc2NiAxNC4zNTUgNTUuMzQ1NzAzIDMyIDU1LjM0NTcwMyBDIDM0LjIwOCA1NS4zNDU3MDMgMzYuNDMxMTQxIDU1LjE1NzA2MiAzOC42MTkxNDEgNTQuNzg5MDYyIEMgMzkuOTAyMTQxIDU2LjgwNDA2MyA0My40NTI0MzcgNjEuMTIxNjg4IDUxLjAyMzQzOCA2Mi44MDQ2ODggQyA1MS4wOTU0MzggNjIuODIwNjg3IDUxLjE2ODIzNCA2Mi44MjYxNzIgNTEuMjQwMjM0IDYyLjgyNjE3MiBDIDUxLjU1NzIzNCA2Mi44MjYxNzIgNTEuODYxNzM0IDYyLjY3NjEwOSA1Mi4wNTI3MzQgNjIuNDEyMTA5IEMgNTIuMjg1NzM0IDYyLjA4ODEwOSA1Mi4zMDU2MDkgNjEuNjU1NSA1Mi4wOTk2MDkgNjEuMzEyNSBDIDQ5LjkwNTYwOSA1Ny42NTQ1IDQ5LjI2Njc1IDUzLjc0MzQ4NCA0OS4wOTM3NSA1MS4zOTY0ODQgQyA1OC40NDA3NSA0Ni42Nzc0ODQgNjQgMzguNjMxNzY2IDY0IDI5Ljc1OTc2NiBDIDY0IDE1LjY1MDc2NiA0OS42NDUgNC4xNzM4MjgxIDMyIDQuMTczODI4MSB6IE0gMzIgNi4xNzM4MjgxIEMgNDguNTQyIDYuMTczODI4MSA2MiAxNi43NTQ3NjYgNjIgMjkuNzU5NzY2IEMgNjIgMzguMDM0NzY2IDU2LjYyNDA5NCA0NS41NjA1NzggNDcuNjIxMDk0IDQ5Ljg5MjU3OCBDIDQ3LjI2MDA5NCA1MC4wNjY1NzggNDcuMDM3NjQxIDUwLjQzOTg0NCA0Ny4wNTY2NDEgNTAuODM5ODQ0IEMgNDcuMTQ5NjQxIDUyLjg2OTg0NCA0Ny41NzYxMDkgNTYuNTI2ODEyIDQ5LjI4NzEwOSA2MC4yNTc4MTIgQyA0My4yMDAxMDkgNTguMjYwODEzIDQwLjY3NjkwNiA1NC40MzAxMjUgNDAuMDAzOTA2IDUzLjIwMzEyNSBDIDM5LjgyNTkwNiA1Mi44ODAxMjUgMzkuNDg2OTUzIDUyLjY4MzU5NCAzOS4xMjY5NTMgNTIuNjgzNTk0IEMgMzkuMDY1OTUzIDUyLjY4MzU5NCAzOS4wMDM0MDYgNTIuNjkwMTcyIDM4Ljk0MTQwNiA1Mi43MDExNzIgQyAzNi42NTI0MDYgNTMuMTI4MTcyIDM0LjMxNyA1My4zNDU3MDMgMzIgNTMuMzQ1NzAzIEMgMTUuNDU4IDUzLjM0NTcwMyAyIDQyLjc2NDc2NiAyIDI5Ljc1OTc2NiBDIDIgMTYuNzU0NzY2IDE1LjQ1OCA2LjE3MzgyODEgMzIgNi4xNzM4MjgxIHogTSAzMiAxMCBDIDE4LjIzOSAxMCA3LjA0NDkyMTkgMTguOTcyIDcuMDQ0OTIxOSAzMCBDIDcuMDQ0OTIxOSAzMS4zNDcgNy4yMTEwMTU2IDMyLjY5MDA5NCA3LjU0MTAxNTYgMzMuOTk2MDk0IEMgNy42NTYwMTU2IDM0LjQ0OTA5NCA4LjA2MTc2NTYgMzQuNzUxOTUzIDguNTA5NzY1NiAzNC43NTE5NTMgQyA4LjU5MDc2NTYgMzQuNzUxOTUzIDguNjczODU5NCAzNC43NDA3MDMgOC43NTU4NTk0IDM0LjcyMDcwMyBDIDkuMjkwODU5NCAzNC41ODQ3MDMgOS42MTQ0Njg4IDM0LjA0MDg1OSA5LjQ4MDQ2ODggMzMuNTA1ODU5IEMgOS4xODk0Njg3IDMyLjM1OTg1OSA5LjA0NDkyMTkgMzEuMTgyIDkuMDQ0OTIxOSAzMCBDIDkuMDQ0OTIxOSAyMC4wNzUgMTkuMzQyIDEyIDMyIDEyIEMgMzYuMDY2IDEyIDQwLjA2MTY4OCAxMi44NDYyNjYgNDMuNTU0Njg4IDE0LjQ0NzI2NiBDIDQ0LjA1OTY4OCAxNC42NzgyNjYgNDQuNjUwODU5IDE0LjQ1NzA3OCA0NC44ODA4NTkgMTMuOTU1MDc4IEMgNDUuMTEwODU5IDEzLjQ1MzA3OCA0NC44OTA2NzIgMTIuODYwODU5IDQ0LjM4ODY3MiAxMi42MzA4NTkgQyA0MC42MzY2NzIgMTAuOTA5ODU5IDM2LjM1MyAxMCAzMiAxMCB6IE0gNDguMDU0Njg4IDE1LjAxOTUzMSBDIDQ3LjgwMTY4NyAxNS4wNTkyODEgNDcuNTY0MzQ0IDE1LjE5NzQyMiA0Ny40MDIzNDQgMTUuNDE5OTIyIEMgNDcuMDc2MzQ0IDE1Ljg2NTkyMiA0Ny4xNzMxNDEgMTYuNDkxNDA2IDQ3LjYxOTE0MSAxNi44MTY0MDYgQyA0OC41MTMxNDEgMTcuNDY5NDA2IDQ5LjM0OTUxNiAxOC4xODQ0NTMgNTAuMTAzNTE2IDE4LjkzOTQ1MyBDIDUwLjI5ODUxNiAxOS4xMzU0NTMgNTAuNTUzNTQ3IDE5LjIzMjQyMiA1MC44MTA1NDcgMTkuMjMyNDIyIEMgNTEuMDY1NTQ3IDE5LjIzMjQyMiA1MS4zMjI1NzggMTkuMTM2NDA2IDUxLjUxNzU3OCAxOC45NDE0MDYgQyA1MS45MDg1NzggMTguNTUxNDA2IDUxLjkxMDUzMSAxNy45MTkzNDQgNTEuNTE5NTMxIDE3LjUyNzM0NCBDIDUwLjY5MzUzMSAxNi42OTczNDQgNDkuNzc3ODI4IDE1LjkxNTE3MiA0OC43OTg4MjggMTUuMjAxMTcyIEMgNDguNTc1ODI4IDE1LjAzNzY3MiA0OC4zMDc2ODggMTQuOTc5NzgxIDQ4LjA1NDY4OCAxNS4wMTk1MzEgeiBNIDUzLjQ3NDYwOSAyMC44MTI1IEMgNTMuMzQ2MjM0IDIwLjgzMTAzMSA1My4yMTkzMTMgMjAuODczNTYzIDUzLjEwMTU2MiAyMC45NDUzMTIgQyA1Mi42Mjg1NjMgMjEuMjMxMzEzIDUyLjQ3NjcxOSAyMS44NDUzNTkgNTIuNzYxNzE5IDIyLjMxODM1OSBDIDU0LjIxNzcxOSAyNC43MjkzNTkgNTQuOTU1MDc4IDI3LjMxNCA1NC45NTUwNzggMzAgQyA1NC45NTUwNzggMzguMTk0IDQ3Ljg5NjA2MiA0NS4zNTc4NzUgMzcuNzg5MDYyIDQ3LjQyMTg3NSBDIDM3LjI0ODA2MyA0Ny41MzE4NzUgMzYuODk4NzY2IDQ4LjA2MDU2MyAzNy4wMDk3NjYgNDguNjAxNTYyIEMgMzcuMTA2NzY2IDQ5LjA3NTU2MiAzNy41MjIyODEgNDkuNDAyMzQ0IDM3Ljk4ODI4MSA0OS40MDIzNDQgQyAzOC4wNTQyODEgNDkuNDAyMzQ0IDM4LjEyMjQ1MyA0OS4zOTQ4NTkgMzguMTg5NDUzIDQ5LjM4MDg1OSBDIDQ5LjIzODQ1MyA0Ny4xMjU4NTkgNTYuOTU1MDc4IDM5LjE1NSA1Ni45NTUwNzggMzAgQyA1Ni45NTUwNzggMjYuOTQ1IDU2LjEyMDYwOSAyNC4wMTIxNTYgNTQuNDc0NjA5IDIxLjI4NTE1NiBDIDU0LjI1OTM1OSAyMC45MzA0MDYgNTMuODU5NzM0IDIwLjc1NjkwNiA1My40NzQ2MDkgMjAuODEyNSB6IE0gMjAgMjggQSAyIDIgMCAwIDAgMTggMzAgQSAyIDIgMCAwIDAgMjAgMzIgQSAyIDIgMCAwIDAgMjIgMzAgQSAyIDIgMCAwIDAgMjAgMjggeiBNIDMyIDI4IEEgMiAyIDAgMCAwIDMwIDMwIEEgMiAyIDAgMCAwIDMyIDMyIEEgMiAyIDAgMCAwIDM0IDMwIEEgMiAyIDAgMCAwIDMyIDI4IHogTSA0NCAyOCBBIDIgMiAwIDAgMCA0MiAzMCBBIDIgMiAwIDAgMCA0NCAzMiBBIDIgMiAwIDAgMCA0NiAzMCBBIDIgMiAwIDAgMCA0NCAyOCB6IE0gMTIuOTQ1MzEyIDM2LjgxMjUgQyAxMi42OTM0MzcgMzYuNzY3NzUgMTIuNDIzMjY2IDM2LjgxODA2MiAxMi4xOTcyNjYgMzYuOTc2NTYyIEwgMTAuNTU4NTk0IDM4LjEyMzA0NyBDIDEwLjEwNTU5NCAzOC40MzgwNDcgOS45OTQ1NDY5IDM5LjA2MjYyNSAxMC4zMTA1NDcgMzkuNTE1NjI1IEMgMTAuNTA0NTQ3IDM5Ljc5NDYyNSAxMC44MTU4NTkgMzkuOTQzMzU5IDExLjEzMDg1OSAzOS45NDMzNTkgQyAxMS4zMjc4NTkgMzkuOTQzMzU5IDExLjUyNzE3MiAzOS44ODM3MTkgMTEuNzAxMTcyIDM5Ljc2MTcxOSBMIDEzLjM0MTc5NyAzOC42MTUyMzQgQyAxMy43OTQ3OTcgMzguMzAwMjM0IDEzLjkwNTg0NCAzNy42Nzc2MDkgMTMuNTg5ODQ0IDM3LjIyNDYwOSBDIDEzLjQzMjM0NCAzNi45OTgxMDkgMTMuMTk3MTg4IDM2Ljg1NzI1IDEyLjk0NTMxMiAzNi44MTI1IHogTSAxNi4zODQ3NjYgNDAuODQ1NzAzIEMgMTYuMTI5ODkxIDQwLjg2NzgyOCAxNS44ODM1NzggNDAuOTg2NzY2IDE1LjcwNTA3OCA0MS4xOTcyNjYgTCAxNC40MTc5NjkgNDIuNzI2NTYyIEMgMTQuMDYyOTY5IDQzLjE0OTU2MyAxNC4xMTYwNjIgNDMuNzgxNzE5IDE0LjUzOTA2MiA0NC4xMzY3MTkgQyAxNC43MjcwNjMgNDQuMjkzNzE5IDE0Ljk1NjU5NCA0NC4zNjkxNDEgMTUuMTgzNTk0IDQ0LjM2OTE0MSBDIDE1LjQ2ODU5NCA0NC4zNjkxNDEgMTUuNzUwMjE5IDQ0LjI0ODY3MiAxNS45NDkyMTkgNDQuMDEzNjcyIEwgMTcuMjM2MzI4IDQyLjQ4NDM3NSBDIDE3LjU5MTMyOCA0Mi4wNjEzNzUgMTcuNTM4MjM0IDQxLjQyOTIxOSAxNy4xMTUyMzQgNDEuMDc0MjE5IEMgMTYuOTAzMjM0IDQwLjg5NzIxOSAxNi42Mzk2NDEgNDAuODIzNTc4IDE2LjM4NDc2NiA0MC44NDU3MDMgeiBNIDIxLjEyODkwNiA0My43OTI5NjkgQyAyMC43Mzg3MTkgNDMuNzc5MjM0IDIwLjM2MDI5NyA0My45OTA5ODQgMjAuMTg1NTQ3IDQ0LjM2NTIzNCBMIDE5LjMzOTg0NCA0Ni4xNzc3MzQgQyAxOS4xMDY4NDQgNDYuNjc4NzM0IDE5LjMyMDMxMiA0Ny4yNzM4MTIgMTkuODIwMzEyIDQ3LjUwNzgxMiBDIDE5Ljk1ODMxMyA0Ny41NzA4MTMgMjAuMTAyMTQxIDQ3LjYwMTU2MyAyMC4yNDQxNDEgNDcuNjAxNTYyIEMgMjAuNjIxMTQxIDQ3LjYwMTU2MiAyMC45ODAzOTEgNDcuMzg4MzkxIDIxLjE1MDM5MSA0Ny4wMjUzOTEgTCAyMS45OTgwNDcgNDUuMjE0ODQ0IEMgMjIuMjMxMDQ3IDQ0LjcxMzg0NCAyMi4wMTU2MjUgNDQuMTE4NzY2IDIxLjUxNTYyNSA0My44ODQ3NjYgQyAyMS4zODk4NzUgNDMuODI3MjY2IDIxLjI1ODk2OSA0My43OTc1NDcgMjEuMTI4OTA2IDQzLjc5Mjk2OSB6IE0gMjYuNDk0MTQxIDQ1LjQ1NzAzMSBDIDI1Ljk0MzE0MSA0NS4zNTQwMzEgMjUuNDMyOTM4IDQ1LjcyNDU3OCAyNS4zMzU5MzggNDYuMjY3NTc4IEwgMjQuOTg0Mzc1IDQ4LjIzODI4MSBDIDI0Ljg4NzM3NSA0OC43ODIyODEgMjUuMjUwOTIyIDQ5LjI5OTQ4NCAyNS43OTQ5MjIgNDkuMzk2NDg0IEMgMjUuODU0OTIyIDQ5LjQwNzQ4NCAyNS45MTI3MDMgNDkuNDEyMTA5IDI1Ljk3MDcwMyA0OS40MTIxMDkgQyAyNi40NDY3MDMgNDkuNDEyMTA5IDI2Ljg2NzEyNSA0OS4wNzE4OTEgMjYuOTUzMTI1IDQ4LjU4Nzg5MSBMIDI3LjMwNDY4OCA0Ni42MTcxODggQyAyNy40MDA2ODggNDYuMDcyMTg4IDI3LjAzODE0MSA0NS41NTQwMzEgMjYuNDk0MTQxIDQ1LjQ1NzAzMSB6IE0gMzEuNzA4OTg0IDQ1LjY4OTQ1MyBDIDMxLjE1ODk4NCA0NS43Mzc0NTMgMzAuNzUyNzgxIDQ2LjIyMjQzNyAzMC44MDA3ODEgNDYuNzczNDM4IEwgMzAuOTcyNjU2IDQ4Ljc2NTYyNSBDIDMxLjAxNzY1NiA0OS4yODY2MjUgMzEuNDU0NzUgNDkuNjc3NzM0IDMxLjk2ODc1IDQ5LjY3NzczNCBDIDMxLjk5Njc1IDQ5LjY3NzczNCAzMi4wMjY2NDEgNDkuNjc2ODI4IDMyLjA1NjY0MSA0OS42NzM4MjggQyAzMi42MDY2NDEgNDkuNjI1ODI4IDMzLjAxMjg0NCA0OS4xNDI3OTcgMzIuOTY0ODQ0IDQ4LjU5MTc5NyBMIDMyLjc5Mjk2OSA0Ni41OTk2MDkgQyAzMi43NDQ5NjkgNDYuMDQ5NjA5IDMyLjI4Mjk4NCA0NS42MzA0NTMgMzEuNzA4OTg0IDQ1LjY4OTQ1MyB6Ij48L3BhdGg+PC9zdmc+'/></a>
            </div>
	<?php endif; ?>
           

                
            <form name="sokfalt" action="sokresultat.php" method="get">

                   
                   <div class="sökfält" data-name="sokfalt" >
                   </div>
                 
                   <input class="svartKnapp" type="submit" value="Sök">           


            </form>
            
        
            <div id="taggar">             
                <button class="orangeKnapp" type="button" onclick="moveNumbers(this.innerHTML)">#TAGG1</button>
                <button class="orangeKnapp" type="button" onclick="moveNumbers(this.innerHTML)">#TAGG2</button>
                <button class="orangeKnapp" type="button" onclick="moveNumbers(this.innerHTML)">#TAGG3</button>
                <button class="orangeKnapp" type="button" onclick="moveNumbers(this.innerHTML)">#TAGG4</button>
                <button class="orangeKnapp" type="button" onclick="moveNumbers(this.innerHTML)">#TAGG5</button>
                <button class="orangeKnapp" type="button" onclick="moveNumbers(this.innerHTML)">#TAGG6</button>
                <button class="orangeKnapp" type="button" onclick="moveNumbers(this.innerHTML)">#TAGG7</button>
                <button class="orangeKnapp" type="button" onclick="moveNumbers(this.innerHTML)">#TAGG8</button>
                <button class="orangeKnapp" type="button" onclick="moveNumbers(this.innerHTML)">#TAGG9</button>
                <button class="orangeKnapp" type="button" onclick="moveNumbers(this.innerHTML)">#TAGG10</button>                   
				<button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>                 
				<button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>                 
				<button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>
                <button class="orangeKnapp" type="button">#TAGG</button>
            </div>

        </div>
           
        <script src="js/javascript.js"></script>

	</body> 

</html>

