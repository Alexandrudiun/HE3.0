<?php $imagePath = 'https://idcrew.shop/img/upload/6468cb0149e576.23684867.jpg';

// Check if the file exists
if (file_exists($imagePath)) {
    // Delete the file
    if (unlink($imagePath)) {
        // File deleted successfully
        echo 'Image deleted successfully.';
    } else {
        // Failed to delete the file
        echo 'Failed to delete the image.';
    }
} else {
    // File does not exist
    echo 'Image does not exist.';
}
?>