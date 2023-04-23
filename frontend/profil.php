<?php

include "../backend/profilbk.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <link rel="icon" href="/logos/logo192.jpg">
    <link rel="stylesheet" href="/css/profil.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="manifest" href="/manifest.json">
</head>
<body>
    <main>
        <div class="center">
            <div class="profile-card">
                <div class="image">
                    <?php if($image==NULL)
                        echo "<img src='/img/user.png' class='profile-img'>"?>
                    <img src="data:image/jpeg;base64,<?=base64_encode($image)?>" alt="<?=$name?>" class="profile-img">

            </div>
            <div class="text-data">
            <!-- Aici vine php cu echo si script pentru email -->
                <span class="name"><?php echo $name?></span>
                <span class="jobs"><?php echo $skills?></span>
                <div class="accout-settings">
                    <div class="flex-edit">
                        <a href="profiledit.php" class="edit">Edit Profile</a>
                        <ion-icon name="create-outline" class="icon"></ion-icon>
                    </div>
                    <div class="flex-edit">
                        <a href="/backend/logoutbk.php" class="logout">Logout</a>
                        <ion-icon name="log-out-outline" class="icon"></ion-icon>
                    </div>
                </div>
                <div class="credits credits-margin">
                    <h3>Credits: 100 lei</h3>
                    <div class="flex-edit">
                    <a href="#" class="credits">Add</a>
                    <ion-icon name="add-circle-outline"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
        </div>

    <div class="btn-container">
        <a href="post.php" class="btn-post">Publică un anunţ</a>
    </div>
    
    </main>
    <!-- Navbar Down -->
    <footer>  
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
  <script src="/js/nav.js"></script>
  <!-- Ion icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
