<?php 

if(isset($_SESSION['email']) && isset ($_SESSION['password'])) 
 echo "You are logged in!";
else
 echo "You are not logged in!";
 