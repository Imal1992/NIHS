<?php 
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

	session_start();  /* Start of the session */

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
                	                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li><a></a></li>
                        <li><a></a></li>
                        <li><a></a></li>
                        <li><a></a></li>
                        <li><a href="../backend files/logout.php">Sign Out</a></li>
                    </ul>
                </div>

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
                        <h1>Welcome : <?php $uname = $_SESSION['username']; ?> <small>SLNA official web page</small></h1>
                    </div>
                </div>
                <div class="span12 center-align">
                    <img src="http://www.colombopage.com/imgs_13B/MR12172013H_3.jpg">
                </div>
            </div>
            <div class="row bottom-space">
                <div class="span10 offset1">


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
