<!-- include navigation bar -->
<?php require_once 'includes/header.php' ?>
<div class="w-75 m-auto">
<h1> Projects </h1>
<?php require_once 'includes/config.php'?>

<?php  
$sql = "SELECT * FROM project_info";

if ($result = $conn->query($sql)) {

    while ($row = $result->fetch_assoc()) {
        $projectName = $row["projectName"];
        $dueDate = $row["dueDate"];
        $technologies = $row["technologies"];
        $topics = $row["topics"];
        $industries = $row["industries"];
        $experience = $row["experience"];
        $description = $row["description"];

        echo 
		'<div class="card">
  		<div class="card-body">
    		<h5 class="card-title">'.$projectName.'</h5>
    	<p class="card-text"><b>Due by: </b>'.$dueDate.'</p>
    	<p class="card-text"><b>Technologies to be Used: </b>'.$technologies.'<p>
        <p class="card-text"><b>Topics: </b>'.$topics.'<p>
        <p class="card-text"><b>Industries: </b>'.$industries.'<p>
        <p class="card-text"><b>Desired Experience: </b>'.$experience.'<p>
        <p class="card-text"><b>Description: </b>'.$description.'<p>
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