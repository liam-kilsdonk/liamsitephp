<?php

include ('../connector.php');   

$full_name = $_POST['full_name'];
$full_email = $_POST['full_email'];
$full_phone = $_POST['full_phone'];
$full_date = $_POST['date_time'];

$sql = "INSERT INTO reserveringen (naam, mobiel, email, date) VALUES ('$full_name', '$full_phone', '$full_email', '$full_date')";

$conn->exec($sql);

header("location: ../php/index.php");

