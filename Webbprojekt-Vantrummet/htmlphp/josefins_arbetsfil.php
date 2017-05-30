<?php

include('conn.php');

$sqlget = "SELECT Taggnamn FROM Taggar"
$sqldata = mysqli_query($conn, $sqlget) or die('error getting data');

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
    echo "<button class=\"orangeKnapp\" type=\"button\" onclick=\"moveNumbers(this.innerHTML)\">";
    echo $row['Taggnamn'];
    echo "</button>";   
}
    
?>