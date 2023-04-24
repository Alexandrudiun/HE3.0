<?php  
include "conn.php";

session_start(); // Start the session
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    if(isset($_POST['submit'])) {
      $name = $_POST['name'];
      $skills = $_POST['skills'];
      $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
      $query = "UPDATE users SET name = '{$name}', skills = '{$skills}', photo = '{$image}' WHERE email = '{$email}'";
      $update_user_query = mysqli_query($conn, $query);
      if(!$update_user_query) {
        die("Query Failed" . mysqli_error($conn));
      }
      header("Location: ../frontend/profil.php");
    }
}?>
