<?php session_start();  /* Start of the session */
 if(!isset($_SESSION['isLoggedIn'])){
	 	header("location: signin.php");
	 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>SLNA official site | User-Profile page</title>
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

<?php
	$uname = $_SESSION['username']; /* Call the session */
?>
<!-- Start: HEADER -->
<header>
    <!-- Start: Navigation wrapper -->
    <div class="navbar navbar-fixed-top">

        <div class="navbar-inner">
            <div class="container">
                <a href="../index.php" class="brand brand-bootbus">SLNA</a>
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
                            <a href="#" class="dropdown-toggle active-link" data-toggle="dropdown">Home<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="nav-header">PRODUCTS</li>
                                <li><a href="about_us.php">About us</a></li>
                                <li <!-><a href="institutes.php">Institutes</a></li>
                               
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Members<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="education.php">Education</a></li>
                            </ul>
                        </li>
                        <li><a href="photo_gallery.php">Photo Gallery</a></li>
                        <li><a href="contact_us.php">Contact us</a></li>
                        <li><a href="signin.php">Sign in</a></li>
                        <li><a href="signup.php">Join now</a></li>
                        <li><a href="../backend files/logout.php">Sign Out</a></li>

                    </ul>

                </div>
            </div>
        </div>


    </div>
    <!-- End: Navigation wrapper -->
</header>
<!-- End: HEADER -->
<!-- Start: Main content -->
<div class="content">
    <div class="container">
        <!-- Start: Service description -->
        <article class="article">
            <div class="row bottom-space">
                <div class="span12">
                    <div class="page-header">
                        <h1>Service <small>Caption for the service</small></h1>
                    </div>
                </div>
                <div class="span12 center-align">
                    <img src="http://placehold.it/800x300" class="thumbnail product-snap">
                </div>
            </div>
            <div class="row bottom-space">
                <div class="span10 offset1">


                </div>
            </div>
            <div class="row">
                <div class="span10 offset1">
                    <hr>
                    <div class="span3">
                        <p>
                            Ready to start the innovation?
                        </p>
                        <a class="btn btn-large btn-block" href="#">Try now</a>
                    </div>
                    <div class="span3">
                        <p>
                            Got confused?
                        </p>
                        <a class="btn btn-large btn-block" href="contact_us.php">Contact us</a>
                    </div>
                    <div class="span3">
                        <p>
                            Check frequently asked question
                        </p>
                        <a class="btn btn-large btn-block" href="../Additional%20Pages/faq.html">FAQ</a>
                    </div>
                </div>
            </div>
        </article>
        <!-- End: Service description -->
    </div>
</div>
<!--</div>-->
<!-- End: Main content -->
<!-- Start: FOOTER -->
<footer>
    <div class="container">
        <div class="row">
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
