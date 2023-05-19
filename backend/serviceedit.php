<?php 
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password']))
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM `posts` WHERE id = '{$id}';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if($row['email']==$_SESSION['email'])
        {

            

        }

        else echo 'Acces Interzis';



    }
    else {
        header("Location: /frontend/error404.html");
    }
}

else{
    header("Location: /index.php");
}
?>
