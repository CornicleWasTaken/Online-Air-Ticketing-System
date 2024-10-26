<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/uf-style.css">
    <title>Online Air Ticketing Sign Up</title>
  </head>
  <body>
    <div class="uf-form-signin">
      <div class="text-center">
        <a href="https://uifresh.net/"><img src="./assets/img/logo-fb.png" alt="" width="100" height="100"></a>
      <h1 class="text-white h3">Account Register</h1>
      </div>
      <form class="mt-4" method="post" action="register.php">
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-user"></span>
          <input type="text" id="fName" name="fName" class="form-control" placeholder="First Name" required>
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-envelope"></span>
          <input type="text" id="lName" name="lName" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-lock"></span>
          <input type="text" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-lock"></span>
          <input type="password" id="pass" name = "pass" class="form-control" placeholder="Password" required>
        </div>
        <div class="d-grid mb-4">
          <input type="submit" class="btn uf-btn-primary btn-lg" value="Sign Up" name="signUp">
        </div>
        <div class="mt-4 text-center">
          <span class="text-white">Already a member?</span>
          <a href="index.php">Login</a>
        </div>
      </form>
    </div>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
  </body>
</html>