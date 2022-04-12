<?php

include ('../connector.php');   

echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>ID</th><th>Naam</th><th>Mobiel</th><th>Email</th><th>Date</th></tr>";

function currenta($data) {
    echo "<td style='width: 150px; border: 1px solid black;'>" . $data . "</td>";
}

function beginChildren() {
    echo "<tr>";
}

function endChildren() {
    echo "</tr>" . "\n";
}

try {
    $sql = "SELECT id, naam, mobiel, email, date FROM reserveringen";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach($stmt->fetchAll() as $k=>$v) {
        beginChildren();
        currenta($v['id']);
        currenta($v['naam']);
        currenta($v['mobiel']);
        currenta($v['email']);
        currenta($v['date']);
        currenta("<button name='stuur1' style='background: red'><a href='../actions/delete_action.php?id=".$v['id']."'>Verwijder</a></button>");
        endChildren();
    }
    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
