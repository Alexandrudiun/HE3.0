<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/home.css">
  <title>Home</title>
</head>
<body>
  <div class="search-bar">
    <form action="#">
      <div class="flex-search">
      <input type="text" name="text" id="search-item" placeholder="Search..." onkeyup="search()">
      <button type="submit" name="submit"><ion-icon name="search-outline"></ion-icon></button>
      </div>
    </form>
  </div>
  <section>
  <div class="flex-2-column">
  <div class="cards">
<?php

include "../backend/conn.php";


$sql = "SELECT * FROM `posts` ORDER BY `id` ASC;";
$result = mysqli_query($conn, $sql);

// Store the products in an array
$post = array();
if (mysqli_num_rows($result) > 0) {
    echo '<div class="flex-container id="service-list">';
    while ($row = mysqli_fetch_assoc($result)) {
        $post[] = $row;
        $photo_names = explode(', ', $row['images']);
        $location="https://idcrew.shop/img/upload/" . $photo_names[0]; // Moved inside the while loop
        
        echo '<div class="card">';
        echo '<img src="' . $location . '" alt="' . $row['name'] . '" style="width: 100%;">';
        echo '<div class="info-area">';
        echo '<h3 class="service-title">' . $row['title'] . '</h3>';
        echo '<h2 class="service-price">' . $row['price'] . '</h2>';
        echo '<span>' . $row['location'] . 'aici trb ceva (locatie era) </span>';
        echo '<span>' . $row['date'] . 'aici era data</span>';
        echo '</div>';
        echo '</div>';        
        
    }
    echo '</div>';
}

?>
</div>
</section>
<!-- Navbar Down --> 
<footer>  
    <section class="nav-bar">
        <div class="navigation">
            <ul>
                <li class="list active">
                    <a href="/frontend/home.php">
                        <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Explorează</span>
                    </a>
                </li>
                <li class="list">
                    <a href="/frontend/profil.php">
                        <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="text">Profil</span>
                    </a>
                </li>
                <li class="list">
                    <a href="/frontend/post.php">
                        <span class="icon">
                            <ion-icon name="add-circle-outline"></ion-icon>
                        </span>
                        <span class="text">Postează</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="albums-outline"></ion-icon>
                        </span>
                        <span class="text">Istoric</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="build-outline"></ion-icon>
                        </span>
                        <span class="text">My work</span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>
    </section>
    </footer>
    <script src="/js/search.js"></script>
    <script src="/js/nav.js"></script>
    <script src="/js/sliderimg.js"></script>
  <!-- Ion icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>