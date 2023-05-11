<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/config.php'?>
<?php  session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

echo "<h1> Welcome, ".$_SESSION["firstName"]."! </h1>";
?>
<?php require_once 'includes/footer.php' ?>