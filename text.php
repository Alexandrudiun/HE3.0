<?php
//session_start();
//$profiletype_temp = isset($_SESSION['profiletype_temp']) ? $_SESSION['profiletype_temp'] : 0;

//if ($profiletype_temp) {
//    echo "worker";
//} else {
//    echo "buyer";
//}

//echo "<form method='post'><button type='submit' name='toggle_profile_type'>Switch profile type</button></form>";

//if (isset($_POST['toggle_profile_type'])) {
//    $profiletype_temp = $profiletype_temp ? 0 : 1;
//    $_SESSION['profiletype_temp'] = $profiletype_temp;
//}


?>
<form action="text.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" multiple="multiple">
    <input type="submit" name="submit" value="Upload">
</form>

<?php
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    for ($i = 0; $i < count($_FILES['file']['name']); $i++){
   
        $fileName = $_FILES['files']['name'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i]; 
        $fileSize = $_FILES['files']['size'][$i]; 
        $fileError = $_FILES['files']['error'][$i]; 
        $fileType = $_FILES['files']['type'][$i]; 
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                sleep(1);
                $fileNameNew = time() . '_' . uniqid('', true).".".$fileActualExt;

                // $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'img/upload/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
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

