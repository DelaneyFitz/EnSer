<!-- include navigation bar -->
<?php require_once 'includes/header.php';?>
<?php require_once 'includes/config.php';?>

<?php

$inputEmail = "'".$_POST["email"]."'";
$inputPassword = $_POST["password"];

//return account info from the provided email
$sql = "SELECT id, userType, firstName, lastName, password FROM user WHERE email=$inputEmail";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

//check that an account exists under the provided email
if($result->num_rows > 0){
	$id = $row["id"];
	$userType = $row["userType"];
	$firstName = $row["firstName"];
	$lastName = $row["lastName"];
	$password = $row["password"];
	//check that the password provided matches the account password
	if($inputPassword == $password){
		session_start();
		$_SESSION["loggedin"] = true;
		$_SESSION["id"] = $id;
		$_SESSION["firstName"] = $firstName;
		$_SESSION["lastName"] = $lastName;
		$_SESSION["userType"] = $userType;
		header("location: welcome.php");
	} else {
		echo "Incorrect password";
	}

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	echo "<br> Incorrect email address <br>";
	}

$conn->close();
?>

<!-- include footer -->
<?php require_once 'includes/footer.php'; ?>
