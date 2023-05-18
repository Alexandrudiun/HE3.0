<?php
include "../backend/conn.php";

if (isset($_GET['id'])) {

  $id = $_GET['id'];
  echo "ID: " . $id;



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="icon" href="/img/logo192.jpg">
    <link rel="stylesheet" href="/css/service.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="manifest" href="/manifest.json">
</head>
<body>

  <section class="container">
  <?php

$sql = "SELECT * FROM `posts` WHERE id = '{$id}';";
$result = mysqli_query($conn, $sql);

// Store the products in an array
$post = array();
if (mysqli_num_rows($result) > 0) {
    echo '<div class="flex-container id="service-list">';
    while ($row = mysqli_fetch_assoc($result)) {
        $photo_names = explode(', ', $row['images']);
        $location="https://idcrew.shop/img/upload/" . $photo_names[0]; 
        echo '<div class="slide-wrapper">';
        echo '<div class="slider">';
        for($i=0;$i<3;$i++){
        echo '<img src="' . $location . '" alt="' . $row['name'] . '"  id="slide-'.$i.'">';
        }
        
        echo '</div>';

       echo '<div class="slider-nav">';
       echo '<a href="#slide-1"></a>';
       echo '<a href="#slide-2"></a>';
       echo '<a href="#slide-3"></a>';
       echo '</div>';
    echo'</div>';
  ?>
  </section>

  <main>
  <?php
  echo '<div class="top-details">';
  echo '<div class="date">';
  echo '<span>'.$row['date'].'</span>';
  echo '</div>';
  echo '<div class="title">';
  echo '<h3>'.$row['title'].'</h3>';
  echo '</div>';
  echo '<div class="price">';
  echo '<h2>'.$row['price'].'</h2>';
  echo '</div>';
  echo '</div>';
  echo '<div class="description">';
  echo '<h3>Descrierea serviciului</h3>';
  echo '<p>'.$row['description'].'</p>';
  echo '</div>';
   }
 include "../backend/profilbk.php";
}
} else {
 
  echo "ID not found in the URL.";
}
?>
  
  </main>

  <div class="profile-details">
  <div class="image">
            <?php if($image==NULL): ?>
            <img src='/img/user.png' class='profile-img'>
            <?php else: ?>
            <img src="data:image/jpeg;base64,<?=base64_encode($image)?>" alt="profile picture of <?=$name?>" class="profile-img">
            <?php endif; ?>
        </div>
  <div class="profile-name">
  <h3><?php echo $name?></h3>
 <span><?php echo $skills?></span>
  </div>
  </div>

  

  <footer>
    <div class="buy">
      <a href="+040721333445"  class="call">Call / SMS</a>
      <span class="buy-btn"> Buy now!</Sspan>
    </div>
  </footer>
</body>
</html>