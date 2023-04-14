<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | I&D CREW</title>
  <link rel="stylesheet" href="style.css"> <!-- add this line -->
</head>
<?php 
include "conn.php";
//test conecsiune DB
// if($conn){echo "OK";}
//   else{die("not ok");}

 if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];  
   $query="SELECT * FROM users WHERE email = '{$email}'";
    $select_user_query = mysqli_query($conn, $query);
    
    if(!$select_user_query)
    {
      die('Query Failed'. mysqli_error());
    }
    $email_found = false; // Flag variable to check if email was found
    while($row = mysqli_fetch_row($select_user_query)){
        if($row[1] !== $email) {
            continue; // Skip to next row if email doesn't match
        }
        $email_found = true;
        if($row[2] === $password) {
            echo "OK";
            exit; // Exit script after successful login
        }
        else {
            echo "<p class='error'>Parola incorecta</p>";
            exit; // Exit script after unsuccessful login
        }
    }

    if(!$email_found) {
        echo "Email neînregistrat";
    }
 }


