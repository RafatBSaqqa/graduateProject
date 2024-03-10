<?php
session_start();

include 'includes/config.php';

$Course_IDID = $_GET['Course_ID'];

$sql1 = mysqli_query($dbConn, "select * from courses where ID='$Course_IDID'");
$row1 = mysqli_fetch_array($sql1);

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



$sql2 = mysqli_query($dbConn, "select * from subscriptions where Course_ID='$Course_IDID'");
$Student_Number = mysqli_num_rows($sql2);


$sql3 = mysqli_query($dbConn, "select * from lessons where Course_ID='$Course_IDID'");
$Lessons_Number = mysqli_num_rows($sql3);


$sql4 = mysqli_query($dbConn, "select * from courses_rates where Course_ID='$Course_IDID' AND Status='Active'");
$Total_Reviews = mysqli_num_rows($sql4);







?>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="description" content="E-Study" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="shortcut icon" href="assets/img/icon.png" />

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
	<div id="preloader">
		<div class="preloader"><span></span><span></span></div>
	</div>


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

							<li><a href="index.php">Home</a></li>
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


		<!-- ============================ Course Header Info Start================================== -->
		<div class="image-cover ed_detail_head lg theme-ov" style="background:#000 url(assets/img/slide5.png);" data-overlay="9">
			<div class="container">
				<div class="row">

					<div class="col-lg-7 col-md-9">
						<div class="ed_detail_wrap light">

							<div class="ed_header_caption">
								<h2 class="ed_title"><?php echo $Title; ?></h2>
								<ul>
									<li><i class="ti-control-forward"></i><?php echo $Lessons_Number; ?> Lessons</li>
									<li><i class="ti-user"></i><?php echo $Student_Number; ?> Student Enrolled</li>
								</ul>
							</div>

							<div class="ed_rate_info">
								<div class="star_info">

									<?php

									for ($i = 1; $i <= $Total_Rates; $i++) {


										echo '<i class="fas fa-star filled"></i>';
									}

									?>

									<?php

									$Not_Rate = 5 - $Total_Rates;
									for ($j = 1; $j <= $Not_Rate; $j++) {


										echo '<i class="fas fa-star"></i>';
									}

									?>





								</div>
								<div class="review_counter">
									<strong class="good"><?php echo $Total_Rates; ?></strong> <?php echo $Total_Reviews; ?> Reviews
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================ Course Header Info End ================================== -->

		<!-- ============================ Course Detail ================================== -->
		<section class="bg-light pt-0">
			<div class="container">
				<div class="row">

					<div class="col-lg-8 col-md-8 pt-5">

						<div class="inline_edu_wrap">
							<div class="inline_edu_first">
								<h4><?php echo $Title; ?></h4>
								<ul class="edu_inline_info">
									<li><i class="ti-calendar"></i><?php echo $Duration; ?></li>
									<li><i class="ti-control-forward"></i><?php echo $Lessons_Number; ?> Lessons</li>
									<li><i class="ti-user"></i><?php echo $Student_Number; ?> Student Enrolled</li>
								</ul>
							</div>

						</div>

						<div class="property_video xl">
							<div class="thumb">
								<img class="pro_img img-fluid w100" src="Instructors/<?php echo $Media_File; ?>" alt="">

							</div>


						</div>

						<!-- All Info Show in Tab -->
						<div class="tab_box_info mt-4">
							<ul class="nav nav-pills mb-3 light" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="overview-tab" data-toggle="pill" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="curriculum-tab" data-toggle="pill" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="false">Curriculum</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" id="reviews-tab" data-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
								</li>
							</ul>

							<div class="tab-content" id="pills-tabContent">

								<!-- Overview Detail -->
								<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
									<!-- Overview -->
									<div class="edu_wraper">
										<h4 class="edu_title">Course Description</h4>
										<p style="text-align:justify"><?php echo $Description; ?></p>

									</div>


								</div>

								<!-- Curriculum Detail -->
								<div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
									<div class="edu_wraper">
										<h4 class="edu_title">Course Circullum</h4>
										<div id="accordionExample" class="accordion shadow circullum">











											<?php
											$sql1 = mysqli_query($dbConn, "select * from modules where Course_ID='$Course_IDID' order by ID ASC");
											while ($row1 = mysqli_fetch_array($sql1)) {

												$Module_ID = $row1['ID'];
												$Title = $row1['Title'];
												$Description = $row1['Description'];





											?>





												<!-- Part 1 -->
												<div class="card">
													<div id="<?php echo $Module_ID; ?>" class="card-header bg-white shadow-sm border-0">
														<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseOne<?php echo $Module_ID; ?>" aria-expanded="false" aria-controls="collapseOne<?php echo $Module_ID; ?>" class="d-block position-relative text-dark collapsible-link py-2 collapsed"><?php echo $Title; ?></a></h6>
													</div>
													<div id="collapseOne<?php echo $Module_ID; ?>" aria-labelledby="<?php echo $Module_ID; ?>" data-parent="#accordionExample" class="collapse">
														<div class="card-body pl-3 pr-3">
															<ul class="lectures_lists">


																<?php
																$sql2 = mysqli_query($dbConn, "select * from lessons where Module_ID='$Module_ID' order by ID ASC");
																while ($row2 = mysqli_fetch_array($sql2)) {

																	$Lesson_ID = $row2['ID'];
																	$Title = $row2['Title'];
																	$Description = $row2['Description'];




																?>



																	<li class="unview">
																		<div class="lectures_lists_title"><i class="ti-control-play"></i><?php echo $Title; ?></div><?php echo $Description; ?>
																	</li>


																<?php

																}
																?>


															</ul>
														</div>
													</div>
												</div>



											<?php

											}
											?>




















										</div>
									</div>
								</div>



								<!-- Reviews Detail -->
								<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">



									<!-- Reviews -->
									<div class="list-single-main-item fl-wrap">
										<div class="list-single-main-item-title fl-wrap">
											<h3>Item Reviews - <span> <?php echo $Total_Reviews; ?> </span></h3>
										</div>
										<div class="reviews-comments-wrap">







											<?php
											$sql1 = mysqli_query($dbConn, "select * from courses_rates where Course_ID='$Course_IDID' AND Status='Active'");
											while ($row1 = mysqli_fetch_array($sql1)) {

												$Review_ID = $row1['ID'];
												$Student_ID = $row1['Student_ID'];
												$Review = $row1['Review'];
												$Rate = $row1['Rate'];


												$Date  = $row1['Date'];

												$Status  = $row1['Status'];
												$Add_Date_Time  = $row1['Add_Date_Time'];


												$sql2 = mysqli_query($dbConn, "select * from students where ID='$Student_ID'");
												$row2 = mysqli_fetch_array($sql2);
												$Student_Full_Name = $row2['Full_Name'];

											?>



												<!-- reviews-comments-item -->
												<div class="reviews-comments-item">
													<div class="review-comments-avatar">
														<img src="assets/img/user.png" class="img-fluid" alt="">
													</div>
													<div class="reviews-comments-item-text">
														<h4><?php echo $Student_Full_Name; ?> &nbsp;<span class="reviews-comments-item-date"><i class="ti-calendar theme-cl"></i><?php echo $Date; ?></span></h4>

														<div class="listing-rating high" data-starrating2="5"><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><i class="ti-star active"></i><span class="review-count"><?php echo $Rate; ?></span> </div>
														<div class="clearfix"></div>
														<p>" <?php echo $Review; ?> "</p>
													</div>
												</div>
												<!--reviews-comments-item end-->


											<?php
											}
											?>



										</div>
									</div>



								</div>

							</div>
						</div>

					</div>

					<div class="col-lg-4 col-md-4">

						<!-- Course info -->
						<div class="ed_view_box style_2 overlio">


							<?php


							$C_Name = 'Course Price';
							$C_Price = $Price;

							?>

							<br>
							<div class="ed_view_price pl-4">
								<span><?php echo $C_Name; ?></span>
								<h2 class="theme-cl"><?php echo $C_Price; ?> JOD</h2>
							</div>


							<div class="ed_view_features pl-4">
								<span>Course Features</span>
								<p><?php echo $Features; ?></p>
							</div>
							<div class="ed_view_link">
								<a href="#" data-toggle="modal" data-target="#login" class="btn btn-theme enroll-btn">Enroll Now<i class="ti-angle-right"></i></a>
							</div>







						</div>

					</div>

				</div>

			</div>
		</section>
		<!-- ============================ Course Detail ================================== -->



		<!-- ============================ Footer Start ================================== -->
		<footer class="light-footer">
			<div>
				<div class="container">
					<div class="row">

						<div class="col-lg-6 col-md-6">
							<div class="footer-widget">
								<img src="assets/img/logo.png" class="img-footer" alt="" />
								<div class="footer-add">
									<p>Amman / Jordan</p>
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