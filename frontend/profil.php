<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilul meu</title>
    <link rel="icon" href="/logos/logo192.jpg">
    <link rel="stylesheet" href="/css/profil.css">
    <link rel="manifest" href="/manifest.json">
</head>
<body>
    <main>
        <div class="center">
    <div class="profile-card">
        <div class="image" id="image">
             <img src="/img/user.png" alt="user image" class="profile-img">

      </div> 
        <div class="text-data">
            <!-- Aici vine php cu echo si script pentru email -->
            <span class="name"><div id="name">1</div></span>
            <span class="jobs"><div id="skills">1</div></span>
        </div>
    </div>
        </div>

    <div class="btn-container">
        <a href="post.php" class="btn-post">Publică un anunţ</a>
    </div>
    
    </main>
    <footer>
        <!-- Navbar Down -->
    <section class="nav-bar">
        <div class="navigation">
            <ul>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Acasă</span>
                    </a>
                </li>
                <li class="list active">
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="text">Profil</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="add-circle-outline"></ion-icon>
                        </span>
                        <span class="text">Adaugă anunţ</span>
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



    <!-- Old design -->
  <!-- <header>
      <div class="banner-container">
          <img src="/img/user.png" alt="user-image" class="user">
          <a href="#" class="edit">EDITEAZĂ</a>
      </div>
  </header>

  <div id="message"></div>


  <div class="btn-container">
  <a href="post.php" class="btn-post">Publică un anunţ</a>
  </div>
  <main>
    <section class="section-1">
      <h3 class="title">Anunţurile tale</h3>
      <a href="" class="active-link">
      <div class="active-section">
        <h3>Anunţuri active</h3>
        <div class="active-section-left">
          <a href="#">2</a>
          <ion-icon name="arrow-forward-outline"></ion-icon>
        </div>
        </a>
      </div>
      <div class="active-section">
        <a href="" class="active-link">
        <h3>Anunţuri dezactivate</h3>
        <div class="active-section-left">
          <a href="#">5</a>
          <ion-icon name="arrow-forward-outline"></ion-icon>
        </div>
        </a>
      </div>
    </section>
  </main> -->
  <script src="/js/nav.js"></script>
  <!-- Ion icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php

session_start(); // Start the session
include "conn.php"; 
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
echo $email;
    $query="SELECT * FROM users WHERE email = '{$email}'";
    $select_user_query = mysqli_query($conn, $query);
    
    if(!$select_user_query)
    {
      die('Query Failed'. mysqli_error());
    }
    if(mysqli_num_rows($select_user_query) > 0) {
        while($row = mysqli_fetch_assoc($select_user_query)) {
            $db_email = $row['email'];
            $db_password = $row['password'];
            $db_name = $row['name'];
            $db_skills = $row['skills'];
            $db_image = $row['image'];
        }
    }
    echo $db_name;
    echo $db_skills;
    echo $db_image;
    echo $db_email;
    echo $db_password;
}