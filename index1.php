<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | I&D CREW</title>
  <link rel="stylesheet" href="style.css">
  <!-- Bootstrap -->
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section>
    <div class="form-box">
      <div class="form-value">
        <form action="index.php" method="Post">
          <h1>Register</h1>
          <div class="input-box">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="text" id="email" name="email" required>
          <label for="">Email</label>
          </div>
          <div class="input-box">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" id="password" name="password" required>
          <label for="">Password:</label>
          </div>
          <div class="input-box">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" id="confirmPassword" name="confirmPassword" required>
          <label for="">Confirm Password:</label>
          </div>
          <div class="forget">
            <label for=""><input type="checkbox">Tine-mă minte <a href="#">Am uitat parola</a></label>
          </div>
          <div class="button">
          <input type="submit" name="submit" value="Register">
          </div>
          <div class="register">
            <p>Ai deja un cont? <a href="index.php">Intră în cont! </a></p>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script src="index.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
include "login.php";