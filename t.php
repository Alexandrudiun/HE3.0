<?php
if(isset($_POST['submit'])){
    include "/backend/conn.php";

    session_start(); // Start the session

    echo $_SESSION['email'];
    echo $_SESSION['password'];
        
