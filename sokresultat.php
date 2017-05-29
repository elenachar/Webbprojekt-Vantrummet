<?php session_start(); ?>
<!DOCTYPE html>

<html lang="sv"> 

	<head>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Bad+Script|Cabin+Sketch" rel="stylesheet">     
		<script type="text/javascript" src="js/javascript.js"></script>		
	</head> 

	<body>
    
<div > Erfarenheter: </div>
	
	
	<?php 

	
	include("conn.php");
	$sokord = $_GET["sokfalt"];
	
	$query = "SELECT Inlagg.InlaggText, Kundinfo.Anvandarnamn
						FROM Inlagg
						JOIN Kundinfo ON Kundinfo.KundID = Inlagg.KundID
						JOIN Inlaggstaggar ON Inlagg.InlaggID = Inlaggstaggar.InlaggID
						JOIN Taggar ON Taggar.TaggID = Inlaggstaggar.TaggID
						WHERE '$sokord' = Taggar.Taggnamn";
						
		$result = $conn->query($query);				
	
	
		while($row = $result->fetch_assoc())
		{
			$inlagg_name = $row['Anvandarnamn'];
			$inlagg_text = $row['InlaggText'];
			echo '<div>';
			echo "<p>'$inlagg_name' : <br> '$inlagg_text'</p>";
			echo '</div>';
		}
		
		
	?>
	

	</body> 

</html> 