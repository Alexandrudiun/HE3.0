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
  <header>
      <div class="banner-container">
          <img src="/img/user.png" alt="user-image" class="user">
          <a href="#" class="edit">EDITEAZĂ</a>
      </div>
  </header>

  <div id="message"></div>


  <div class="btn-container">
  <a href="post.php" class="btn-post">Publică un anunţ</a>
  </div>
  <!-- Anunturi -->
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
  </main>
  <!-- Ion icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
include "/backend/profilbk.php";
