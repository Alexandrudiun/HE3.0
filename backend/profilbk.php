<?php  
include "conn.php";

session_start(); // Start the session
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $query="SELECT * FROM users WHERE email = '{$email}'";
    $select_user_query = mysqli_query($conn, $query);
    
    if(!$select_user_query)
    {
      die('Query Failed');
    }
    $email_found = false; // Flag variable to check if email was found
    while($row = mysqli_fetch_row($select_user_query)) {
    if($row[1] == $email && $row[2] == $password) {
      $email_found = true;
      $image = $row[3];
      $name = $row[4];
      $skills = $row[5];



      //$imagine = "data:image/jpeg;base64," . base64_encode($image);
    }
    } ?>