<?php

session_start(); // Start the session
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    echo "Datele contului logat:<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password;
}


?> 