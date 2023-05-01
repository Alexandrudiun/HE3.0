<form action="post.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple>
    <input type="submit" name="submit" value="Upload">
</form>
<?php
if(isset($_POST['submit'])){
    $files = $_FILES['file'];
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    $uploadCount = 0;

    foreach($files['name'] as $key => $fileName){
        $fileTmpName = $files['tmp_name'][$key]; 
        $fileSize = $files['size'][$key]; 
        $fileError = $files['error'][$key]; 
        $fileType = $files['type'][$key]; 

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 1000000){
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = '../img/upload/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
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
        header("Location: post.php?uploadsuccess");
    }
}


