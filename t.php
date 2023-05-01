<?php
if(isset($_POST['submit'])){
    include "/backend/conn.php";

    session_start(); // Start the session

    if(isset($_SESSION['email'])){
        echo $_SESSION['email'];
        echo $_SESSION['password'];
    }
    else{
        echo "You are not logged in!";
    }
    