
<?php
  if(isset($_POST['submit'])){
  // The plain text password to be hashed
  $plaintext_password = $_POST['password'];
  
  // The hash of the password that
  // can be stored in the database
  $hash = password_hash($plaintext_password, 
          PASSWORD_DEFAULT);
  
  // Print the generated hash
  echo "Generated hash: ".$hash;}
?>

<form action="passenc.php" method="post">
    <input type="text" name='password'>
    <input type="submit">
</form>