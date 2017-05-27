<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

</head>
<body>

	Kommentera: 
	
	<form method = "POST" action = "comment.php" name="myForm" onsubmit="return validateForm()" >
		
		
		<textarea name="kommentar" maxlength="255" rows="5" cols="50" placeholder="Din kommentar..."></textarea>		<br>
		
		<input type="submit" value="Submit">
	</form>
	
	Alla kommentarer:
	<?php 
	include("conn.php");
	$find_comments = mysqli_query($conn, "SELECT * FROM Kommentar as com WHERE InlaggID.com IN (SELECT * FROM Inlagg as inl) = InlaggID.inl");
	
	while($row = mysqli_fetch_assoc($find_comments))
	{
		
		$comment = $row['kommentar'];
		echo "$comment_name - $comment<p>";
	}
	
	?>
	
	
</body>

		
		
</html>