<?php
function logoutanddeletecookies() {
  session_start();
  session_destroy();
  setcookie("email", "", time() - 3600);
  setcookie("password", "", time() - 3600);
  if (headers_sent()) {
    echo "Headers already sent, cannot redirect";
  }
  else {
    echo "Redirecting to index.php...";
    header("Location: ../index.php");
    exit;
  }
}
logoutanddeletecookies();
?>
