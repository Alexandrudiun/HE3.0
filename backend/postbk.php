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
   // $images = ''; // initialize the images variable
    
    // Check if the user uploaded images
    $files = $_FILES['file'];
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    $uploadCount = 0;

    foreach($files['name'] as $key => $fileName){
        $fileTmpName = $files['tmp_name'][$key]; 
        $fileSize = $files['size'][$key]; 
        $fileError = $files['error'][$key]; 
        $fileType = $files['type'][$key]; 

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 1000000){
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'img/upload/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $uploadCount++;
                } else {
                    echo "File $fileName is too big!<br>";
                }
            } else {
                echo "There was an error uploading file $fileName!<br>";
            }
        } else {
            echo "You cannot upload files of type $fileActualExt!<br>";
        }
    }

    if($uploadCount > 0){
        header("Location: text.php?uploadsuccess");
    }



    // $images = rtrim($images, ','); // remove the trailing comma
    // $query = "INSERT INTO posts (email, name, title, price, description, images, skills) VALUES ('{$email}', '{$name}', '{$title}', '{$price}', '{$description}', '{$images}', '{$skills}')";
    // $add_user_query = mysqli_query($conn, $query);
    // if(!$add_user_query) {
    //    die('Query Failed'. mysqli_error($conn));
    // }
    header("Location: post.php?uploadsuccess");
  }
}

?>
