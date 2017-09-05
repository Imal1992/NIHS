<?php

    //session_start();  /* Start of the session */
    include ('../backend files/database.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Imal Thiunuwan">
    <title>SLNA official site</title>
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
                    <!--<li class="nav-header">PRODUCTS</li>-->
                    <li><a href="about_us.php">About us</a></li>
                    <li><a href="institutes.php">Institutes</a></li>
                    <!--<li><a href="product.html">Product3</a></li>-->
                    <!--<li><a href="all_products.html">All products</a></li>-->
                    <!--<li class="divider"></li>-->
                    <!--<li class="nav-header">SERVICES</li>-->
                    <!--<li><a href="service.html">Service1</a></li>-->
                    <!--<li><a href="service.html">Service2</a></li>-->
                    <!--<li><a href="service.html">Service3</a></li>-->
                    <!--<li><a href="all_services.html">All services</a></li>-->
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Members<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <!--<li><a href="our_works.html">Our works</a></li>-->
                    <li><a href="education.php">Education</a></li>
                    <!--<li><a href="resources.php">Resources</a></li>-->
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
      <!-- Start: slider -->
      <div class="slider">
        <div class="container-fluid">
          <div id="heroSlider" class="carousel slide">
            <div class="carousel-inner">
              <div class="active item">
                <div class="hero-unit">
                  <div class="row-fluid">
<!--                     <div class="span5 marketting-info">
                      <h1>PERSONNAL SHORTCODE</h1>
                      <p>

                           Cursus Ornare Amet Parturient</p>
                    </div> -->
                    <div class="span12">
                      <img src="../img/1.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
<!--                     <div class="span5 marketting-info">
                      <h1>TELL ABOUT YOUR NATURE OF WORK</h1>
                      <p>
                        We are Bootbusiness and we design ultimate website applications.
                        We are Bootbusiness and we design ultimate website applications.
                      </p>
                    </div> -->
                    <div class="span12">
                      <img src="../img/7.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
<!--                     <div class="span5 marketting-info">
                      <h1>TELL ABOUT YOUR PRODUCT</h1>
                      <p>
                        Get excited about our products.We build awesome products in mobile.
                        We build awesome products in mobile.We build awesome products in mobile.
                      </p>
                    </div> -->
                    <div class="span12">
                      <img src="../img/8.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
<!--                     <div class="span5 marketting-info">
                      <h1>TELL ABOUT YOUR ANOTHER PRODUCT</h1>
                      <p>
                        Get excited about our products.We build awesome products in mobile.
                        We build awesome products in mobile.We build awesome products in mobile.
                      </p>
                    </div> -->
                    <div class="span12">
                      <img src="../img/9.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#heroSlider" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#heroSlider" data-slide="next">›</a>
          </div>
        </div>
      </div>
      <!-- End: slider -->
      <!-- Start: OUR MISSION -->
        <div class="container">
        <div class="row-fluid">
          <div class="span4">
            <div class="page-header">
              <h2>Our Mission <span class="column-service-icon icon-beaker"></span></h2>
              <p>Sri Lanka Nursing Association, from its inception, has been working towards the enhancement of professionalism in nursing and dedicated to the promotion of standards of nursing services.</p>
              <a href="about_us.php" class="btn">Read more</a>
            </div>
          </div> 

          <div class="span4">
            <div class="page-header">
              <h2>Executive Committee <span class="column-service-icon icon-eye-open"></h2>
              <p>Sri Lanka Nurses Association, the only professional organization exists for nurses in Sri Lanka, was established in 1943 as ‘Sri Lanka Trained Nurses Association’ by an English ward sister Ms. L.M. De Silva with 39 members.</p>
              <a href="about_us.php" class="btn">Read more</a>
            </div>
          </div> 
          <div class="span4">
            <div class="page-header">
              <h2>Enhancing Nursing Education <span class="column-service-icon icon-dashboard"></h2>
              <p>Learn lessons online. It's totally free and you can get a great knowledge on Nursing Education.</p>
              <a href="about_us.php" class="btn">Read more</a>
            </div>
          </div> 

        </div>    

          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
                  <img src="../img/4.jpg" alt="product name">
                  <div class="caption">
                    <h3>Nursing Career</h3>
                    <p>
                      If you are thinking to join nursing as a career, you need to know what it entails!
                      According to the American Nurses Association (ANA), nursing is defined as:
                      "Nursing is the protection, promotion, and optimization of health and abilities, prevention of illness and injury, alleviation of suffering through the diagnosis and treatment of human response, and advocacy in the care of individuals, families, communities, and populations."
                      Nurses make up one of the largest workforces in the clinical healthcare industry. There are different types of nurses and nursing has a variety of roles and responsibilities.
                      Nurses are a very important part of the healthcare set up, working in close association with physicians.
                    </p>
                  </div>

                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img src="../img/5.jpg" alt="product name">
                  <div class="caption">
                    <h3>What to expect</h3>
                    <p>
                      This career has job stability, and also offers a variety of options like schedules, locations and responsibilities. It is one of the most rewarding professions, where one is able to really make a difference in the life of another person, when it is needed the most. Specialized roles may be
                      lucrative and one can move up in the hierarchy with different roles in leadership and management.
                      But one needs to be ready to take in more stressful hours when needed, especially when there is a shortage of manpower. Working in the nights and weekends also may be on card and one must be ready to accept the fact that you may not be able to see family much, especially if the timings are different.
                    </p>
                  </div>

                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img src="../img/6.jpg" alt="product name">
                  <div class="caption">
                    <h3>Education, training and certification</h3>
                    <p>
                      There are three academic programs to become a nurse – a diploma from an accredited nursing program or hospital, a two year program in associate's degree in nursing (ADN), or a bachelor's degree in nursing (BSN). ADN and BSN are more popular than the diploma because of the variety and functionality of the course. One has to pass the National Council Licensure Examination for Registered Nurses (NCLEX-RN), or for Practical Nurses (NCLEX-PN) to become a licensed and practicing nurse. One can also become a Licensed Practical Nurse (LPN), also known as a Licensed Vocational Nurse (LVN),
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="page-header">
            <h2>Site News</h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">

            	<?php

		          $dir = "postedNews/";

		          $allFiles = scandir($dir);
		          $files = array_diff($allFiles, array('.', '..')); // To remove . and ..
		          $arr = array_slice($files, -3); 

		          foreach($arr as $file){
	          	?>

	              <li class="span4">
	                <div class="thumbnail">

	                  <?php echo '<img src="/NIHS/NIHS/pages/postedNews/'.$file.'" alt="product name">'; 

	                  	$query = "SELECT News FROM post_news WHERE File_name='$file'";
	                  	$result = $db->query($query);
	                  	$rowcount = mysqli_num_rows($result);

	                  	if ($rowcount==1){
	                  		$row = mysqli_fetch_assoc($result);
	                  		$dbnews = $row['News'];
	                  	
	                  ?>

                  		<div class="caption">
		                    <h3>Site News</h3>
		                    <p>
		                      <?php echo $dbnews; ?>
		                    </p>
		                </div>

	                  <?php

			            }
			            else {
							$error = "No news"; /* If the entered username or password incorrect print this msg  */
						}

	                  ?>
	                  
	                </div>
	              </li>

	            <?php

		          }
		        
		        ?>
		                  
            </ul>
          </div>
          <div class="row-fluid">
          <div class="span4">
          </div> 
          <div class="span4">
          </div> 
          <div class="span4">
            <div class="page-header">
              <a href="news.php" class="btn">Read more</a>
            </div>
          </div> 
          </div>
        </div>
      <!-- End: PRODUCT LIST -->
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
