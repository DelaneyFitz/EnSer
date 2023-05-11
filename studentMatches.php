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

$student = "SELECT * FROM `student_profiles` WHERE userID=".$_SESSION["id"];
$project = "SELECT * FROM `project_info` INNER JOIN `user` ON project_info.userID=user.id";

if ($studentResult = $conn->query($student)) {

    while ($studentRow = $studentResult->fetch_assoc()) {
        $gradDate = $studentRow["gradDate"];
        $studentTechnologies = $studentRow["technologies"];
        $studentTopics = $studentRow["topics"];
        $studentIndustries = $studentRow["industries"];
        $studentExperience = $studentRow["experience"];
        if ($projectResult = $conn->query($project)) {

            while ($projectRow = $projectResult->fetch_assoc()) {
                $projectName = $projectRow["projectName"];
                $projectTechnologies = $projectRow["technologies"];
                $projectTopics = $projectRow["topics"];
                $projectIndustries = $projectRow["industries"];
                $projectExperience = $projectRow["experience"];
                $projectDescription = $projectRow["description"];
                $firstName = $projectRow["firstName"];
                $lastName = $projectRow["lastName"];
                $email = $projectRow["email"];
                $dueDate = $projectRow["dueDate"];
                
                similar_text($studentTechnologies,$projectTechnologies,$techScore);
                similar_text($studentTopics,$projectTopics,$topicScore);
                similar_text($studentIndustries,$projectIndustries,$industryScore);
                similar_text($studentExperience,$projectExperience,$expScore);

            $score = ($techScore + $topicScore + $industryScore + $expScore)/4;
                
                if($gradDate > $dueDate && $score > 30){
                	echo 
                    '<div class="card">
                    <div class="card-body">
                        <h5 class="card-title">'.$projectName.'</h5>
                    <p class="card-text"><b>Due by: </b>'.$dueDate.'</p>
                    <p class="card-text"><b>Technologies to be Used: </b>'.$projectTechnologies.'</p>
                    <p class="card-text"><b>Topics: </b>'.$projectTopics.'<p>
                    <p class="card-text"><b>Industries: </b>'.$projectIndustries.'<p>
                    <p class="card-text"><b>Desired Experience: </b>'.$projectExperience.'<p>
                    <p class="card-text"><b>Description: </b>'.$projectDescription.'<p>
                    <p class="card-text"><b>Contact: </b>'.$firstName.' '.$lastName.', '.$email.'<p>
                    </div>
                    </div>
                    </br>';
                }
            }

        /*freeresultset*/
        $result2->free();
        }

    }
/*freeresultset*/
$result1->free();
}

?>
</div>
<!-- include footer -->
<?php require_once 'includes/footer.php' ?>