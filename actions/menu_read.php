<?php

include ('../connector.php');   

echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>ID</th><th>Titel</th><th>subText</th><th>Prijs</th><th>Image</th></tr>";

function currentb($data) {
    echo "<td style='width: 150px; border: 1px solid black;'>" . $data . "</td>";
}

function beginChildren2() {
    echo "<tr>";
}

function endChildren2() {
    echo "</tr>" . "\n";
}

try {
    $sql = "SELECT id, titel, subText, prijs, image FROM menu";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach($stmt->fetchAll() as $k=>$v) {
        beginChildren();
        currentb($v['id']);
        currentb($v['titel']);
        currentb($v['subText']);
        currentb($v['prijs']);
        currentb($v['image']);
        currentb("<button name='stuur1' style='background: red'><a href='../actions/menu_delete.php?id=".$v['id']."'>Verwijder</a></button>");
        endChildren();
    }
    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
