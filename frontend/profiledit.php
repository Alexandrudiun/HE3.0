<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilul meu</title>
    <link rel="icon" href="/logos/logo192.jpg">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="manifest" href="/manifest.json">
</head>
<body>
  <div class="center">
    <div class="profile-card">
      <form action="#">
        <div class="input-box">
        <ion-icon name="person-outline"></ion-icon>
          <input type="text" id="name" name="name">
          <label for="">Name</label>
        </div>
        <div class="input-box">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="email" id="email" name="email">
          <label for="">Email</label>
        </div>
        <div class="input-box">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="text" id="skills" name="skills">
          <label for="">Skills</label>
        </div>
        <div class="input-box">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="file" id="imageFile" capture="user" accept="image/*"name="image">
          <label for="">Change Profile Picture</label>
        </div>
      </form>
    </div>
  </div>
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

</body>
</html>