<?php  
include "conn.php";

session_start(); // Start the session
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
  if(isset($_POST['submit'])){
    if(isset($_POST['worker'])){
      echo "da";
      $checkboxValue = $_POST['worker'];
  } else {
      echo "nu";
  }
  
    }
?>