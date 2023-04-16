<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFIL</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="manifest" href="/manifest.json">
</head>
<body>
<div class="search-container">
    <form action="#">
        <span class="search-icon"><ion-icon name="search"></ion-icon></span>
        <input type="text" name="" id="search-item" placeholder="Caută un serviciu..." onkeyup="search()">
    </form>
</div>

<div class="service-container" id="service-container">
    <p class="service">green apple</p>
    <p class="service">red apple</p>
    <p class="service">black cat</p>
    <p class="service">white cat</p>
    <p class="service">eating healthy</p>
    <p class="service">eating healthy</p>
    <p class="service">red tshirt</p>
    <p class="service">green tshirt</p>
</div>
    <div id="message"></div>

    <!-- Navbar Down -->
    <section class="nav-bar">
        <div class="navigation">
            <ul>
                <li class="list active">
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Acasă</span>
                    </a>
                </li>
                <li class="list">
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
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                        </span>
                        <span class="text">Chat</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="hammer-outline"></ion-icon>
                        </span>
                        <span class="text">Munca mea</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="text">Setări</span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>
    </section>
    <script src="nav.js"></script>
    <script src="search.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
include "profilbk.php";