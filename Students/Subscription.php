<?php
session_start();

include("../includes/config.php");


$S_ID = $_SESSION['S_Log'];


if (!$_SESSION['S_Log'])
echo '<script language="JavaScript">
 document.location="../index.php";
</script>';

$query = mysqli_query($dbConn,"SELECT * FROM students WHERE ID='$S_ID'"); 
$row=mysqli_fetch_array($query);
$Full_Name=$row['Full_Name'];
$Phone_Number=$row['Phone_Number'];
$Email_Address=$row['Email_Address'];
$S_Password=$row['Password'];


$Student_ID = $_GET['Student_ID'];
$Course_ID = $_GET['Course_ID'];


if(isset($_POST['Submit']))
{

$Student_ID = $_POST['Student_ID'];
$Course_ID = $_POST['Course_ID'];


$sql = mysqli_query($dbConn,"insert into subscriptions (Student_ID,Course_ID,Status) values ('$Student_ID','$Course_ID','Pending')");


echo "<script language='JavaScript'>
			  alert ('Your Course Subscription Has Been Paid !');
      </script>";

	echo "<script language='JavaScript'>
document.location='My_Courses.php';
        </script>";


}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta name="description" content="E-Study" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="shortcut icon" href="../assets/img/icon.ico"/>
		
        <title>E-Study</title>
		 
        <!-- Custom CSS -->
        <link href="../assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="../assets/css/colors.css" rel="stylesheet">
		
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
								<img src="../assets/img/logo.png" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
																<li class=""><a href="index.php">Home</a></li>
										<li><a href="All_Courses.php">All Courses</a></li>
								
								
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
							
							<li class="login_click theme-bg">
									<a href="My_Profile.php">My Profile</a>
								</li>
								
								
								<li class="login_click theme-bg">
									<a href="Logout.php">Log Out</a>
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


			<!-- ============================ Dashboard: Dashboard Start ================================== -->
			<section class="gray pt-0">
				<div class="container-fluid">
										
					<div class="row">
					
						<div class="col-lg-3 col-md-3 p-0">
							<div class="dashboard-navbar">
								
								<div class="d-user-avater">
									<img src="../assets/img/user.png" class="img-fluid avater" alt="">
									<h4><?php echo $Full_Name; ?></h4>
									<span style="color:#fff"><?php echo $Country; ?></span>
								</div>
								
								<div class="d-navigation">
									<ul id="side-menu">
										<li ><a href="index.php"><i class="ti-dashboard"></i>Dashboard</a></li>
										<li ><a href="My_Profile.php"><i class="ti-user"></i>My Profile</a></li>
										<li class="active"><a href="My_Courses.php"><i class="ti-list"></i>My Courses</a></li>
										
										<li><a href="Logout.php"><i class="ti-power-off"></i>Log Out</a></li>
									</ul>
								</div>
								
							</div>
							
							
						</div>	
						
						<div class="col-lg-9 col-md-9 col-sm-12">
							
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="index.php">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">Course Subscription</li>
										</ol>
									</nav>
								</div>
							</div>
							<!-- /Row -->
							
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="dashboard_container">
										<div class="dashboard_container_header">
											<div class="dashboard_fl_1">
												<h4>Enter Course Subscription</h4>
											</div>
										</div>
										<div class="dashboard_container_body p-4">
											<!-- Basic info -->
											<form method="post" action="Subscription.php?Course_ID=<?php echo $Course_ID; ?>&Student_ID=<?php echo $Student_ID; ?>" enctype="multipart/form-data">
											<input type="hidden" name="Course_ID" value="<?php echo $Course_ID; ?>"/>
											<input type="hidden" name="Student_ID" value="<?php echo $Student_ID; ?>"/>
											<div class="submit-section">
												<div class="form-row">
												
													<div class="form-group col-md-6">
														<label>Credit Card Number *</label>
														<input  class="form-control" placeholder="Credit Card Number" pattern="[+ 0-9]{16}" type="text" title="Must Contain Exactly 16 Numbers" required>
													</div>
													
													<div class="form-group col-md-6">
														<label>Security Number *</label>
														<input  class="form-control" placeholder="Security Number" pattern="[+ 0-9]{3}" type="text" title="Must Contain Exactly 3 Numbers" required>
													</div>
													
													
														<div class="form-group col-md-12">
														<label>Expire Date</label>
														<input class="form-control" placeholder="Expire Date" type="month" min="<?php echo date("Y-m"); ?>" title="Expire Date"  required>
													</div>
													
													
													
												
													
													
													<div class="form-group col-lg-12 col-md-12">
															<button class="btn btn-theme" type="submit" name="Submit">Subscription Now</button>
														</div>
														
													
												</div>
											</div>
											</form>
											<!-- Basic info -->
											
											
											
										</div>
										
									</div>
								</div>
							</div>
							<!-- /Row -->
							
						</div>
					
					</div>
					<!-- Row -->
					
				</div>
			</section>
			<!-- ============================ Dashboard: My Order Start End ================================== -->
			
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
		
			
		
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/popper.min.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/select2.min.js"></script>
		<script src="../assets/js/slick.js"></script>
		<script src="../assets/js/jquery.counterup.min.js"></script>
		<script src="../assets/js/counterup.min.js"></script>
		<script src="../assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
		<script src="assets/js/metisMenu.min.js"></script>	
		<script>
			$('#side-menu').metisMenu();
		</script>

	</body>
</html>