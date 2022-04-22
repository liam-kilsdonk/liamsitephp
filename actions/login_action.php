<?php

include ('../connector.php');   

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username=:username");
$stmt->execute(['username' => $username]); 
$user = $stmt->fetch();

if (password_verify($password , $user['password'])) {
    session_start();
    $_SESSION['var'] = true;
    header("location: ../php/admin.php");

    //echo 'Password is valid!';
} 

else {
    echo 'Invalid password.';
}