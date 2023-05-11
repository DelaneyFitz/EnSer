<!-- include navigation bar -->
<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/config.php'?> 

<?php
$userID = $_SESSION["id"];
$gradDate = $_POST["gradDate"];
$technologies = $_POST["technologies"];
$topics = $_POST["topics"];
$industries = $_POST["industries"];
$experience = $_POST["experience"];

$sql = "INSERT INTO student_profiles (userID, gradDate, technologies, topics, industries, experience)
VALUES ('$userID', '$gradDate', '$technologies', '$topics', '$industries', '$experience')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>your profile was successfully added!</h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!-- include footer -->
<?php require_once 'includes/footer.php' ?>