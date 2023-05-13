
<div id="product-container"><?php

include "conn.php";


$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);

// Store the products in an array
$post = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $post[] = $row;
    }
}
$location="img/upload/" . $post['images'];
foreach ($post as $post) {
    echo '<div class="post">';
    echo '<h2>' . $post['name'] . '</h2>';
    echo '<p>' . $post['description'] . '</p>';
    echo '<img src="' . $location . '" alt="' . $post['name'] . '">';
    echo '<p>Price: ' . $post['price'] . '</p>';
    echo '<p>Skills required: ' . $post['skills'] . '</p>';
    echo '</div>';
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