<?php
include_once("conn.php");
	$namn = $_POST["namn"];
	$kommentar = $_POST["kommentar"];
	$email = $_POST["email"];
	
// if sats h�r? f�r validering
		$conn->query("INSERT INTO Kommentarer (namn, kommentar, email) VALUES ('$namn','$kommentar','$email')");

	header('Location: valserv.php');
?>