
<div id="product-container"><?php

include "backend/conn.php";


$sql = "SELECT * FROM `posts` ORDER BY `id` ASC;";
$result = mysqli_query($conn, $sql);

// Store the products in an array
$post = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $post[] = $row;
        $photo_names = explode(', ', $row['images']);
        $location="https://idcrew.shop/img/upload/" . $photo_names[1]; // Moved inside the while loop
        echo '<div class="post">';
        echo '<h2>' . $row['name'] . '</h2>';
        echo '<p>' . $row['description'] . '</p>';
        echo '<img src="' . $location . '" alt="' . $row['name'] . '">';
        //echo $location;
        echo '<p>Price: ' . $row['price'] . '</p>';
        echo '<p>Skills required: ' . $row['skills'] . '</p>';
        echo '</div>';
    }
}


?>
<h1>Products</h1>
</div>
<style>
    #product-container {
    display: flex;
    flex-wrap: wrap;
}

.product {
    width: 300px;
    margin: 10px;
    padding: 10px;
    border: 1px solid #ccc;
}

.product img {
    width: 100%;
    height: auto;
}

</style>