<?php
echo "da";
session_start(); // Start the session
include "conn.php"; echo"lol";
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $query="SELECT * FROM users WHERE email = '{$email}'";
    $select_user_query = mysqli_query($conn, $query);
    
    if(!$select_user_query)
    {
      die('Query Failed'. mysqli_error());
    }
    if(mysqli_num_rows($select_user_query) > 0) {
        while($row = mysqli_fetch_assoc($select_user_query)) {
            $db_email = $row['email'];
            $db_password = $row['password'];
            $db_name = $row['name'];
            $db_skills = $row['skills'];
            $db_image = $row['image'];
        }
    }
    echo "<h1>{$db_email}</h1>";
}
?>