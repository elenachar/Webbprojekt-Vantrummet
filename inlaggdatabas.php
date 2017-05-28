<?php

include ("conn.php");


$email = ($_SESSION['email']);
$sql = "SELECT KundID FROM Kundinfo WHERE email = '$email'";
var_dump($sql);
	$inlagg = $_POST["inlagg"];
	 $taggar = $_POST["taggar"];
	$conn->query("INSERT INTO Inlagg (InlaggID,InlaggText,KundID) VALUES ('','$inlagg','$sql')");
	$conn->query("INSERT INTO Taggar (TaggID,Taggnamn) VALUES ('','$taggar')");
	if(!$conn){
		echo '<script language="javascript">';
		echo 'alert("Failed to post");';
		echo 'window.location.href="index.html";';
		echo '</script>';
		}
		else {
		echo '<script language="javascript">';
		echo 'alert("Posted!");';
		echo 'window.location.href="index.html";';
		echo '</script>';
		
		}
	
	
	
	header('Location: index.html');

	?>