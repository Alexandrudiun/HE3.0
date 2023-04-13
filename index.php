<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | I&D CREW</title>
  <link rel="stylesheet" href="style.css">
  <!-- Bootstrap -->
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="title">Login</div>
      <form action="index.php" method="post">
          <div class="input-box">
          <span class="details">Email:</span>
          <input type="text" id="email" name="email" placeholer="Enter your email" required>
          </div>
          <div class="input-box">
          <span class="details">Password:</span>
          <input type="password" id="password" name="password" placeholer="Enter your password" required>
          </div>
    <div class="button">
      <input type="submit" name="submit" value="Login">
    </div>
  </form>
  </div>
</body>
</html>
<?php
include "login.php";