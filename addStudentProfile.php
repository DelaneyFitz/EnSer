<!-- include navigation bar -->
<?php require_once 'includes/header.php' ?>
<div class="form-signin w-25 m-auto">
<h1> Add Student Profile</h1>

<?php require_once 'includes/config.php'?>

<form action="studentProfileAdded.php" method="post"> 
	<div class="form-group">
		<label for="gradDate">Graduation Date</label>
		<input type="text" class="form-control" id="gradDate" name="gradDate" placeholder="YYYY-MM-DD" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
	</div>
	<div class="form-group">
		<label for="desiredOutcome">Familiar Technologies</label>
		<textarea class="form-control" id="technologies" name="technologies" placeholder="Python, SQL, JavaScript, REST APIs, Git, etc." rows="1"></textarea>	
	</div>
	<div class="form-group">
		<label for="desiredOutcome">Topics of Interest</label>
		<textarea class="form-control" id="topics" name="topics" placeholder="Web Developement, Data Science, Machine Learning, IOT Devices, Security Analysis, etc." rows="3"></textarea>	
	</div>
	<div class="form-group">
		<label for="desiredOutcome">Industries of Interest</label>
		<textarea class="form-control" id="industries" name="industries" placeholder="Medical, Financial, Education, Energy, Real Estate, etc." rows="3"></textarea>	
	</div>
	<div class="form-group">
		<label for="desiredOutcome">Relevant Experience</label>
		<textarea class="form-control" id="experience" name="experience" placeholder="Work Experience, Projects, Research, Organizations, etc." rows="3"></textarea>	
	</div>
<input type="submit">
</form>
</div>


<!-- include footer -->
<?php require_once 'includes/footer.php' ?>
