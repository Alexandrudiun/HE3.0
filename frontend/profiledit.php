<?php include "../backend/profileditbk.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilul meu</title>
    <link rel="icon" href="/logos/logo192.jpg">
    <link rel="stylesheet" href="/css/profiledit.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="manifest" href="/manifest.json">
</head>

<body>
<div class="center">
    <div class="profile-card">
      <form action="#" method="post" enctype="multipart/form-data">
        <h1>Edit Profile</h1>
        <div class="input-box">
          <ion-icon name="person-outline"></ion-icon>
          <input type="text" id="name" name="name">
          <label for="">Name</label>
        </div>
        <div class="input-box">
          <ion-icon name="build-outline"></ion-icon>
          <textarea type="text" id="skills" name="skills" rows="5"></textarea>
          <label for="">Skills</label>
        </div>
        <div class="input-box">
          <ion-icon name="camera-outline" class="camera-icon"></ion-icon>
          <input type="file" accept="image/*" name="image" id="image">
          <label class="change-profile">Change Profile Picture</label>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Save" class="btn-login">
          </div>
      </form>
    </div>
  </div> 
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
                    <a href="/frontend/profil.php">
                        <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="text">Profil</span>
                    </a>
                </li>
                <li class="list">
                    <a href="/frontend/post.php">
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
  <!-- Ion icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>