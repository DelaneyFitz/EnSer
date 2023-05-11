<?php
   session_start();
   unset($_SESSION["id"]);
   unset($_SESSION["firstName"]);
   unset($_SESSION["loggedin"]);
   unset($_SESSION["userType"]);
   
   echo '<h1>You have successfully logged out!</h1>';
   header('Refresh: 2; URL = http://localhost:8080/Project/login.php');
?>