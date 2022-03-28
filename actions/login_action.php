<?php

include ('../connector.php');   

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username=:username");
$stmt->execute(['username' => $username]); 
$user = $stmt->fetch();

var_dump($user['password']);

if (password_verify($password , $user['password'])) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}