<?php
include "backend/conn.php";

if(isset($_GET['id']) && isset($_POST['del'])) {
    $id = $_GET['id'];

$sql = "DELETE FROM `posts` WHERE `posts`.`id` = '{$id}';";
$delete_query = mysqli_query($conn, $sql);
if(!$delete_query) {
   die('Query Failed'. mysqli_error($conn));
}
header("Location: history.php");
}
?>
