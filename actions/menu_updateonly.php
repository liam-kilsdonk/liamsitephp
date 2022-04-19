<?php

if(isset($_POST['stuur'])) {
    include ('../connector.php');

    $sql = "UPDATE menu SET titel = :titel, subText = :subText, prijs = :prijs, image = :image WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':titel', $_POST['product']);
    $stmt->bindParam(':subText', $_POST['subtext']);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt->bindParam(':image', $_POST['image']);
    $stmt->bindParam(':id', $_POST['identiteit']);
    $stmt->execute();
    
  
    header('Location: ../php/admin.php');
    exit();
} else {
    header('Location: ../php/index.php');
    exit();
}

?>