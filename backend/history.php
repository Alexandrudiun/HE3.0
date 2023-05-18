<?php


        include "conn.php";
        session_start();


        if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

            $email=$_SESSION['email'];


            $query="SELECT * FROM posts WHERE email = '{$email}'";
            $result=mysqli_query($conn,$query);

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
        echo 'edit'
        echo '<h3 class="service-title">' . $row['title'] . '</h3>';
        echo '<h2 class="service-price">' . $row['price'] . '</h2>';
        echo '<span>' . $row['location'] . 'aici trb ceva (locatie era) </span>';
        echo '<span>' . $row['date'] . 'aici era data</span>';
        echo '</div>';
        echo '</div>';        
        
    }
    echo '</div>';
}
        }