<?php

include_once ('../connector.php');   

$sql = "SELECT * FROM menu";
$stmt = $conn->prepare($sql);
$stmt->execute(); 
$result = $stmt->fetchall();

foreach ($result as $menu) {
    echo $menu['titel'];
}
//echo $result;
