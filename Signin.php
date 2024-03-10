<?php
session_start();

include 'includes/config.php';

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
	
     <body class="log-bg">
	
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
		
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
		<br><br>
		<br><br>
		<br><br>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ========================== SignUp Elements ============================= -->
			<section class="log-space">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-11 col-md-11">
						
							<div class="row no-gutters position-relative log_rads">
								<div class="col-lg-6 col-md-5 bg-cover" style="background:#1f2431 url(assets/img/slide6.jpg)no-repeat;">
									<div class="lui_9okt6">
										<div class="_loh_revu97">
											<div id="reviews-login">
											
												
												
											
												
												
												
												<!-- Single Reviews -->
												<div class="_loh_r96">
													<div class="_loh_r92">
														<h4><br></h4>
													</div>
													<div class="_loh_r93">
														<p><br></p>	
													</div>	
													<div class="_loh_foot_r93">
														<h4><br></h4>
														<span><br></span>
													</div>												
												</div>
											
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-6 col-md-7 position-static p-4">
									<div class="log_wraps">
										<a href="index.php" class="log-logo_head"><img src="assets/img/logo.png" class="img-fluid" width="80" alt="" /></a>
										<div class="log__heads">
											<h4 class="mt-0 logs_title">Sign <span class="theme-cl">In</span></h4>
										</div>
										
										<form method="post" action="index.php">

										<div class="form-group">
											<label>Email Address*</label>
											<input type="email" name="Email_Address" class="form-control" value="" required>
										</div>
										
										<div class="form-group">
											<label>Password*<a href="Forget_Password.php" class="elio_right">Forget Password?</a></label>
											<input type="password" name="Password" class="form-control" value="" required>
										</div>
										
										
										
										
										
									<div class="form-group">
										<center><button type="submit" name="Submit" class="btn btn-primary">Sign In</button></center>
									</div>
									
									</form>
										
										
										<div class="form-group">
											<a href="index.php" class="btn btn_apply w-100">Back Home</a>
										</div>
										
										
										<div class="form-group text-center mb-0 mt-3">
											You Have't Any Account? <a href="Signup.php" class="theme-cl">SignUp</a>
										</div>
										
									</div>
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- ========================== Login Elements ============================= -->
			

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