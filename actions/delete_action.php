<?php

if(isset($_GET['id'])) {
    include ('../connector.php');

    $sql = "DELETE FROM reserveringen WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    // $result = $stmt->fetchAll();
  
    header('Location: ../php/reserveringen.php');
    exit();
} else {
    header('Location: ../php/index.php');
    exit();
}

?>