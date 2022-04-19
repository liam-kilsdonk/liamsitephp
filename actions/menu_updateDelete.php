<?php

include_once ('../connector.php'); 

$product = $_POST['product'];
$subtext = $_POST['subtext'];
$prijs = $_POST['prijs'];
$image = $_POST['image'];

$sql = "INSERT INTO menu (titel, subText, prijs, image) VALUES ('$product', '$subtext', '$prijs', '$image')";

$conn->exec($sql);

header("location: ../php/admin.php");

?>