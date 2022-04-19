<?php

if(isset($_GET['id'])) {
    include ('../connector.php');

    $sql = "DELETE FROM menu WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    // $result = $stmt->fetchAll();
  
    header('Location: ../php/admin.php');
    exit();
} else {
    header('Location: ../php/index.php');
    exit();
}

?>