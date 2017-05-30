<?php
session_start();
include("conn.php");


if (isset($_SESSION['KundID'])){
$kundid = ($_SESSION['KundID']);
$kund = implode("",$kundid) +1;
$kunda = (int)$kund;


	$inlagg = $_POST["inlagg"];
	$taggar = $_POST["taggar"];
	$conn->query("INSERT INTO Inlagg (InlaggID,InlaggText,KundID) VALUES ('','$inlagg','$kunda')");
	$conn->query("INSERT INTO Taggar (TaggID,Taggnamn) VALUES ('','$taggar')");
	$inlaggid = "SELECT InlaggID FROM Inlagg WHERE InlaggText = '$inlagg'";
	$taggid = "SELECT TaggID FROM Taggar WHERE Taggnamn = '$taggar'";
	
	var_dump($inlaggid);
	var_dump($taggid);
	/*$conn->query("INSERT INTO Inlaggstaggar (TaggID,InlaggID) VALUES ('$taggid','$inlaggid')");
	if(!$conn){
		echo '<script language="javascript">';
		echo 'alert("Failed to post");';
		echo 'window.location.href="skapainlagg.php";';
		echo '</script>';

		}
		else {
		echo '<script language="javascript">';
		echo 'alert("Posted!");';
		echo 'window.location.href="index.php";';
		echo '</script>';
		
		}*/
} 
	?>