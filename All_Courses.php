<?php
session_start();

include 'includes/config.php';


$sql = mysqli_query($dbConn,"SELECT * FROM courses");
$Courses_Number = mysqli_num_rows($sql); 



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
							
																<li class=""><a href="index.php">Home</a></li>
																<li class=""><a href="index.php">About</a></li>
																<li class="active"><a href="All_Courses.php">All Courses</a></li>
																<li class=""><a href="Contact.php">Contact</a></li>
					
								



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
								<h1 class="breadcrumb-title">All Courses</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">All Courses</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->			

			
			<!-- ============================ Full Width Courses  ================================== -->
			<section class="bg-cover newsletter inverse-theme" style="background:url(assets/img/slide5.png);" data-overlay="9">
				<div class="container">
					
					
					<!-- Row -->
					<div class="row">	
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<!-- Row -->
							<div class="row align-items-center mb-3">
								<div class="col-lg-6 col-md-6 col-sm-12" style="color:#fff">
									We found <strong><?php echo $Courses_Number; ?></strong> courses for you
								</div>
								
							</div>
							<!-- /Row -->
							
							<div class="row">
						
						
						
						
						
								<?php
					$sql1 = mysqli_query($dbConn,"select * from courses order by ID DESC");
					while ($row1 = mysqli_fetch_array($sql1)){

						$Course_ID = $row1['ID'];
						$Title = $row1['Title'];
						$Description = $row1['Description'];
						$Overview = $row1['Overview'];
						$Total_Rates  = $row1['Total_Rates'];
						$Language  = $row1['Language'];
						$Price  = $row1['Price'];
						$Media_File = $row1['Media_File'];
						$Status  = $row1['Status'];
						$Add_Date_Time  = $row1['Add_Date_Time'];
						
						
						?>
								
								
								
						
						
						
								<!-- Cource Grid 1 -->
								<div class="col-lg-4 col-md-6">
									<div class="education_block_grid">
										
										<div class="education_block_thumb">
											<a href="Course_Details.php?Course_ID=<?php echo $Course_ID; ?>"><img src="Instructors/<?php echo $Media_File; ?>" class="img-fluid" alt=""></a>

											<!--<div class="cources_price">$ <?php echo $Price; ?></div>-->
											<div class="education_ratting"><i class="fa fa-star"></i><?php echo $Total_Rates; ?></div>
										</div>
										
										<div class="education_block_body">
											<h4 class="bl-title"><a href="Course_Details.php?Course_ID=<?php echo $Course_ID; ?>"><?php echo $Title; ?></a></h4>
											<p style="color:#4a5682;"><?php echo substr($Description,0,50); ?> ...</p>
										</div>
										
										<!--<div class="education_block_footer">
											
											<span class="education_block_time"><i class="ti-date mr-1"></i><?php echo $Add_Date_Time; ?></span>
										</div>-->
										
									</div>	
								</div>
								
								
								
							<?php
							}
							?>
									
								
								
								
								
								
							</div>
					
							
							
						</div>
					
					</div>
					<!-- Row -->
					
				</div>
			</section>
			<!-- ============================ Full Width Courses End ================================== -->
			
		
			
			
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