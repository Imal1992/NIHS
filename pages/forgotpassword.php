<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bootbusiness | Short description about company">
  <meta name="author" content="Imal Thiunuwan">
  <title>SLNA official site | Forgot Password page</title>
  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap responsive -->
  <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
  <!-- Font awesome - iconic font with IE7 support -->
  <link href="../css/font-awesome.css" rel="stylesheet">
  <link href="../css/font-awesome-ie7.css" rel="stylesheet">
  <!-- Bootbusiness theme -->
  <link href="../css/boot-business.css" rel="stylesheet">
</head>
<body>
<!-- Start: HEADER -->
<header>
  <!-- Start: Navigation wrapper -->
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a href="index.php" class="brand brand-bootbus">SLNA</a>
        <!-- Below button used for responsive navigation -->
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Start: Primary navigation -->
        <div class="nav-collapse collapse">
        </div>
      </div>
    </div>
  </div>
  <!-- End: Navigation wrapper -->
</header>
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Forgot Password</h1>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-lock"></i> Enter your email address</h4>
            <div class="widget-body">
              <div class="center-align">

                <?php
                    if(!empty($_POST["forgot-password"])){
                      $conn = mysqli_connect("localhost", "root", "", "nur_db");
                      
                      $condition = "";
                      if(!empty($_POST[""])) 
                        $condition = " fname = '" . $_POST["fname"] . "'";
                      if(!empty($_POST["email"])) {
                        if(!empty($condition)) {
                          $condition = " and ";
                        }
                        $condition = " email = '" . $_POST["email"] . "'";
                      }
                      
                      if(!empty($condition)) {
                        $condition = " where " . $condition;
                      }

                      $sql = "Select * from userdetail " . $condition;
                      $result = mysqli_query($conn,$sql);
                      $user = mysqli_fetch_array($result);
                      
                      if(!empty($user)) {
                        require_once("../backend files/forgot-password-recovery-mail.php");
                      } else {
                        $error_message = 'No User Found';
                      }
                    }
                  ?>
                  <link href="demo-style.css" rel="stylesheet" type="text/css">

                  <script>
                      function validate_forgot() {
                          if((document.getElementById("fname").value == "") && (document.getElementById("email").value == "")) {
                            document.getElementById("validation-message").innerHTML = "Login name or Email is required!"
                            return false;
                          }
                          return true
                        }
                  </script>
                  <form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
                        <h1>Forgot Password?</h1>
                          <?php if(!empty($success_message)) { ?>
                          <div class="success_message"><?php echo $success_message; ?></div>
                          <?php } ?>

                          <div id="validation-message">
                            <?php if(!empty($error_message)) { ?>
                          <?php echo $error_message; ?>
                          <?php } ?>
                          </div>

                          <div class="field-group">
                            <div><label for="username">Username</label></div>
                            <div><input type="text" name="fname" id="fname" class="input-field"> Or</div>
                          </div>
                          
                          <div class="field-group">
                            <div><label for="email">Email</label></div>
                            <div><input type="text" name="email" id="email" class="input-field"></div>
                          </div>
                          
                          <div class="field-group">
                            <div><input type="submit" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button"></div>
                          </div>  
                  </form>

                <!-- <span><?php echo $error; ?></span> -->

              </div>
            </div>
          </div>
        </div>
      </div><br><br><br><br><br>
    </div>
    <!-- End: MAIN CONTENT -->
<!-- Start: FOOTER -->
<footer>
  <div class="container">
    <p>
      &copy; 2017 SLNA All Rights Reserved.
    </p>
  </div>
</footer>
<!-- End: FOOTER -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/boot-business.js"></script>
  </body>
</html>