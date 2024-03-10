<?php
session_start();

include 'includes/config.php';



if(isset($_POST['Submit']))
{
	

	
$Email_Address = mysqli_real_escape_string($dbConn,$_POST['Email_Address']);



$sql = mysqli_query($dbConn,"select * from students where Email_Address='$Email_Address'");

if (mysqli_num_rows($sql)>0){

$row = mysqli_fetch_array($sql);
$S_ID = $row['ID'];
$Email_Address = $row['Email_Address'];

$Password = rand(1000,9999);
$New_Password = $Password;

$sql1 = mysqli_query($dbConn,"update students set Password='$New_Password' where ID='$S_ID'");

$Subject = "E-Study- Password Reset";
$Message = 'Your New Password Is '.$Password;
$Header = "From: E-Study";
	
mail ($Email_Address,$Subject,$Message,$Header);









	  echo "<script language='JavaScript'>
	  alert ('Your Password Has Been Sent !');
      </script>";


	
	
}else{	  
	
	
	
	
echo "<script language='JavaScript'>
			  alert ('Error ... Please Check Email Address !');
      </script>";




	


}
	

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
								<div class="col-lg-6 col-md-5 bg-cover" style="background:#1f2431 url(assets/img/slide5.jpg)no-repeat;">
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
											<h4 class="mt-0 logs_title">Password <span class="theme-cl">Recovery</span></h4>
										</div>
										<form action="Forget_Password.php" method="post">
										<div class="form-group">
											<label>Email Address *</label>
											<input type="email" name="Email_Address" class="form-control" placeholder="" required>
											<br>
										<center><button type="submit" name="Submit" class="btn btn-primary">Reset Password</button></center>
										</div>
										</form>
										
										<div class="form-group">
											<a href="index.php" class="btn btn_apply w-100">Back Home</a>
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