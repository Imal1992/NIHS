<?php

    session_start();  /* Start of the session */

    if(!isset($_SESSION['adminLoggedIn'])){
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
    <title>SLNA official site | Admin panel file upload page</title>
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
                        <li><a href="adminpanel.php">Post news</a></li>
                        <li><a href="adminpanelImageUpload.php">Upload photos</a></li>
                        <li><a href="adminpanelAddEvent.php">Add event</a></li>
                        <li><a href="adminpanelFileUpload.php">Upload files</a></li>
                        <li><a href="../backend files/logout.php">Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
>
    </div>
    <!-- End: Navigation wrapper -->
</header>
<!-- End: HEADER -->
<!-- Start: Main content -->
<div class="content">
    <div class="container">
        
        <div id="maindiv">

            <div id="formdiv">
                <h2>File Upload Form</h2>
                <form enctype="multipart/form-data" action="" method="post">
                    <!-- First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded.  -->
                    File Size Should Be Less Than 2MB.
                    <hr/>

                    <div id="filediv">
                        <input name="files[]" type="file" id="file"/>
                    </div>

                    <br/>
           
                    <!--<input type="button" id="add_more" class="upload" value="Add More Files"/>-->
                    <input type="submit" value="Upload Files" name="submit" id="upload" class="upload"/>
                </form>
                <br/>
                <br/>
                <!-------Including PHP Script here------>
                <?php include "uploadFiles.php"; ?>
            </div>
           
        </div>

        <!-- End: Service description -->
    </div>
</div>
<!--</div>-->
<!-- End: Main content -->
<!-- Start: FOOTER -->
<footer>
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
<!-- <script src="js/image.js"></script> -->
</body>
</html>
