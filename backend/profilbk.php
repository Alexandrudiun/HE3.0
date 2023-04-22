<?php
 
echo"<h1>DA</h1>";

session_start(); // Start the session
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
   // echo "Datele contului logat:<br>";
    echo "<script>document.getElementById('message').innerHTML = '{$email}';</script>";
    //echo "Password: " . $password;
}


?> 