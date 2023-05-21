<?php 
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password']))
{ 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        echo '<a style="text-decoration:none;" href="/backend/serviceeditext.php?id=' . $id . '">';
        echo '<button></button>';
        echo '</a>';
        echo '<a style="text-decoration:none;" href="/backend/ServiceedittextAndPhotos.php?id=' . $id. '">';
        echo '<button></button>';
        echo '</a>';
        
    }
else {
    header("Location: ../backend/history.php");
} 
}
    else {
        header("Location: ../index.php");
    } ?>