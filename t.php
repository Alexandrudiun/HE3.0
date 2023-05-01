<?php

    session_start(); // Start the session

    if(isset($_SESSION['email'])){
        echo $_SESSION['email'];
        echo $_SESSION['password'];
    }
    else{
        echo "You are not logged in!";
    }
    