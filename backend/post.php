<?php


include "conn.php";

session_start();

echo $_SESSION['email'];
if(isset($_SESSION['email']) && isset ($_SESSION['password'])) 
{ echo "da";
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $query="SELECT * FROM users WHERE email = '{$email}'";
    $select_user_query = mysqli_query($conn, $query);
    
    
    $email_found = false; // Flag variable to check if email was found
    while($row = mysqli_fetch_row($select_user_query)){
        if($row[1] !== $email) {
            continue; // Skip to next row if email doesn't match
        }
        $email_found = true;
    }

    if(!$email_found) {
        echo "<script>document.getElementById('mesaj').innerHTML = 'Email neînregistrat';</script>";
    }
    else{

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
                echo "<script>document.getElementById('mesaj').innerHTML = 'There was an error uploading file $fileName!<br>';</script>";
            }
        } else {
            echo "<script>document.getElementById('mesaj').innerHTML = 'You cannot upload files of type $fileActualExt!<br>';</script>";
        }
    }
    $photoNames = rtrim($photoNames, ', ');
    if($uploadCount > 0){
        // Store the concatenated string in the database
        $query = "UPDATE posts SET images = '$photoNames' WHERE email = '$email' AND name = '$name' AND title = '$title' AND price = '$price' AND description = '$description' AND skills = '$skills'";
        $result = mysqli_query($conn, $query);
        
        if($result){
            echo "<script>document.getElementById('mesaj').innerHTML = 'Anunțul a fost postat';</script>";
            header("Location: post.php?uploadsuccess");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
}
}
}
}
else echo "nu";
?>




<?php

// include "postbk.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="icon" href="/img/logo192.jpg">
    <link rel="stylesheet" href="/css/post.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="manifest" href="/manifest.json">
</head>
<body>

<main>
        <div class="center">
            <div class="profile-card">
              <form action="post.php" method="post" enctype="multipart/form-data">
                <h1>Publică un anunţ nou</h1>
                <h3>Detalii anunţ</h3>
                <section>
                <div class="file-box file-input">
                    <input type="file" id="fileInput" accept="image/png, image/png, image/jpeg" name="file[]" multiple="multiple" onchange="preview()" required>
                    <label for="fileInput" class="inputFile">
                        <ion-icon name="albums-outline"></ion-icon> Adaugă imagini
                    </label>
                    <p id="num-of-files">Nicio imagine adăugată</p>
                    <div id="images"></div>
                </div>
                <div id="mesaj" style="color:red; text-align:center;"></div>
                </section>
                <div class="input-box">
                  <label for="">Titlul anunţului</label>
                  <input type="text" id="titlu" name="titlu" required>
                </div>
                <div class="input-box">
                  <label for="">Descriere</label>
                  <textarea type="text" id="descriere" name="descriere" rows="5" required></textarea>
                </div>
                    <h3>Date de contact</h3>
                    <div class="input-box">
                    <label for="">Telefon</label>
                <input type="tel" id="phone" name="phone" pattern="^(\+40|0)[0-9]{9}$" required>
                    </div>
                <div class="input-box">
                <label for="">Localitate</label>
                <input type="text" id="localitate" name="localitate" required>
                </div>
                <div class="input-box">
                <label for="">Judeţ</label>
                <input type="text" id="judet" name="judet" required>
                </div>
                <div class="button">
                  <input type="submit" name="submit" value="Post" class="btn-login">
                  </div>
                  
              </form>
            </div>
          </div> 
    </main>
    <!-- Navbar Down --> 
    <footer>  
    <section class="nav-bar">
        <div class="navigation">
            <ul>
                <li class="list">
                    <a href="/frontend/home.php">
                        <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Acasă</span>
                    </a>
                </li>
                <li class="list">
                    <a href="/frontend/profil.php">
                        <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="text">Profil</span>
                    </a>
                </li>
                <li class="list active">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="add-circle-outline"></ion-icon>
                        </span>
                        <span class="text">Postează</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="albums-outline"></ion-icon>
                        </span>
                        <span class="text">Istoric</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="build-outline"></ion-icon>
                        </span>
                        <span class="text">My work</span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>
    </section>
    </footer>
    <script src="/js/nav.js"></script>
    <script src="/js/sliderimg.js"></script>
  <!-- Ion icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
