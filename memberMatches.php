<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/config.php'?>

<div class="w-75 m-auto">
<h1> Your Matches </h1>
<?php  session_start();
$score = 0;
$techScore = 0;
$topicScore = 0;
$industryScore = 0;
$expScore = 0;


$project = "SELECT * FROM `project_info` WHERE userID=".$_SESSION["id"];
$student = "SELECT * FROM `student_profiles` INNER JOIN `user` ON student_profiles.userID=user.id";

if ($projectResult = $conn->query($project)) {

    while ($projectRow = $projectResult->fetch_assoc()) {
        $dueDate = $projectRow["dueDate"];
        $projectTechnologies = $projectRow["technologies"];
        $projectTopics = $projectRow["topics"];
        $projectIndustries = $projectRow["industries"];
        $projectExperience = $projectRow["experience"];
        $projectDescription = $projectRow["description"];
        if ($studentResult = $conn->query($student)) {

        while ($studentRow = $studentResult->fetch_assoc()) {
            $firstName = $studentRow["firstName"];
            $lastName = $studentRow["lastName"];
            $gradDate = $studentRow["gradDate"];
            $studentTechnologies = $studentRow["technologies"];
            $studentTopics = $studentRow["topics"];
            $studentIndustries = $studentRow["industries"];
            $studentExperience = $studentRow["experience"];
            $email = $studentRow["email"];

            similar_text($projectTechnologies,$studentTechnologies,$techScore);
            similar_text($projectTopics,$studentTopics,$topicScore);
            similar_text($projectIndustries,$studentIndustries,$industryScore);
            similar_text($projectExperience,$studentExperience,$expScore);

            $score = ($techScore + $topicScore + $industryScore + $expScore)/4;
            
            if($dueDate < $gradDate && $score > 30){
            	echo 
    	       '<div class="card">
                <div class="card-body">
                    <h5 class="card-title">'.$firstName.' '.$lastName.'</h5>
                <p class="card-text"><b>Graduation Date: </b>'.$gradDate.'</h6>
                <p class="card-text"><b>Familiar Technologies: </b>'.$studentTechnologies.'<p>
                <p class="card-text"><b>Topics of Interest: </b>'.$studentTopics.'<p>
                <p class="card-text"><b>Industries of Interest: </b>'.$studentIndustries.'<p>
                <p class="card-text"><b>Revlevant Experience: </b>'.$studentExperience.'<p>
                <p class="card-text"><b>Contact: </b>'.$email.'<p>
                </div>
                </div>
                </br>';
            }

        }

/*freeresultset*/
$studentResult->free();
}

    }
/*freeresultset*/
$projectResult->free();
}

?>
</div>
<!-- include footer -->
<?php require_once 'includes/footer.php' ?>