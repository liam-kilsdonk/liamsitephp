<?php

include ('../connector.php');   

$full_name = $_POST['full_name'];
$full_email = $_POST['full_email'];
$full_phone = $_POST['full_phone'];

$sql = "INSERT INTO reserveringen (naam, mobiel, email) VALUES ('$full_name', '$full_phone', '$full_email')";

$conn->exec($sql);

