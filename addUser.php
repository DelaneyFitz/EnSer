<!-- include navigation bar -->
<?php require_once 'includes/header.php' ?>

<?php require_once 'includes/config.php'?>

<main class="form-signin w-25 m-auto">
  <form action="userAdded.php" method="post">
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
  </br>
  <p> I am a:
  <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active">
      <input type="radio" name="userType" id="student" value="student" checked> Student
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="userType" id="communityMember" value="communityMember"> Community Member
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="userType" id="instructor" value="instructor"> Instuctor
    </label>
  </div>
  </p>
  </br>
    <div class="form-floating">
      <label for="firstName">First Name</label>
      <input type="text" class="form-control" id="floatingInput" name="firstName">
    </div>
    <div class="form-floating">
      <label for="lastName">Last Name</label>
      <input type="text" class="form-control" id="floatingInput" name="lastName">
    </div>
    <div class="form-floating">
      <label for="email">Email address</label>
      <input type="text" class="form-control" id="floatingInput" name="email">
    </div>
    <div class="form-floating">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="floatingPassword" name="password">
    </div>
  </br>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
  </form>
</main>

<!-- include footer -->
<?php require_once 'includes/footer.php' ?>