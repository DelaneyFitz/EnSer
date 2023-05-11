<?php session_start(); ?>

<!-- navigation bar header -->
<!doctype html>
<html>
  <head>
    <title>EnSer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="d-flex flex-column min-vh-100">
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="viewProjects.php">EnSer</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <?php
            if ($_SESSION["userType"] === "student"){
              echo
          '<li class="nav-item active">
            <a class="nav-link" href="/Project/viewProjects.php">View Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Project/addStudentProfile.php" tabindex="-1" >Add a Student Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Project/studentMatches.php">My Matches</a>
          </li>';}

          if($_SESSION["userType"] === "communityMember"){
            echo
          '<li class="nav-item active">
            <a class="nav-link" href="/Project/viewStudentProfiles.php">View Student Profiles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Project/addProject.php">Add a Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Project/memberMatches.php">My Matches</a>
          </li>';}
          if($_SESSION["userType"] === "instructor"){
            echo
          '<li class="nav-item active">
            <a class="nav-link" href="/Project/viewStudentProfiles.php">View Student Profiles</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/Project/viewProjects.php">View Projects</a>
          </li>';}
          ?>

        </ul>
        <div class="text-end">
          <?php
          if(isset($_SESSION["loggedin"])){
            echo '<a href="logout.php" class="btn btn-outline-secondary me-2" role="button" aria-pressed="true">logout</a>';
          } else {
            echo '<a href="login.php" class="btn btn-outline-secondary me-2" role="button" aria-pressed="true">Login</a>
          <a href="addUser.php" class="btn btn-secondary" role="button" aria-pressed="true">Sign up</a>';
          }
          ?>
        <div>
      </div>
    </nav>
  </header>
