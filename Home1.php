<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilul meu</title>
    <link rel="icon" href="/logos/logo192.jpg">
    <link rel="stylesheet" href="index.css">
    <link rel="manifest" href="/manifest.json">
</head>
<body>
  <div class="center">
    <div class="profile-card">
      <form action="#">
        <div class="input-box">
          <ion-icon name="mail-outline"></ion-icon>
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
</body>
</html>