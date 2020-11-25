<!doctype html>

<html class="no-js" lang="en">

	

<!-- Mirrored from rockstheme.com/rocks/aievari-live/investment.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:01 GMT -->

<head>

		<meta charset="utf-8">

		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Blue Care</title>

		<meta name="description" content="">

		<meta name="viewport" content="width=device-width, initial-scale=1">



		<!-- favicon -->		

		<link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">



		<!-- all css here -->



		<!-- bootstrap v4.5.2 css -->

		<link rel="stylesheet" href="css/bootstrap4.min.css">

		<!-- owl.carousel css -->

		<link rel="stylesheet" href="css/owl.carousel.css">

		<link rel="stylesheet" href="css/owl.transitions.css">

       <!-- Animate css -->

        <link rel="stylesheet" href="css/animate.css">

        <!-- meanmenu css -->

        <link rel="stylesheet" href="css/meanmenu.min.css">

		<!-- font-awesome css -->

		<link rel="stylesheet" href="css/font-awesome.min.css">

		<link rel="stylesheet" href="css/themify-icons.css">

		<link rel="stylesheet" href="css/flaticon.css">

		<!-- magnific css -->

        <link rel="stylesheet" href="css/magnific.min.css">

		<!-- style css -->

		<link rel="stylesheet" href="style.css">

		<!-- responsive css -->

		<link rel="stylesheet" href="css/responsive.css">

		<!-- modernizr css -->

		<script src="js/vendor/modernizr-2.8.3.min.js"></script>

		<link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>



</head>

		<body>



		<!--[if lt IE 8]>

			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

		<![endif]-->



        <div id="preloader"></div>

        <header class="header-one">

            <!-- Start top bar -->

            <div class="topbar-area fix d-none d-md-block">

                <div class="container">

                    <div class="row">

                       <div class="col-md-6 col-sm-6">

                           <div class="topbar-left">

                                <ul>

                                    <li><a href="#"><i class="fa fa-envelope"></i> info@aievari4.com</a></li>

                                    <li><a href="#"><i class="fa fa-phone"></i> +909-654-9805</a></li>

                                </ul>

							</div>

                        </div>

                        <div class=" col-md-6 col-sm-6">

                            <div class="topbar-right">

                                <div class="top-social">

                                    <div class="header-right-link">

                                        <!-- search option end -->

                                        <a class="s-menu" href="login.html">Login/Register</a>

                                    </div> 

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- End top bar -->

            <!-- header-area start -->

            <div id="sticker" class="header-area d-none d-md-block">

                <div class="container">

                <!-- mainmenu start -->

		            <nav class="navbar navbar-default justify-content-end navbar-expand">

		            	<div class="main-menu">

		                	<ul class="nav navbar-nav navbar-right">

		                    	<li><a class="pages" href="index.html">Home</a></li>

		                        <li><a href="about.html">About us</a></li>

		                        <li><a href="find.php">Beach Cleanup</a></li>

		                        <li><a href="#">Organize Beach Cleanup</a></li>

		                        <li><a class="pages" href="#">Blog</a></li>

		                        <li><a href="#">Donation</a></li>

		                    </ul>

		                </div>

		            </nav>

                <!-- mainmenu end -->

                </div>

            </div>

            <!-- header-area end -->

            <!-- mobile-menu-area start -->

            <div class="mobile-menu-area d-md-none">

                <div class="container">

                    <div class="row">

                        <div class="mobile-menu">

                                <div class="logo">

                                    <a href="index.html"><img src="img/logo/logo.png" alt="" /></a>

                                </div>

                                <nav id="dropdown">

                                    <ul>

                                        <li><a href="index.html">Home</a></li>

                                        <li><a href="about.html">About us</a></li>

                                        <li><a href="find.php">Beach Cleanup</a></li>

                                        <li><a href="#">Organize Beach Cleanup</a></li>

                                        <li><a class="pages" href="#">Blog</a>

                                            <ul class="sub-menu">

                                                <li><a href="blog.html">Blog grid</a></li>

                                                <li><a href="blog-sidebar.html">Blog Sidebar</a></li>

                                                <li><a href="blog-details.html">Blog Details</a></li>

                                            </ul>

                                        </li>

                                        <li><a href="#">Donation</a></li>

                                        <li><a href="login.html">Login/Register</a></li>

                                    </ul>

                                </nav>

                     	</div>					

                     </div>

                </div>

            </div>

            <!-- mobile-menu-area end -->		

        </header>

        <!-- header end -->

        <!-- Start breadcumb Area -->

        <div class="page-area" style="background:url(img/background/clean.jpg); background-repeat: no-repeat; background-size: cover;">

            <div class="breadcumb-overlay"></div>

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="breadcrumb text-center">

                            <ul class="breadcrumb-bg">

                                <li class="home-bread">Home</li>

                                <li>Beach Cleanup</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- End breadcumb Area -->



		<?php

        $conn = mysqli_connect("localhost:3307","root","root","wdl_project");

        $id = $_GET['org_id'];

		$query = "SELECT * FROM organise where org_id=$id";

		$result = mysqli_query($conn, $query);

		$row = mysqli_fetch_assoc($result);

		?>

		<div class="beach_details">

			<center><img src="img\beaches\juhu.jpg" alt="Card image cap" style="width:32rem; height:28rem"></center>

			<div style="padding:2% 30%; color:#000;" class="text-center">

			<table>

				<tr><td>Name</td><td><? echo $row['name'] ?></td></tr>

				<tr><td>Location</td><td><? echo $row['location'] ?></td></tr>

				<tr><td>Date</td><td><? echo date('d/m/Y', strtotime($row['org_date'])); ?></td></tr>

				<tr><td>Starting time</td><td><? echo date("h:i a", strtotime("$row[start] UTC")); ?></td></tr>

				<? if($row['end'] != null && $row['end'] != "00:00:00"){ ?>

				<tr><td>Ending time</td><td><? echo date("h:i a", strtotime("$row[end] UTC")); ?></td></tr>

				<? } if($row['meet_pt'] != null){ ?>

				<tr><td>Meeting Point</td><td><? echo $row['meet_pt'] ?></td></tr>

				<? } ?>

			</table>

			</div>

			<div class="reg_form mt-4" style="font-family:'Actor',sans-serif; font-size:1.3rem;">

			<center><h3 style="font-family:'Actor'; color:#607D8B;">Register for beach cleanup</h3></center>

			<form method="POST" style="padding:1% 30%; color:#000;">

			  <div class="form-group">

				<label>First Name *</label>

				<input type="text" class="form-control" name="fname" required="required">

			  </div>

			  <div class="form-group">

				<label>Last Name *</label>

				<input type="text" class="form-control" name="lname" required="required">

			  </div>

			  <div class="form-group">

				<label>Email *</label>

				<input type="email" class="form-control" name="email" aria-describedby="emailHelp" required="required">

				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

			  </div>

			<div class="text-center pt-4"><button type="submit" class="btn btn-info" name='submit'>Register</button></div>

			<form>

			<? 

				if(isset($_POST['submit'])) {

					$fname = $_POST['fname'];

					$lname = $_POST['lname'];

					$email = $_POST['email'];

					$query = "insert into registered_for_cleanup values ('$id','$fname','$lname','$email')";

					$select_query = "select * from registered_for_cleanup where id='$id' && email='$email'";



					$result = mysqli_query($conn,$select_query);

					$num = mysqli_num_rows($result);

					if($num==0) 

					{

						mysqli_query($conn,$query);

						//header('location : login.php');

						echo "<div style='color:#827676; font-family:serif'><center>Registered successfully</center></div>";

					}

					else {

						echo "<div style='color:#827676; font-family:serif'><center>Already registered for this beach cleanup</center></div>";

					}

				} ?>

			</div>

		</div>

		<!-- Start Footer Area -->

        <footer class="footer1">

            <div class="footer-area">

                <div class="container">

                    <div class="row">

                        <div class="col-md-5 col-sm-5 col-xs-12">

                            <div class="footer-content logo-footer">

                                <div class="footer-head">

                                    <div class="footer-logo">

                                    	<a class="footer-black-logo" href="#"><img src="img/logo/logo.png" alt=""></a>

                                    </div>

                                    <p>

                                        Are you looking for professional advice for your new business. Are you looking for professional advice for your new business. Are you looking for professional advice for your new business.

                                    </p>

                                    <div class="subs-feilds">

                                        <div class="suscribe-input">

                                            <input type="email" class="email form-control width-80" id="sus_email" placeholder="Type Email">

                                            <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- end single footer -->

                        <div class="col-md-4 col-sm-3 col-xs-12">

                            <div class="footer-content">

                                <div class="footer-head">

                                    <h4>Services Link</h4>

                                    <ul class="footer-list">

                                        <li><a href="#">About us</a></li>

                                        <li><a href="#">Services </a></li>

                                        <li><a href="#">Events</a></li>

                                        <li><a href="#">Promotion</a></li>

                                        <li><a href="#">Transition</a></li>

                                        <li><a href="#">Social Media</a></li>

                                    </ul>

                                    <ul class="footer-list hidden-sm">

										<li><a href="#">Customer Care</a></li>

                                        <li><a href="#">Live chat</a></li>

                                        <li><a href="#">Notification</a></li>

                                        <li><a href="#">Privacy</a></li>

                                        <li><a href="#">Terms & Condition</a></li>

                                        <li><a href="#">Contact us </a></li>

									</ul>

                                </div>

                            </div>

                        </div>

                        <!-- end single footer -->

                        <div class="col-md-3 col-sm-4 col-xs-12">

                            <div class="footer-content last-content">

                                <div class="footer-head">

                                    <h4>Information</h4> 

                                    <div class="footer-contacts">

										<p><span>Tel :</span> +0890-564-5644</p>

										<p><span>Email :</span> info@aievari4.com</p>

										<p><span>Location :</span> House- 65/4, London</p>

									</div> 

                                    <div class="footer-icons">

                                        <ul>

                                            <li>

                                                <a href="#">

                                                    <i class="fa fa-facebook"></i>

                                                </a>

                                            </li>

                                            <li>

                                                <a href="#">

                                                    <i class="fa fa-twitter"></i>

                                                </a>

                                            </li>

                                            <li>

                                                <a href="#">

                                                    <i class="fa fa-google"></i>

                                                </a>

                                            </li>

                                            <li>

                                                <a href="#">

                                                    <i class="fa fa-pinterest"></i>

                                                </a>

                                            </li>

                                            <li>

                                                <a href="#">

                                                    <i class="fa fa-instagram"></i>

                                                </a>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="footer-area-bottom">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="copyright">

                                <p>

                                    Copyright © 2020

                                    <a href="#">Aievari</a> All Rights Reserved

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </footer>	

        <!-- End Footer area -->

		

		<!-- all js here -->



		<!-- jquery latest version -->

		<script src="js/vendor/jquery-1.12.4.min.js"></script>

		<!-- bootstrap js -->

		<script src="js/bootstrap4.min.js"></script>

		<!-- fontawesome js -->

		<script src='https://kit.fontawesome.com/a076d05399.js'></script>

		<!-- owl.carousel js -->

		<script src="js/owl.carousel.min.js"></script>

		  <!-- stellar js -->

        <script src="js/jquery.stellar.min.js"></script>

		<!-- magnific js -->

        <script src="js/magnific.min.js"></script>

        <!-- wow js -->

        <script src="js/wow.min.js"></script>

        <!-- meanmenu js -->

        <script src="js/jquery.meanmenu.js"></script>

		<!-- Form validator js -->

		<script src="js/form-validator.min.js"></script>

		<!-- plugins js -->

		<script src="js/plugins.js"></script>

		<!-- main js -->

		<script src="js/main.js"></script>

	</body>



<!-- Mirrored from rockstheme.com/rocks/aievari-live/investment.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:01 GMT -->

</html>
