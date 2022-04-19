<?php

include_once ('../connector.php');   



$sql = "SELECT * FROM menu";
$stmt = $conn->prepare($sql); $stmt->execute(); $result = $stmt->fetchall();
foreach ($result as $menu) { 

//echo '<div class="menu-card-lay">';
    //echo '<div class="card-row">';
        echo '<div class="menu-item">';
        echo '<img src="' . $menu['image'] . '"alt="#" /> ';
        echo '<div class="menu-info">';
        echo ' <div class="inner-text">';
            echo ' <h4> ' . $menu['titel'] . '</h4> ';
            echo ' <hr /> ';
            echo '<p> ';
            echo  $menu['subText']; 
            echo '  </p> ';
            echo '  <p> ' . $menu['prijs'];'</p> ';
        echo ' </div> ';
        echo '  </div> ';
        echo '</div> ';
    //echo '</div>';
//echo '</div>';
}

?>
