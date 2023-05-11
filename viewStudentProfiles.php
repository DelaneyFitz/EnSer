<!-- include navigation bar -->
<?php require_once 'includes/header.php' ?>
<div class="w-75 m-auto">
<h1> Student Profiles </h1>

<?php require_once 'includes/config.php'?>

<?php  
$sql = "SELECT * FROM `student_profiles` INNER JOIN `user` ON student_profiles.userID=user.id";

if ($result = $conn->query($sql)) {

    while ($row = $result->fetch_assoc()) {
        $gradDate = $row["gradDate"];
        $technologies = $row["technologies"];
        $topics= $row["topics"];
        $industries = $row["industries"];
        $experience = $row["experience"];
        $firstName = $row["firstName"];
        $lastName = $row["lastName"];
        $email = $row["email"];

        echo 
        '<div class="card">
        <div class="card-body">
            <h5 class="card-title">'.$firstName.' '.$lastName.'</h5>
        <p class="card-text"><b>Graduation Date: </b>'.$gradDate.'</h6>
        <p class="card-text"><b>Familiar Technologies: </b>'.$technologies.'<p>
        <p class="card-text"><b>Topics of Interest: </b>'.$topics.'<p>
        <p class="card-text"><b>Industries of Interest: </b>'.$industries.'<p>
        <p class="card-text"><b>Revlevant Experience: </b>'.$experience.'<p>
        <p class="card-text"><b>Contact: </b>'.$email.'<p>
        </div>
        </div>
        </br>';
    }

/*freeresultset*/
$result->free();
}
echo '</div>';
?>

<!-- include footer -->
<?php require_once 'includes/footer.php' ?>