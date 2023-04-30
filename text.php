<?php
session_start();
$profiletype_temp = isset($_SESSION['profiletype_temp']) ? $_SESSION['profiletype_temp'] : 0;

if ($profiletype_temp) {
    echo "worker";
} else {
    echo "buyer";
}

echo "<form method='post'><button type='submit' name='toggle_profile_type'>Switch profile type</button></form>";

if (isset($_POST['toggle_profile_type'])) {
    $profiletype_temp = $profiletype_temp ? 0 : 1;
    $_SESSION['profiletype_temp'] = $profiletype_temp;
}
?>
