<!DOCTYPE html>

<html lang="sv"> 

	<head>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Bad+Script|Cabin+Sketch" rel="stylesheet">     
		<script type="text/javascript" src="js/javascript.js"></script>		
	</head> 

	<body>
    
<div class="header"> Erfarenheter: </div>
	
	
	<?php 
	include("conn.php");
	$sokord = $_POST["sokord"];
	$find_inlagg = mysqli_query($conn, "SELECT * 
				FROM Inlagg AS inlaggtabell
				WHERE InlaggID.inlaggtaggtabell IN(SELECT * 
										FROM Inlaggstaggar AS inlaggtaggtabell
										WHERE TaggID.inlaggtaggtabell  = $sokord) = InlaggID.inlaggtabell");
	
	
	
	
	
	while($row = mysqli_fetch_assoc($find_inlagg))
	{
		$inlagg_name = $row['inlogg'];
		$inlagg_text = $row['inlagg'];
		echo '<div>';

		echo '';
		echo "$inlagg_name : <br> $inlagg_text<p>";
		echo '</div>';
	}
	
	?>
	</body> 

</html>