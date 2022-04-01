<?php

include ('../connector.php');   

$sql = "SELECT * FROM reserveringen";
$stmt = $conn->prepare($sql);
$stmt->execute(); 
$result = $stmt->fetchall();

foreach ($result as $reserveringen) {
    //echo $reserveringen["naam"];
    echo "<tr><td>" . $row['naam'] . "</td><td>" . $row['mobiel'] . "</td></tr>";

    echo "</table>";
}