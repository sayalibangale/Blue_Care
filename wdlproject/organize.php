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
    <style>
        
		.divided {
		  display: flex;
		  align-items: center;
		}

		.divider {
		  flex-grow: 1;
		  border-bottom: 3px solid white;
		  margin: 5px
		}
        .orgtop{
           background-color:#008eab;
           padding-bottom: 3%;
           padding-top:5%;
        }

        .orgformbg{
            background-color: #01bcc6;
            padding-top:1%;
            padding-bottom: 5%;
        }
        label{
            color:white;
            font-weight : bold;
        }

        .button {
            border-radius: 0 15px 0 15px;
            color: #FFFFFF;
            font-size: 18px;
            padding: 10px;
            width: 200px;
            cursor: pointer;
            }

        .button:hover {
			color : #fff;
        }
    </style>

	<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <div id="preloader"></div>
        <header class="header-one">
            <!-- Start top bar -->
            <? if(!isset($_SESSION['username'])) { ?>
            <div class="topbar-area fix d-none d-md-block">
                <div class="container">
                    <div class="row">
                       <div class="col-md-6 col-sm-6">
                           <div class="topbar-left">
                                <ul>
                                   
                                </ul>
							</div>
                        </div>
                        <div class=" col-md-6 col-sm-6">
                            <div class="topbar-right">
                                <div class="top-social">
                                    <div class="header-right-link">
                                        <!-- search option end -->
                                        <a class="s-menu" href="login.php">Login/Register</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <? } ?>
            <!-- End top bar -->
            <div id="sticker" class="header-area d-none d-md-block">
                <div class="container">
                <!-- mainmenu start -->
		            <nav class="navbar navbar-default justify-content-end navbar-expand">
		            	<div class="main-menu">
		                	<ul class="nav navbar-nav navbar-right">
		                    	<li><a class="pages" href="index.php">Home</a></li>
		                        <li><a href="#ab">About us</a></li>
		                        <li><a href="find.php">Beach Cleanup</a></li>
		                        <li><a href="organize.php">Organize Beach Cleanup</a></li>
		                        <li><a class="pages" href="#">Blog</a></li>
								<?if(isset($_SESSION['username'])) { ?>
									<li><a href="profile.php"><?echo $_SESSION['username'];?></a>
                                                    <ul class="sub-menu">
                                                            <li><a href="profile.php">Profile</a></li>
                                                            <li><a href="logout.php">Logout</a></li>   
                                                    </ul>
                                                </li>
								<?  }
								?>
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
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="#ab">About us</a></li>
                                        <li><a href="find.php">Beach Cleanup</a></li>
                                        <li><a href="organize">Organize Beach Cleanup</a></li>
                                        <li><a class="pages" href="#">Blog</a>
                                            <ul class="sub-menu">
                                                
                                            </ul>
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
                                <li>Organize Beach CleanUp</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- organize beach clean area start -->
             <div class="orgtop">
              <div class="row">
                <div class="col text-center">
                  <h1 class="mb-2 text-uppercase" style="color:white; font-size: 160%;"><strong>Organise a beach clean</strong></h1>
                  <img src="https://p.kindpng.com/picc/s/114-1145094_water-wave-drip-sea-beach-wave-structure-river.png" width="95" height="20" alt="Waves">         
                  <div class="row mt-5 page-intro">
                    <div class="col-md-8 offset-md-2">
                      <p style="color:white;">If you want to organise a beach clean you can upload the details here and then invite people to join you. Before you register your beach clean make sure you have <a style="color:orange;" href="guidelines.php">read through our guidelines</a>.</p>
                    </div>
                  </div>
                      </div>
              </div>
            </div>
            <section class="orgformbg">
            <?php
			if(isset($_POST['approve'])) {
				$fname=$_POST['fname']; $lname=$_POST['lname']; $email=$_POST['email']; $mob=$_POST['mob']; $beach_name=$_POST['bname']; 
				$date=$_POST['doc']; $addr=$_POST['addr']; $city=$_POST['city']; $meet=$_POST['meet_pt']; $stime=$_POST['start'];
				$etime=$_POST['end'];
					$conn = mysqli_connect("localhost:3307","root","root","blue_care");
					$query = "insert into organise_cleanup(fname,lname,email,mob,bname,doc,addr,city,meet_pt,start,end) values ('$fname','$lname','$email','$mob','$beach_name','$date','$addr','$city','$meet', '$stime', '$etime')";
					$select_query = "select * from organise_cleanup where bname='$beach_name' && doc='$date'";

					$result = mysqli_query($conn,$select_query);
					$num = mysqli_num_rows($result);
					if($num==0) 
					{
						mysqli_query($conn,$query);
						echo "<div style='color:#000; font: 20px serif'><center>Approval sent successfully</center></div>";
					}
					else {
						echo "<div style='color:#000; font: 20px serif'><center>Approval for this cleanup has already been sent</center></div>";
					}
				}
			?>
              <div class="container p-5">
                  <div class="row mb-4">
                      <div class="col-md-8 offset-md-2">
                          <h3 style="color:white;"class="text-uppercase">Register to organise a beach clean</h3>
                          <p style="color:white;">Fill in the form below to organise a beach clean at a beach of your choice. Your details will be sent to administrators who will verify your application before making the event live.</p>
                      </div>
                  </div>
                  <div class="row">
                  	<div class="col-md-8 offset-md-2">
                  		<form method="post">
                  		  <div>
          					<label class="mb-0">YOUR DETAILS</label>
          				  </div>
          				  <p class="divided"><span class="divider"></span></p>
				  		  <div class="form-group">
							<label>FIRST NAME *</label>
							<input type="text" class="form-control" name="fname" required="required">
						  </div>
						  <div class="form-group">
							<label>LAST NAME *</label>
							<input type="text" class="form-control" name="lname" required="required">
						  </div>
						  <div class="form-group">
							<label>EMAIL ADDRESS *</label>
							<input type="email" class="form-control" name="email" aria-describedby="emailHelp" required="required">
						  </div>
						  <div class="form-group">
							<label>CONTACT NUMBER *</label>
							<input type="text" class="form-control" name="mob" required="required">
						  </div>
						  <div>
          					<label class="mt-5 mb-0">BEACH DETAILS</label>
          				  </div>
          				  <p class="divided"><span class="divider"></span></p>
          				  <div class="form-group">
							<label class="mb-0">DATE OF CLEAN</label>
							<p class="description" style="color:white;">Let your volunteers know what date the clean is on.</p>
							<input type="date" class="form-control" name="doc">
						  </div>
          				  <div class="form-group">
							<label>BEACH NAME *</label>
							<input type="text" class="form-control" name="bname" id="bname" required="required">
						  </div>
          				  <div class="form-group">
							<label class="mb-0">BEACH ADDRESS *</label>
							<p class="description" style="color:white;">The full postal address for to make it easy for volunteers to find.</p>
							<input type="text" class="form-control" name="addr" required="required">
						  </div>
						  <div class="form-group">
							<label class="mb-0">TOWN/CITY *</label>
							<p class="description" style="color:white;">The nearest village, town or city to your beach.</p>
							<input type="text" class="form-control" name="city" required="required">
						  </div>
						  <div class="form-group">
							<label class="mb-0">MEETING POINT</label>
							<p class="description" style="color:white;">A short description of the meeting location for volunteers.</p>
							<input type="text" class="form-control" name="meet_pt">
						  </div>
						  <div class="form-group">
							<label class="mb-0">START TIME *</label>
							<p class="description" style="color:white;">Let volunteers know what time the clean starts.</p>
							<input type="time" class="form-control" name="start" required="required">
						  </div>
						  <div class="form-group">
							<label class="mb-0">END TIME</label>
							<p class="description" style="color:white;">Let volunteers know what time the clean is likely to finish.</p>
							<input type="time" class="form-control" name="end">
						  </div>
						  <input type="submit" class="button btn btn-warning" name="approve" value="Submit for approval">
                  		</form>
                  	</div>
                  </div>
              </div>
          </section>
          <script type="text/javascript">
		  $(function() {
			 $( "#bname" ).autocomplete({
			   source: 'beachname_details.php',
			 });
		  });
		</script>
		
				
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
