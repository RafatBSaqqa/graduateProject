<?php
session_start();

include 'includes/config.php';



if(isset($_POST['Submit3']))
{
$Name = $_POST['Name'];
$Email_Address = $_POST['Email_Address'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];



$Email = 'info@estudy.com';

$Header = "From: E-Study - Contact Form | ".$Name." - ".$Email_Address;
	
mail ($Email,$Subject,$Message,$Header);




echo "<script language='JavaScript'>
			  alert ('Your Message Has Been Sent !');
      </script>";

	echo "<script language='JavaScript'>
document.location='Contact.php';
        </script>";


}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="E-Study" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="shortcut icon" href="assets/img/icon.png"/>
		
        <title>E-Study</title>
		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="assets/css/colors.css" rel="stylesheet">
		
    </head>
	
    <body class="red-skin">
	
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="index.php">
								<img src="assets/img/logo.png" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
																<li ><a href="index.php">Home</a></li>
																<li class=""><a href="index.php">About</a></li>
																<li class=""><a href="All_Courses.php">All Courses</a></li>
																<li class="active"><a href="Contact.php">Contact</a></li>
					
								



							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								
								<li class="login_click light">
									<a href="#" data-toggle="modal" data-target="#login">Sign in</a>
								</li>
								<li class="login_click theme-bg">
									<a href="#" data-toggle="modal" data-target="#signup">Sign up</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
		
           <!-- ============================ Page Title Start================================== -->
			<section class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title">Get in Touch</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Contact</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->	
			
			<!-- ============================ Agency List Start ================================== -->
			<section class="bg-cover newsletter inverse-theme" style="background:url(assets/img/slide6.jpg);" data-overlay="9">
			
				<div class="container">
				
					<!-- row Start -->
					<div class="row">
					
						<div class="col-lg-12 col-md-7">
							<div class="prc_wrap">
								
								<div class="prc_wrap_header">
									<h4 class="property_block_title">Fillup The Form</h4>
								</div>
								
								<form method="post" action="Contact.php">
								<div class="prc_wrap-body">
									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Name</label>
												<input type="text" name="Name" required class="form-control simple" required>
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Email</label>
												<input type="email" name="Email_Address" required class="form-control simple" required>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label>Subject</label>
										<input type="text" name="Subject" required class="form-control simple" required>
									</div>
									
									<div class="form-group">
										<label>Message</label>
										<textarea name="Message"  class="form-control simple" required></textarea>
									</div>
									
									<div class="form-group">
										<button class="btn btn-theme" name="Submit3" type="submit">Send</button>
									</div>
								</div>
								</form>
								
							</div>
											
						</div>
						
						
						
					</div>
					<!-- /row -->		
					
				</div>
						
			</section>
			<!-- ============================ Agency List End ================================== -->
			
		
			
			<!-- ============================ Footer Start ================================== -->
			<footer class="light-footer">
				<div>
					<div class="container">
						<div class="row">
							
							<div class="col-lg-6 col-md-6">
								<div class="footer-widget">
									<img src="assets/img/logo.png" class="img-footer" alt="" />
									<div class="footer-add">
										<p>Amman /  Jordan</p>
										<p>+96260000000</p>
										<p>info@estudy.com</p>
									</div>
									
								</div>
							</div>		
							<div class="col-lg-6 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">Main Menu</h4>
									<ul class="footer-menu">
										<li><a href="About.php">About</a></li>
										<li><a href="All_Courses.php">All Courses</a></li>
										<li><a href="Contact.php">Contact</a></li>

									</ul>
								</div>
							</div>
									
							
							
							
							
							
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							
							<div class="col-lg-6 col-md-6">
								<p class="mb-0">© <?php echo date("Y"); ?> E-Study.</p>
							</div>
							
							
							
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
			
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Sign In</h4>
							<div class="login-form">
								
								
								
								<form method="post" action="index.php">
								
									<div class="form-group">
										<label>Email Address</label>
										<input type="email" name="Email_Address" required class="form-control" placeholder="Email Address" required>
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="Password" required class="form-control" placeholder="Password" required>
									</div>
									
									<div class="form-group">
										<button type="submit" name="Submit" class="btn btn-md full-width pop-login">Sign In</button>
									</div>
								
								</form>
							</div>
							
							<div class="social-login mb-3">
								<ul>
									
									<li><a href="Forget_Password.php" class="theme-cl">Forget Password?</a></li>
								</ul>
							</div>
							
							<div class="text-center">
								<p class="mt-2">Haven't Any Account? <a href="Signup.php" class="link">Click here</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Sign Up Modal -->
			<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="sign-up">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Sign Up</h4>
							<div class="login-form">
								<form method="post" action="index.php">
								
									<div class="form-group">
										<input type="text" name="Full_Name" class="form-control" placeholder="Full Name" required>
									</div>
									
									<div class="form-group">
										<input type="email" name="Email_Address" class="form-control" placeholder="Email Address" required>
									</div>
									
									
									<div class="form-group">
										<input type="password" name="Password" class="form-control" placeholder="" required>
									</div>

									
									<div class="form-group">
										<button type="submit" name="Submit2" class="btn btn-md full-width pop-login">Sign Up</button>
									</div>
								
								</form>
							</div>
							<div class="text-center">
								<p class="mt-3"><i class="ti-user mr-1"></i>Already Have An Account? <a href="Signin.php" class="link">Go For Sign In</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/counterup.min.js"></script>
		<script src="assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>
</html>