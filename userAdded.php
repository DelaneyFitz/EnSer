<!-- include navigation bar -->
<?php require_once 'includes/header.php'?>

<?php require_once 'includes/config.php'?>

<?php

$userType = $_POST["userType"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO user (userType, firstName, lastName, email, password)
VALUES ('$userType', '$firstName', '$lastName', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>".$firstName." was successfully added! </h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!-- include footer -->
<?php require_once 'includes/footer.php' ?>