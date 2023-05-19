<?php 

include "conn.php";
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password']))
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM `posts` WHERE id = '{$id}';";
        $result = mysqli_query($conn, $sql);
        
        
        $row = mysqli_fetch_assoc($result);
        print_r($row);


        if($row['email']==$_SESSION['email'])
        {?>




<?php




if(isset($_POST['submit'])){
    $email = $_SESSION['email'];
    $query="SELECT * FROM users WHERE email = '{$email}'";
    $select_user_query = mysqli_query($conn, $query);
    
    
    

    $name = $_POST['name'];
    $title = $_POST['titlu'];
    $price = $_POST['pret'];
    $description = $_POST['descriere'];
    $phone = $_POST['phone'];
    $date = date('Y-m-d H:i:s');
    $city = $_POST['localitate'].' '.$_POST['judet'];
    $query = "INSERT INTO posts (email, city, title, price, description, phone, date) VALUES ('{$email}', '{$city}', '{$title}', '{$price}', '{$description}', '{$phone}', '{$date}')";
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
                if($fileSize < 5242880){
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = '../img/upload/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $uploadCount++;
                $photoNames .= $fileNameNew . ', ';
                } else {
                    echo "File $fileName is too big!<br>";
                }
            } else {
                echo "<script>document.getElementById('mesaj').innerHTML = 'There was an error uploading file $fileName!<br>';</script>";
            }
        } else {
            echo "<script>document.getElementById('mesaj').innerHTML = 'You cannot upload files of type $fileActualExt!<br>';</script>";
        }
    }
    $photoNames = rtrim($photoNames, ', ');
    if($uploadCount > 0){
        
        $query = "UPDATE posts SET images = '$photoNames' WHERE email = '$email'AND date ='$date' AND city = '$city' AND title = '$title' AND price = '$price' AND description = '$description' AND phone = '$phone'";
        $result = mysqli_query($conn, $query);
        
        if($result){
            echo "<script>document.getElementById('mesaj').innerHTML = 'Anunțul a fost actualizat';</script>";
            header("Location: serviceedit.php?uploadsuccess");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
}
}
    
}

?>
    <?

        else echo 'Acces Interzis';



    }
    else {
        header("Location: /frontend/error404.html");
    }
}

else{
    header("Location: /index.php");
}
?>
