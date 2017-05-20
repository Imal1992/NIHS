<?php
include('../backend files/logincheck.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bootbusiness | Short description about company">
  <meta name="author" content="Imal Thiunuwan">
  <title>SLNA official site | Sign in page</title>
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
          <ul class="nav pull-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="about_us.php">About us</a></li>
                <li><a href="institutes.php">Institutes</a></li>
                <!--<li><a href="product.html">Product3</a></li>-->
                <!--<li><a href="all_products.html">All products</a></li>             -->
                <!--<li class="divider"></li>-->
                <!--<li class="nav-header">SERVICES</li>-->
                <!--<li><a href="service.html">Service1</a></li>-->
                <!--<li><a href="service.html">Service2</a></li>-->
                <!--<li><a href="service.html">Service3</a></li>-->
                <!--<li><a href="all_services.html">All services</a></li>-->
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle active-link" data-toggle="dropdown">Members<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="education.php">Education</a></li>
                <!--<li><a href="resources.html">Resources</a></li>-->
                <li><a href="news.php">News</a></li>
                <li><a href="events.php">Events</a></li>
                <!--<li><a href="blog.html">Blog</a></li>-->
              </ul>
            </li>
            <li><a href="photo_gallery.php">Photo Gallery</a></li>
            <li><a href="contact_us.php">Contact us</a></li>
            <li><a href="signin.php">Sign in</a></li>
            <li><a href="signup.php">Join now</a></li>

          </ul>
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
          <h1>Signin to SLNA Official page</h1>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-lock"></i> Signin to SLNA official page</h4>
            <div class="widget-body">
              <div class="center-align">

                <form method ="post" class="form-horizontal form-signin-signup"  action = "" autocomplete="on">
                  <input type="text" name="Nur_id"  placeholder="Nursing ID" required="required">
                  <input type="password" name="password" placeholder="Password" required="required">
                  <div class="remember-me">
                    <div class="pull-left">
                      <label class="checkbox">
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                    <div class="pull-right">
                      <a href="#">Forgot password?</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <input type="submit" value="Signin" name="submit" class="btn btn-primary btn-large">
                  <input type="reset" name="clear" value="Clear" class="btn btn-primary btn-large">
                </form>

                <span><?php echo $error; ?></span>

                <h4><i class="icon-question-sign"></i> Don't have an account?</h4>
                <a href="signup.php" class="btn btn-large bottom-space">Signup</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End: MAIN CONTENT -->
<!-- Start: FOOTER -->
<footer>
  <div class="container">
    <div class="row">
      <div class="span2">
        <h4><i class="icon-star icon-white"></i> Home</h4>
        <nav>
          <ul class="quick-links">
            <li><a href="about_us.php">About us</a></li>
            <li><a href="institutes.php">Institutes</a></li>
          </ul>
        </nav>
        <h4><i class="icon-cogs icon-white"></i> Members</h4>
        <nav>
          <ul class="quick-links">
            <li><a href="education.php">Education</a></li>
            <!--<li><a href="resources.php">Resources</a></li>-->
            <li><a href="news.php">News</a></li>
            <li><a href="events.php">Events</a></li>
          </ul>
        </nav>
      </div>
      <div class="span2">
        <h4><i class="icon-beaker icon-white"></i> About</h4>
        <nav>
          <ul class="quick-links">
            <li><a href="about_us.php">About us</a></li>
          </ul>
        </nav>
        <h4><i class="icon-thumbs-up icon-white"></i> Includes</h4>
        <nav>
          <ul class="quick-links">
            <li><a href="photo_gallery.php">Photo Gallery</a></li>
            <li><a href="contact_us.php">Contact us</a></li>
            <li><a href="signin.php">Sign in</a></li>
            <li><a href="signup.php">Join now</a></li>
          </ul>
        </nav>
      </div>
      <div class="span3">
        <h4>Get in touch</h4>
        <div class="social-icons-row">
          <a href="#"><i class="icon-twitter"></i></a>
          <a href="#"><i class="icon-facebook"></i></a>
          <a href="#"><i class="icon-linkedin"></i></a>
        </div>
        <div class="social-icons-row">
          <a href="#"><i class="icon-google-plus"></i></a>
          <a href="#"><i class="icon-github"></i></a>
          <a href="mailto:nts@gmail.com"><i class="icon-envelope"></i></a>
        </div>
        <div class="social-icons-row">
          <i class="icon-phone icon-large phone-number"></i> +94 11 2 825409
        </div>
      </div>
      <div class="span3">
        <h4>Get updated by email</h4>
        <form>
          <input type="text" name="email" placeholder="Email address">
          <input type="submit" class="btn btn-primary" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
  <hr class="footer-divider">
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