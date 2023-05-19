<?php 
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password']))
{
    if (isset($_GET['id'])) {

        $id = $_GET['id'];
    }
    else {
        header("Location: /frontend/error404.html");
    }












}

else{
    header("Location: /index.php");
}
?>
