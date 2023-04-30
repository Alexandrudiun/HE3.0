<?php  
include "conn.php";

session_start(); // Start the session

if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
  if(isset($_POST['submit'])){
    $email = $_SESSION['email'];
    $name = $_POST['name'];
    $title = $_POST['titlu'];
    $price = $_POST['pret'];
    $description = $_POST['descriere'];
    $imagine1 = $_FILES['imagine1']['name'];
    $imagine2 = $_FILES['imagine2']['name'];
    $imagine3 = $_FILES['imagine3']['name'];
    $skills = $_POST['skills'];

    // Upload images to server
    $target_dir = "uploads/";
    $target_file1 = $target_dir . basename($_FILES["imagine1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["imagine2"]["name"]);
    $target_file3 = $target_dir . basename($_FILES["imagine3"]["name"]);
    move_uploaded_file($_FILES["imagine1"]["tmp_name"], $target_file1);
    move_uploaded_file($_FILES["imagine2"]["tmp_name"], $target_file2);
    move_uploaded_file($_FILES["imagine3"]["tmp_name"], $target_file3);

    // Insert data into database
    $query = "INSERT INTO posts (email, name, title, price, description, imagine1, imagine2, imagine3, skills) VALUES ('{$email}', '{$name}', '{$title}', '{$price}', '{$description}', '{$imagine1}', '{$imagine2}', '{$imagine3}', '{$skills}')";
    $add_user_query = mysqli_query($conn, $query);
    if(!$add_user_query) {
      die('Query Failed'. mysqli_error($conn));
    }
    
  }
}

?>