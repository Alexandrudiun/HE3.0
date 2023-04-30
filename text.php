<?php
                $worker = 1 ; $buyer = 1;
if ($worker == 1 && $buyer == 1) {
    // Display the toggle button with the current profile type value
    echo "<button id='toggle-button' onclick='toggleProfileType()'>Switch profile type to $profiletype_temp</button>";

    // Define the JavaScript function to toggle the profile type value
    echo "<script>
        function toggleProfileType() {
            var button = document.getElementById('toggle-button');
            var profileType = button.textContent.split(' ')[4]; // Extract the current profile type value from the button text
            if (profileType === '0') {
                button.textContent = 'Switch profile type to 1';
            } else {
                button.textContent = 'Switch profile type to 0';
            }
        }
        </script>";
} else if ($worker == 1 && $buyer == 0) {
    echo "worker";
} else {
    echo "buyer";
}
?>
