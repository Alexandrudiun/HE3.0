<?php 
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password']))
{ 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        echo '<a style="text-decoration:none;" href="/backend/serviceeditext.php?id=' . $id . '">';
        echo '<button>Editeaza doar contintul text al Anuntului</button>';
        echo '</a>';
        echo '<a style="text-decoration:none;" href="/backend/ServiceedittextAndPhotos.php?id=' . $id. '">';
        echo '<button>Editeaza tot Anuntulu</button>';
        echo '</a>';
        echo '<a style="text-decoration:none;" href="/backend/del.php?id=' . $id . '">';
        echo '<div class="delete-btn">';
        echo '<ion-icon name="close-outline"></ion-icon>';
        echo '<span>Șterge postarea</span>';
        echo '</div>';
        echo '</a>';
    }
else {
    header("Location: ../backend/history.php");
} 
}
    else {
        header("Location: ../index.php");
    } ?>