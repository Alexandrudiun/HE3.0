<?php  
include "conn.php";
$ok=0
session_start(); // Start the session
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
  if(isset($_POST['submit'])){
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];


    $worker = isset($_POST['worker']) ? 1 : 0;
    $buyer = isset($_POST['buyer']) ? 1 : 0;



    $query = "UPDATE users SET worker = '$worker', buyer = '$buyer' WHERE email = '$email'";
    $update_user_query = mysqli_query($conn, $query);
    $ok=1;
     }
  }
  if($ok==1){
    header("Location: /frontend/profil.php");
  }
  else{
    header("Location: /frontend/profiletype.php");
  }
?>