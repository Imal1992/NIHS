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

                <form method="post" class="form-horizontal form-signin-signup"  action = "../backend files/send_link.php" autocomplete="on">
                  <input type="email" name="Email_address"  placeholder="Email Address" required="required">
                  <!-- <input type="password" name="password" placeholder="Password" required="required"> -->
                  <div class="remember-me">
                    <div class="pull-left">
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <input type="submit" value="Submit" name="submit" class="btn btn-primary btn-large">
                  <input type="reset" name="clear" value="Clear" class="btn btn-primary btn-large">
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