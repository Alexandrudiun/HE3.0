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
    $skills = $_POST['skills'];
    $images = ''; // initialize the images variable
    print_r($_FILES['files']['name']);
    for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
      $fileName = $_FILES['files']['name'][$i];
      $fileTmpName = $_FILES['files']['tmp_name'][$i]; 
      $fileSize = $_FILES['files']['size'][$i]; 
      $fileError = $_FILES['files']['error'][$i]; 
      $fileType = $_FILES['files']['type'][$i]; 
      
      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));
      
      $allowed = array('jpg', 'jpeg', 'png', 'pdf');
      
      if(in_array($fileActualExt, $allowed)){
          if($fileError === 0){
              if($fileSize < 1000000){
                  $fileNameNew = uniqid('', true).".".$fileActualExt;
                  $fileDestination = 'img/upload'.$fileNameNew;
                  move_uploaded_file($fileTmpName, $fileDestination);
                  $images .= $fileNameNew . ','; // append the filename to the images variable
              } else {
                  echo "Your file is too big!";
              }
          } else {
              echo "There was an error uploading your file!";
          }
      } else {
          echo "You cannot upload files of this type!";
      }

    }
    $images = rtrim($images, ','); // remove the trailing comma
    $query = "INSERT INTO posts (email, name, title, price, description, images, skills) VALUES ('{$email}', '{$name}', '{$title}', '{$price}', '{$description}', '{$images}', '{$skills}')";
    $add_user_query = mysqli_query($conn, $query);
    if(!$add_user_query) {
       die('Query Failed'. mysqli_error($conn));
    }
    header("Location: post.php?uploadsuccess");
  }
}

?>
