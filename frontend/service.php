<?php
// Check if the 'id' parameter exists in the URL
if (isset($_GET['id'])) {
  // Retrieve the value of the 'id' parameter
  $id = $_GET['id'];

  // You can use the $id variable for further processing
  // For example, you can echo the value or use it in a database query
  echo "ID: " . $id;

  // Other processing with the $id variable...
} else {
  // Handle the case when the 'id' parameter is not present in the URL
  echo "ID not found in the URL.";
}
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

include "../backend/conn.php";


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
    }

}

?>
    
  </section>



  
  <main>
    <div class="top-details">
      <div class="date">
        <span>12 mai, 9:48</span>
      </div>
      <div class="title">
        <h3>Plimb câini zona Tomis Nord </h3>
      </div>
      <div class="price">
        <h2>100 lei / h</h2>
      </div>
    </div>
    <div class="description">
      <h3>Descrierea serviciului</h3>
      <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi amet soluta nemo. Labore nostrum nobis aliquam tenetur recusandae blanditiis veritatis porro commodi debitis? Dolorem illo nulla non consequatur doloremque, iusto praesentium dolorum veniam harum ad quam id sunt accusamus eveniet inventore a quasi? Tenetur, asperiores nam vel distinctio laudantium quam neque est, sit eius minima voluptatum recusandae tempora voluptates doloremque!</p>
    </div>

    <div class="profile-details">
      <img src="/img/user.png" class="img-profile">
      <div class="profile-name">
        <h3>Ionescu Andrei</h3>
        <span>Web dev | Front-End Developer</span>
      </div>
    </div>
  </main>

  <footer>
    <div class="buy">
      <a href="+040721333445"  class="call">Call / SMS</a>
      <span class="buy-btn"> Buy now!</Sspan>
    </div>
  </footer>
</body>
</html>