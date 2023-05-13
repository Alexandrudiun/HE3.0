<?php

    session_start(); // Start the session
$email = $_SESSION['email'];
$password = $_SESSION['password'];    
 echo $email;
 echo $password;