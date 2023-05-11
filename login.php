
<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/config.php'?>

<main class="form-signin w-25 m-auto">
  <form action="loginAction.php" method="post">
    <h1 class="h3 mb-3 fw-normal">Please login</h1>
    <div class="form-floating">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-floating">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
  </br>
    <button class="w-100 btn btn-lg btn-primary" type="submit" value="login">Login</button>
  </form>
</main>
<!-- include footer -->
<?php require_once 'includes/footer.php' ?>