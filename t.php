<?php
if(isset($_POST['submit'])){
    include "/backend/conn.php";

    session_start(); // Start the session

    if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
        $email = $_SESSION['email'];
        $name = $_POST['name'];
        $title = $_POST['titlu'];
        $price = $_POST['pret'];
        $description = $_POST['descriere'];
        $skills = $_POST['skills'];
        $images = array(); // initialize the images array

        // Check if the user uploaded images
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        $uploadCount = 0;

        foreach($_FILES['file']['name'] as $key => $fileName){
            $fileTmpName = $_FILES['file']['tmp_name'][$key]; 
            $fileSize = $_FILES['file']['size'][$key]; 
            $fileError = $_FILES['file']['error'][$key]; 
            $fileType = $_FILES['file']['type'][$key]; 

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                    if($fileSize < 1000000){
                        $fileNameNew = uniqid('', true).".".$fileActualExt;
                        $fileDestination = 'img/upload/'.$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $images[] = $fileNameNew; // add the file name to the images array
                        $uploadCount++;
                    } else {
                        echo "File $fileName is too big!<br>";
                    }
                } else {
                    echo "There was an error uploading file $fileName!<br>";
                }
            } else {
                echo "You cannot upload files of type $fileActualExt!<br>";
            }
        }

        if($uploadCount > 0){
            // Construct the query to insert the data into the database
            $query = "INSERT INTO products (name, title, price, description, skills, email) VALUES ('$name', '$title', '$price', '$description', '$skills', '$email')";
            
            if(mysqli_query($conn, $query)){
                // Get the ID of the last inserted row
                $product_id = mysqli_insert_id($conn);
                
                // Insert the images into the database
                foreach($images as $image){
                    $image_query = "INSERT INTO product_images (product_id, image_url) VALUES ('$product_id', '$image')";
                    mysqli_query($conn, $image_query);
                }
                
                echo "Product uploaded successfully!";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Please select at least one image to upload!";
        }
        
        mysqli_close($conn);
    } else {
        echo "You must be logged in to upload a product!";
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="titlu" placeholder="Title"><br>
    <input type="text" name="pret" placeholder="Price"><br>
    <textarea name="descriere" placeholder="Description"></textarea><br>
    <input type="text" name="skills">
    <input type="file" name="file[]" multiple><br>
    <input type="submit" name="submit" value="Upload">
</form>

