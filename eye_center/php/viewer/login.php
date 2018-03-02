<?php 
session_start();
$_SESSION['user-id']=-1;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Vision Eye Center</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../../css/libraries/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../../css/libraries/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="../../css/libraries/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../../css/libraries/style.default.css" id="theme-stylesheet">

  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>NEW VISION EYE CENTER</h1>
                  </div>
                  <p>Lasik/Laser Eye Surgeon.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                    <form id="login-form" method="post" action="../controller/login-controller.php">
                    <div class="form-group">
                      <input id="login-username" type="text" name="loginUsername" required="" class="input-material">
                      <label for="login-username" class="label-material">Username</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="loginPassword" required="" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div><button id="login" class="btn btn-primary" name="btn-login">Login</button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form>
                    <a href="#" class="forgot-pass">Forgot Password?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="../../js/libraries/jquery-3.2.1.min.js"></script>
    <script src="../../js/libraries/bootstrap.min.js"></script>
    <script src="../../js/libraries/front.js"></script>
    <script>
        alert("usernames: \n\
    admin\n\
 center-doctor\n\
 private-doctor\n\
 preoperative-doctor\n\
 receptionist\n\
 accountant\n\
 password: 123");
    </script>
  </body>
</html>
