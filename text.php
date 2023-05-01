
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple>
    <input type="submit" name="submit" value="Upload">
</form>

<?php
if(isset($_POST['submit'])){
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
    $file = $_FILES['file'][$i];
    $fileName = $_FILES['file']['name'][$i];
    $fileTmpName = $_FILES['file']['tmp_name'][$i];
    $fileSize = $_FILES['file']['size'][$i]; 
    $fileError = $_FILES['file']['error'][$i]; 
    $fileType = $_FILES['file']['type'][$i]; 
    

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'img/upload/'.$fileNameNew;
                move_uploaded_file($_FILES['file']['tmp_name'][$i]; , $fileDestination);
                header("Location: text.php?uploadsuccess");
            } else {
                echo "Your file is too big!";
            }
        } else {
            echo "There was an error uploading your file!";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
}

}