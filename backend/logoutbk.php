<!-- https://www.php.net/session_destroy -->
<?php 
function logoutanddeletecookies() {
//   session_start();
//   session_destroy();
//   setcookie("email", "", time() - 3600);
//   setcookie("password", "", time() - 3600);
  header("Location: ../index.php");
}
logoutanddeletecookies();
?>