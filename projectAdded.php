<!-- include navigation bar -->
<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/config.php'?>

<?php
$userID = $_SESSION["id"];
$projectName = $_POST["projectName"];
$dueDate = $_POST["dueDate"];
$technologies = $_POST["technologies"];
$topics = $_POST["topics"];
$industries = $_POST["industries"];
$experience = $_POST["experience"];
$description = $_POST["description"];

$sql = "INSERT INTO project_info (projectName, dueDate, technologies, topics, industries, experience, description, userID)
VALUES ('$projectName', '$dueDate','$technologies', '$topics', '$industries', '$experience', '$description', '$userID')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>".$_POST["projectName"];
  echo " was successfully added! </h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!-- include footer -->
<?php require_once 'includes/footer.php' ?>