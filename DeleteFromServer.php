<?php $imagePath = '../img/upload/64672a742897d7.52395259.jpg';

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