<?php
$worker =1;
$buyer =1;
if ($worker == 1 && $buyer == 1) {
    // Check if the button was clicked
    if (isset($_POST['toggle_profile_type'])) {
        // Toggle the profile type value
        $profiletype_temp = ($profiletype_temp == 1) ? 0 : 1;
    }
    
    // Display the toggle button with the current profile type value
    echo "<form method='post'><button type='submit' name='toggle_profile_type'>Switch profile type to $profiletype_temp</button></form>";
} else if ($worker == 1 && $buyer == 0) {
    echo "worker";
} else {
    echo "buyer";
}
?>