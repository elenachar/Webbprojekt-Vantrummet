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
	include_once("conn.php");
	$sokord = $_GET["sokfalt"];
	var_dump($sokord);
	$find_inlagg = mysqli_query($conn, "SELECT Inlagg.InlaggText, Kundinfo.Anvandarnamn
						FROM Inlagg
						JOIN Kundinfo ON Kundinfo.KundID = Inlagg.KundID
						JOIN Inlaggstaggar ON Inlagg.InlaggID = Inlaggstaggar.InlaggID
						JOIN Taggar ON Taggar.TaggID = Inlaggstaggar.TaggID
						WHERE $sokord = Taggar.Taggnamn"
						);
	
	
	
	
	
		while($row = mysqli_fetch_assoc($conn, $find_inlagg))
		{
			$inlagg_name = $row['Anvandarnamn'];
			$inlagg_text = $row['InlaggText'];
			echo '<div>';
			echo "$inlagg_name : <br> $inlagg_text<p>";
			echo '</div>';
		}
		
	?>
	
	
	HEJ ALLA
	</body> 

</html> 