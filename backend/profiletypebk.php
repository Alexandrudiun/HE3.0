<?php  
include "conn.php";

session_start(); // Start the session
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
  if(isset($_POST['submit'])){
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];


    $worker = isset($_POST['worker']) ? 1 : 0;
    $buyer = isset($_POST['employer']) ? 1 : 0;

    $query="SELECT * FROM users WHERE email = '{$email}'";
    $select_user_query = mysqli_query($conn, $query);
    
    if(!$select_user_query)
    {
      die('Query Failed');
    }
   
    $query = "UPDATE users SET worker = '$worker', buyer = '$buyer' WHERE email = '$email'";
    $update_user_query = mysqli_query($conn, $query);




 
    }
?>