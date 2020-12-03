<!doctype html>
<html class="no-js" lang="en">
<? session_start(); ?>
<!-- Mirrored from rockstheme.com/rocks/aievari-live/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:27:46 GMT -->
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
 		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    </head>
    	<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <div id="preloader"></div>
        <header class="header-one">
            <!-- Start top bar -->
            
            <!-- End top bar -->
            <!-- header-area start -->
            <div id="sticker" class="header-area d-none d-md-block">
                <div class="container">
                	<nav class="navbar navbar-default justify-content-end navbar-expand">
                                   <div class="main-menu">
                                      <ul class="nav navbar-nav navbar-right">
                                         <li><a class="pages" href="index.php">Home</a></li>
                                         <li><a href="#ab">About us</a></li>
                                         <li><a href="find.php">Beach Cleanup</a></li>
                                         <li><a href="organize.php">Organize Beach Cleanup</a></li>
                                         <li><a class="pages" href="#">Blog</a></li>
                                         <li><a href="#"><?echo $_SESSION['username'];?></a>
                                         <ul class="sub-menu">
                                             <li><a href="profile.php">Profile</a></li>
                                             <li><a href="logout.php">Logout</a></li>
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
                                    <a href="index.php"><img src="img/logo/logo.png" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="#ab">About us</a></li>
                                        <li><a href="find.php">Beach Cleanup</a></li>
                                        <li><a href="organize.php">Organize Beach Cleanup</a></li>
                                        <li><a class="pages" href="#">Blog</a>
                                           
                                        </li>
                                        <li><a href="#">Donation</a></li>
                                        <li><a href="login.php">Login/Register</a></li>
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
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        
        <!-- Start Profile area-->
        <?php
        $name = $_SESSION['username'];
        $conn = mysqli_connect("localhost:3307","root","root","blue_care");
        $query = "SELECT * FROM registered_for_cleanup where fname = '$name'";
		$result = mysqli_query($conn, $query);
		$rowCount = mysqli_num_rows($result);
        ?>
        <div class="container">
        	<div class="row">
        	<div class="col-md-12 pt-5">
				<div class="deposite-content">
                	<div class="diposite-box">
                    	<h4>Past Beach Cleanups</h4>
                        <table class="table">
						  <thead>
							<tr>
							  <th scope="col">Beach Name</th>
							  <th scope="col">Date of Cleanup</th>
							  <th scope="col">Time</th>
							</tr>
						  </thead>
						  <tbody>
						  <?php 
						  	if($rowCount > 0){ 
						  	while($row = mysqli_fetch_assoc($result)){
						  		$id = $row['id'];
						  		$sql = "SELECT * FROM organise where org_id='$id' and org_date<=CURDATE()";
						  		$res = mysqli_query($conn, $sql);
						  		while($row1 = mysqli_fetch_assoc($res)){ ?>
								  <tr>
								  <td><? echo $row1['name'] ?></td>
								  <td><? echo $row1['org_date'] ?></td>
								  <td><? echo date("g:i a", strtotime("$row1[start] UTC"));?></td></tr>
						  	<?	} 
						  	}
						  	}
						  ?>
						</tbody>
						</table>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
        	<div class="row">
        	<div class="col-md-12 pt-5">
				<div class="deposite-content">
                	<div class="diposite-box">
                    	<h4>Upcoming Beach Cleanups</h4>
                        <table class="table">
						  <thead>
							<tr>
							  <th scope="col">Beach Name</th>
							  <th scope="col">Date of Cleanup</th>
							  <th scope="col">Time</th>
							</tr>
						  </thead>
						  <tbody>
						  <?php 
						  	$query = "SELECT * FROM registered_for_cleanup where fname = '$name'";
							$result = mysqli_query($conn, $query);
							$rowCount = mysqli_num_rows($result);
						  	if($rowCount > 0){ 
						  	while($row = mysqli_fetch_assoc($result)){
						  		$id = $row['id'];
						  		$sql = "SELECT * FROM organise where org_id='$id' and org_date>CURDATE()";
						  		$res = mysqli_query($conn, $sql);
						  		while($row1 = mysqli_fetch_assoc($res)){ ?>
								  <tr>
								  <td><? echo $row1['name'] ?></td>
								  <td><? echo $row1['org_date'] ?></td>
								  <td><? echo date("g:i a", strtotime("$row1[start] UTC"));?></td></tr>
						  	<?	} 
						  	}
						  	}
						  ?>
						</tbody>
						</table>
					</div>
				</div>
			</div>
			</div>
		</div>
        <!--End profile area-->
        
	<!-- Start Footer Area -->
    <footer class="footer1">
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="footer-content logo-footer">
                                <div class="footer-head">
                                    
                                   <h4>DO JOIN US FOR BEACH CLEAN!!!</h4>
                                    <div class="subs-feilds">
                                        <div class="suscribe-input">
                                            <!--<input type="email" class="email form-control width-80" id="sus_email" placeholder="Type Email">
                                            <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Services</h4>
                                    <ul class="footer-list">
                                        <li><a href="#ab">About us</a></li>
                                        <li><a href="#faqq">FAQS </a></li>
                                        <li><a href="find.php">Events</a></li>
                                        <li><a href="#contact">Contact Us</a></li>
                                    </ul>
                                    <!--
                                    <ul class="footer-list hidden-sm">
                                        <li><a href="#">Customer Care</a></li>
                                        <li><a href="#">Live chat</a></li>
                                        <li><a href="#">Notification</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Terms & Condition</a></li>
                                        <li><a href="#">Contact us </a></li>
                                    </ul>-->
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="footer-content last-content">
                                <div class="footer-head">
                                    <h4>Information</h4> 
                                    <div class="footer-contacts" id="contact">
                                        <p><span>Tel :</span> +0890-564-5644</p>
                                        <p><span>Email :</span> bluecare@gmail.com</p>
                                    </div> 
                                    
                                </div>
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
         <!-- owl.carousel js -->
         <script src="js/owl.carousel.min.js"></script>
           <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Chart JS -->
        <script src="js/Chart.bundle.min.js"></script>
        <script src="js/Chart.js"></script>
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
		<!-- Script -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		 
		<!-- jQuery UI -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
     </body>
