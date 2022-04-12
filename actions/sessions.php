<?php
    session_start();

    if(!isset($_SESSION['var'])) {
        header('location: ../php/index.php');
        exit();
    }
?>