<?php
include "path.php";
include (ROOT_PATH . '/app/controllers/users.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="assets/images/logo.png">
    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href=" https://unicons.iconscout.com/release/v4.0.0/css/line.css"> <!-- https://unicons.iconscout.com/release/v4.0.0/css/line.css -->

    <link rel="stylesheet" href="assets/css/login.css" />
    <title>Welcome || Sign In</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

        <!--==================== SIGN IN ====================-->
          <form action="login.php" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <?php include (ROOT_PATH . "/app/helpers/formErrors.php")?>
            <div class="input-field">
            <i class="uil uil-envelope-star"></i>
              <input type="email" placeholder="Email" name="email" value=<?php echo $email?>>
            </div>
            <div class="input-field">
            <i class="uil uil-lock-access"></i>
              <input type="password" placeholder="Password" name="password" value=<?php echo $password?> >
            </div>
            <div class="remember" >
                <input type="checkbox" id="rem" name="rememberMe" >
                <label for="rem"> Remember me ? </label><br>
            </div>
            
            <input type="submit" value="Login" class="btn solid" name="login" >

            <div class="forgot" >
                <p><a href="#" >Forgot your password?</a></p>
            </div>
            <div class="social-media">
              <a href="#" class="social-icon">
              <i class="uil uil-estate"></i>Home
              </a>
              
            </div>
            
          </form>
        <!--==================== SIGN UP ====================-->
          <form action="login.php" class="sign-up-form" method="POST">
            <h2 class="title">Sign up</h2>
            <?php include (ROOT_PATH . "/app/helpers/formErrors.php")?>
            <div class="input-field">
             <i class="uil uil-user"></i>
              <input type="text" placeholder="First Name" name="first_name" value=<?php echo $firstname?> >
            </div>
            <div class="input-field">
             <i class="uil uil-user"></i>
              <input type="text" placeholder="Second Name" name="second_name" value=<?php echo $secondname?> >
            </div>
            <div class="input-field">
              <i class="uil uil-envelope-star"></i>
              <input type="email" placeholder="Email" name="email" value=<?php echo $email?>>
            </div>
            <div class="input-field">
              <i class="uil uil-lock-access"></i>
              <input type="password" placeholder="Password" name="password" value=<?php echo $password?>>
            </div>
            <div class="input-field">
            <i class="uil uil-lock-access"></i>
              <input type="password" placeholder="Retype Password" name="passwordConf"value=<?php echo $passwordConf?>>
            </div>
            <input type="submit" class="btn-signup" value="Sign up" name="register" >
            <div class="social-media-signup">
              <a href="#" class="social-icon-signup">
              <i class="uil uil-estate"></i>Home
              </a>              
            </div>

            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Create an account with us!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="assets/images/undraw_Swipe_profiles_re_tvqm.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
                Want to hear something terrible? <br>Paper. See? I told you it was tear-able.
                Anyway, Welcome back.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="assets/images/undraw_feeling_proud_qne1.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="assets/js/app.js"></script>
  </body>
</html>
