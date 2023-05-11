<!-- include navigation bar -->
<?php require_once 'includes/header.php' ?>
<div class="form-signin w-25 m-auto">
<h1> Add a Project </h1>

<?php require_once 'includes/config.php'?>

<form action="projectAdded.php" method="post">
	<div class="form-group">
		<label for="projectName">Project Name</label>
		<input type="text" class="form-control" id="projectName" name="projectName" placeholder="My Project">
	</div>
	<div class="form-group">
		<label for="dueDate">Due Date</label>
		<input type="text" class="form-control" id="dueDate" name="dueDate" placeholder="YYYY-MM-DD" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
	</div>
	<div class="form-group">
		<label for="desiredOutcome">Technologies to be Used</label>
		<textarea class="form-control" id="technologies" name="technologies" placeholder="Python, SQL, JavaScript, REST APIs, Git, etc." rows="1"></textarea>	
	</div>
	<div class="form-group">
		<label for="desiredOutcome">Topics Covered</label>
		<textarea class="form-control" id="topics" name="topics" placeholder="Web Developement, Data Science, Machine Learning, IOT Devices, Security Analysis, etc." rows="2"></textarea>	
	</div>
	<div class="form-group">
		<label for="desiredOutcome">Industry Area</label>
		<textarea class="form-control" id="industries" name="industries" placeholder="Medical, Financial, Education, Energy, Real Estate, etc." rows="2"></textarea>	
	</div>
	<div class="form-group">
		<label for="desiredOutcome">Desired Experience</label>
		<textarea class="form-control" id="experience" name="experience" placeholder="Work Experience, Projects, Research, Organizations, etc." rows="2"></textarea>	
	</div>
	<div class="form-group">
		<label for="description">Project Description</label>
		<textarea class="form-control" id="description" name="description" rows="3"></textarea>
	</div>
<input type="submit">
</form>
</div>


<!-- include footer -->
<?php require_once 'includes/footer.php' ?>