<?php

include ("conn.php");




	$inlagg = $_POST["inlagg"];
	
	$conn->query("INSERT INTO Inlagg (InlaggID,InlaggText,KundID) VALUES ('','inlagg','')");
		
		if(!$conn){
		echo '<script language="javascript">';
		echo 'alert("Failed to post");';
		echo 'window.location.href="register.php";';
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