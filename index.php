<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/uf-style.css">
    <title>Online Air Ticketing Login</title>
  </head>
  <body>
    <div class="uf-form-signin">
      <div class="text-center">
        <a href="https://uifresh.net/"><img src="./assets/img/logo-fb.png" alt="" width="100" height="100"></a>
      <h1 class="text-white h3">Account Login</h1>
      </div>
      <form class="mt-4" method="post" action="register.php">
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-user"></span>
          <input type="text" id = "email" name="email" class="form-control" placeholder="Email address">
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-lock"></span>
          <input type="password" id ="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="d-flex mb-3 justify-content-between">
          <div class="form-check">
            <input type="checkbox" class="form-check-input uf-form-check-input" id="exampleCheck1">
            <label class="form-check-label text-white" for="exampleCheck1">Remember Me</label>
          </div>
          <a href="forgor.php">Forgot password?</a>
        </div>
        <div class="d-grid mb-4">
          <input type="submit" class="btn uf-btn-primary btn-lg" value="Login" name="signIn">
        </div>
        <div class="d-flex mb-3">
            <div class="dropdown-divider m-auto w-25"></div>
            <small class="text-nowrap text-white">Or login with</small>
            <div class="dropdown-divider m-auto w-25"></div>
        </div>
        <div class="uf-social-login d-flex justify-content-center">
          <a href="#" class="uf-social-ic" title="Login with Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="uf-social-ic" title="Login with Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" class="uf-social-ic" title="Login with Google"><i class="fab fa-google"></i></a>
        </div>
        <div class="mt-4 text-center">
          <span class="text-white">Don't have an account?</span>
          <a href="signup.php">Sign Up</a>
        </div>
      </form>
      
    </div>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/script.js"></script>
  </body>
</html>