<?php 
    include "conn.php";
    
    if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      //$confirm_password = $_POST['confirm-password'];
      $default_image_path = "/img/user.png";
      // Check if email is already registered
      $query = "SELECT * FROM users WHERE email = '{$email}'";
      $select_user_query = mysqli_query($conn, $query);
      if(!$select_user_query) {
        die('Query Failed'. mysqli_error());
      }
      if(mysqli_num_rows($select_user_query) > 0) {
        echo "<script>document.getElementById('message').innerHTML = 'Emailul este deja înregistrat click aici pentru login';</script>";
        exit;
      }

      // Check if password matches confirm password
      // if($password !== $confirm_password) {
      //   echo "<p class='error'>Passwords do not match</p>";
      //   exit;
      // }

      // Add new user to database
      
      $query = "INSERT INTO users (email, password, photo) VALUES ('{$email}', '{$password}', '{$default_image_path}')";
      $add_user_query = mysqli_query($conn, $query);
      if(!$add_user_query) {
        die('Query Failed'. mysqli_error());
      }
      
      echo "<script>document.getElementById('message').innerHTML = 'Ați fost inregistrat click aici pentru login';</script>";
    }
  ?>
</body>
</html>