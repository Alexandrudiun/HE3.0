<?php

    session_start(); // Start the session
$email = $_SESSION['email'];
$password = $_SESSION['password'];    
if(isset($password) && isset($email))
{echo "ok";}
else {
 echo "not ok"
 echo $email;
    echo $password;
}