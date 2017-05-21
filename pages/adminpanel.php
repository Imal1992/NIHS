<?php

    session_start();  /* Start of the session */

    //if(!isset($_SESSION['isLoggedIn'])){
	 	//header("location: signin.php");
	 //}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>SLNA official site | Admin panel page</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support -->
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="../css/boot-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/image.css">
</head>
<body>

<?php
	//$uname = $_SESSION['username']; /* Call the session */
?>
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
                        <li><a href="#">Post news</a></li>
                        <li><a href="#">Upload photos</a></li>
                        <li><a href="#">Add event</a></li>
                        <li><a href="#">Upload files</a></li>
                        <li><a href="../backend files/logout.php">Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- <form id = "Sign_Out" action ="../backend files/logout.php" method = "get">
            <input type = "submit" value = "Sign Out" id="signoutButton"/> -->   <!-- Setting logout button-->

        <!-- </form> -->
    </div>
    <!-- End: Navigation wrapper -->
</header>
<!-- End: HEADER -->
<!-- Start: Main content -->
<div class="content">
    <div class="container">
        <!-- Start: Service description -->
        <!-- <article class="article">
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
                    <p>
                        Detailed description about the service that how it makes the customer's life easy.
                        Detailed description about the service that how it makes the customer's life easy.
                        Detailed description about the service that how it makes the customer's life easy.
                        Detailed description about the service that how it makes the customer's life easy.
                    </p>
                    <p>
                        Detailed description about the service that how it makes the customer's life easy.
                        Detailed description about the service that how it makes the customer's life easy.
                        Detailed description about the service that how it makes the customer's life easy.
                        Detailed description about the service that how it makes the customer's life easy.
                    </p>
                    <p>
                        Detailed description about the service that how it makes the customer's life easy.
                        Detailed description about the service that how it makes the customer's life easy.
                        Detailed description about the service that how it makes the customer's life easy.
                        Detailed description about the service that how it makes the customer's life easy.
                    </p>

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
                        <a class="btn btn-large btn-block" href="contact_us.html">Contact us</a>
                    </div>
                    <div class="span3">
                        <p>
                            Check frequently asked question
                        </p>
                        <a class="btn btn-large btn-block" href="../Additional%20Pages/faq.html">FAQ</a>
                    </div>
                </div>
            </div>
        </article> -->

        <div id="maindiv">

            <div id="formdiv">
                <h2>Multiple Advertisment Upload Form</h2>
                <form enctype="multipart/form-data" action="" method="post">
                    First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 2MB.
                    <hr/>

                    <div id="filediv">
                        <input name="file[]" type="file" id="file"/>
                    </div>

                    <br/>
           
                    <input type="button" id="add_more" class="upload" value="Add More Files"/>
                    <input type="submit" value="Upload File" name="submit" id="upload" class="upload"/>
                </form>
                <br/>
                <br/>
                <!-------Including PHP Script here------>
                <?php include "upload.php"; ?>
            </div>
           
        </div>

        <!-- End: Service description -->
    </div>
</div>
<!--</div>-->
<!-- End: Main content -->
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
<script src="js/image.js"></script>
</body>
</html>
