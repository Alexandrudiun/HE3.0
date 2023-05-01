<?php


include "conn.php";

session_start();


if(isset($_SESSION['email']) && isset ($_SESSION['password'])) 
{

if(isset($_POST['submit'])){
    $email = $_SESSION['email'];
    echo $email;
    $name = $_POST['name'];
    $title = $_POST['titlu'];
    $price = $_POST['pret'];
    $description = $_POST['descriere'];
    $skills = $_POST['skills'];
    $query = "INSERT INTO posts (email, name, title, price, description, skills) VALUES ('{$email}', '{$name}', '{$title}', '{$price}', '{$description}', '{$skills}')";
    $add_post_query = mysqli_query($conn, $query);
    if(!$add_post_query) {
       die('Query Failed'. mysqli_error($conn));
    }
    $photoNames = ''; 
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
                    $fileDestination = '../img/upload/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $uploadCount++;
                $photoNames .= $fileNameNew . ', ';
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
    $photoNames = rtrim($photoNames, ', ');
    if($uploadCount > 0){
        // Store the concatenated string in the database
        $query = "UPDATE posts SET images = '$photoNames' WHERE email = '$email' AND name = '$name' AND title = '$title' AND price = '$price' AND description = '$description' AND skills = '$skills'";
        $result = mysqli_query($conn, $query);
        
        if($result){
            header("Location: post.php?uploadsuccess");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
}
}
}
?>
