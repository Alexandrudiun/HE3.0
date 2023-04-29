<?php  
include "conn.php";

session_start(); // Start the session
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
  if(isset($_POST['submit'])){
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $query="SELECT * FROM users WHERE email = '{$email}'";
    $select_user_query = mysqli_query($conn, $query);
    
    if(!$select_user_query)
    {
      die('Query Failed');
    }
   
    while($row = mysqli_fetch_row($select_user_query)) {
    if($row[1] == $email && $row[2] == $password) {

               if(isset($_POST['worker'])){
                $row[8] = 1;
               }
                if(isset($_POST['employer'])){
                  $row[9] = 1;
                }
      
         }
        }
        header("Location: /frontend/profil.php");
      }
    }
?>