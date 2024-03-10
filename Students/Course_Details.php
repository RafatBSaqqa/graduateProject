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



$Current_Course_ID = $_GET['Course_ID'];

$sql1 = mysqli_query($dbConn,"select * from courses where ID='$Current_Course_ID'");
					$row1 = mysqli_fetch_array($sql1);

						$Current_Course_ID = $row1['ID'];
						$Title = $row1['Title'];
						$Description = $row1['Description'];
						$Overview = $row1['Overview'];
						$Total_Rates  = $row1['Total_Rates'];
						$Language  = $row1['Language'];
						$Price  = $row1['Price'];
						$Course_Media_File = $row1['Media_File'];
						$Status  = $row1['Status'];
						$Add_Date_Time  = $row1['Add_Date_Time'];
						
					
					
$sql2 = mysqli_query($dbConn,"select * from subscriptions where Course_ID='$Current_Course_ID'");
$Student_Number = mysqli_num_rows($sql2);					
					
					
$sql3 = mysqli_query($dbConn,"select * from lessons where Course_ID='$Current_Course_ID'");
$Lessons_Number = mysqli_num_rows($sql3);					


$sql4 = mysqli_query($dbConn,"select * from courses_rates where Course_ID='$Current_Course_ID' AND Status='Active'");
$Total_Reviews = mysqli_num_rows($sql4);











if(isset($_GET['Submit']))
{
$S_ID = mysqli_real_escape_string($dbConn,$_GET['S_ID']);
$Current_Course_ID = mysqli_real_escape_string($dbConn,$_GET['Current_Course_ID']);
$Review = mysqli_real_escape_string($dbConn,$_GET['Review']);
$Rate = 5;
$Date = date("Y-m-d");



$sql = mysqli_query($dbConn,"insert into courses_rates (Course_ID,Student_ID,Rate,Review,Date,Status) values ('$Current_Course_ID','$S_ID','$Rate','$Review','$Date','Pending')");


	echo "<script language='JavaScript'>
document.location='Course_Details.php?Course_ID=".$Current_Course_ID."';
        </script>";


}









$sql123 = mysqli_query($dbConn,"select * from subscriptions where Student_ID='$S_ID' AND Course_ID='$Current_Course_ID'");
if (mysqli_num_rows($sql123)>0){
	
	$Visibility = "hidden";
	$Visibility_2 = "visible";
	$View = "view";
	
	
}else{
	
	$Visibility = "visible";
	$Visibility_2 = "hidden";
	$View = "unview";

	
}







if(isset($_POST['Submit4']))
{
	
	
	
	
	
$Answer=mysqli_real_escape_string($dbConn,$_POST['Answer']);



echo "<script language='JavaScript'>
			  alert ('Your Answer Is: $Answer');
      </script>";




}
	
							
							
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta name="description" content="E-Study" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="shortcut icon" href="../assets/img/icon.png"/>
		
        <title>E-Study</title>
		 
        <!-- Custom CSS -->
        <link href="../assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="../assets/css/colors.css" rel="stylesheet">
		
		
		<style>
		audio::-webkit-media-controls-timeline,
video::-webkit-media-controls-timeline {
  display: none;
}

video::-webkit-media-controls-current-time-display {
  display: none;
}

video::-webkit-media-controls-time-remaining-display {
  display: none;
}
</style>

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
							
															
																<li ><a href="index.php">Home</a></li>

										<li class="active"><a href="All_Courses.php">All Courses</a></li>

								
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

			
			<!-- ============================ Course Header Info Start================================== -->
			<div class="image-cover ed_detail_head lg theme-ov" style="background:#000 url(../assets/img/slide5.png);" data-overlay="9">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-7 col-md-9">
							<div class="ed_detail_wrap light">
								
								<div class="ed_header_caption">
									<h2 class="ed_title"><?php echo $Title; ?></h2>
									<ul>
										<li><i class="ti-calendar"></i><?php echo $Duration; ?></li>
										<li><i class="ti-control-forward"></i><?php echo $Lessons_Number; ?> Lessons</li>
										<li><i class="ti-user"></i><?php echo $Student_Number; ?> Student Enrolled</li>
									</ul>
								</div>
								
								<div class="ed_rate_info">
									<div class="star_info">
									
									<?php
				  
				  for ($i=1; $i<=$Total_Rates; $i++){
					  
					  
					  echo '<i class="fas fa-star filled"></i>';
					  
					  
					  
				  }
				  
				  ?>
				  
				  <?php
				  
				  $Not_Rate = 5 - $Total_Rates;
				  for ($j=1; $j<=$Not_Rate; $j++){
					  
					  
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
										<li><i class="ti-control-forward"></i><?php echo $Lessons_Number; ?> Lessons</li>
										<li><i class="ti-user"></i><?php echo $Student_Number; ?> Student Enrolled</li>
									</ul>
								</div>	
								
							</div>
							
							<div class="property_video xl">
								<div class="thumb">
									<img class="pro_img img-fluid w100" src="../Instructors/<?php echo $Course_Media_File; ?>" alt="">
									
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
									
									<li class="nav-item">
										<a class="nav-link" id="questions-tab" data-toggle="pill" href="#questions" role="tab" aria-controls="questions" aria-selected="false">Questions</a>
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
					$sql1 = mysqli_query($dbConn,"select * from modules where Course_ID='$Current_Course_ID' order by ID ");
					while ($row1 = mysqli_fetch_array($sql1)){

					$Module_ID = $row1['ID'];
					$Title = $row1['Title'];
					$Description = $row1['Description'];
					$Step = $row1['Step'];
						
					
					if ($Step==1){
						
						
					$Visibility_3 = "visible";
	
	
					}else{
						
						
					$Before_Step = $Step-1;	
					$sql2244 = mysqli_query($dbConn,"select * from modules where Course_ID='$Current_Course_ID' AND Step='$Before_Step'");
					$row2244 = mysqli_fetch_array($sql2244);
					$Before_Module_ID = $row2244['ID'];
					
					$sql1144 = mysqli_query($dbConn,"select * from check_modules where Module_ID='$Before_Module_ID' AND Student_ID='$S_ID'");
					if (mysqli_num_rows($sql1144)>0){

					$Visibility_3 = "visible";
						
						
					}else{

					$Visibility_3 = "hidden";
						
						
					}
						
			
					}
					
						?>


									<!-- Part 1 -->
									<div class="card" style="visibility:<?php echo $Visibility_3; ?>">
									  <div id="<?php echo $Module_ID; ?>" class="card-header bg-white shadow-sm border-0">
										<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseOne<?php echo $Module_ID; ?>" aria-expanded="false" aria-controls="collapseOne<?php echo $Module_ID; ?>" class="d-block position-relative text-dark collapsible-link py-2 collapsed"><?php echo $Title; ?></a></h6>
									  </div>
									  <div id="collapseOne<?php echo $Module_ID; ?>" aria-labelledby="<?php echo $Module_ID; ?>" data-parent="#accordionExample" class="collapse">
										<div class="card-body pl-3 pr-3">
											<ul class="lectures_lists">


					<?php
					$sql2 = mysqli_query($dbConn,"select * from lessons where Module_ID='$Module_ID' order by ID ASC");
					while ($row2 = mysqli_fetch_array($sql2)){

						$Lesson_ID = $row2['ID'];
						$Title = $row2['Title'];
						$Description = $row2['Description'];
						
					
					
					
						?>

						

										<li class="<?php echo $View; ?>"><div class="lectures_lists_title"><i class="ti-control-play"></i><?php echo $Title; ?></div><?php echo $Description; ?>

											</li>	
											
						<br>				
																			
						<?php
						$sql3 = mysqli_query($dbConn,"select * from lessons_files where Lesson_ID='$Lesson_ID' order by ID ASC");
						while ($row3 = mysqli_fetch_array($sql3)){

						$File_ID = $row3['ID'];
						$File_Name = $row3['File_Name'];
						$File_Path = $row3['File_Path'];
						?>
				
						<i class="ti-file" style="visibility:<?php echo $Visibility_2; ?>"></i> <a style="visibility:<?php echo $Visibility_2; ?>" href="../Instructors/<?php echo $File_Path; ?>" target="_blank"><?php echo $File_Name; ?></a>
						<br>
						<?php
						}
						?>	

						

						<?php
						$sql5 = mysqli_query($dbConn,"select * from lessons_media where Lesson_ID='$Lesson_ID'");
						while ($row5 = mysqli_fetch_array($sql5)){

						$Media_ID = $row5['ID'];
						$Media_Name = $row5['Media_Name'];
						$Media_Path = $row5['Media_Path'];
						
						?>
				
	
							
<a style="visibility:<?php echo $Visibility_2; ?>" href="../Instructors/<?php echo $Media_Path; ?>" data-toggle="modal" data-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i> <?php echo $Media_Name; ?></a>
		
<!-------------------------------------------------------------------------------->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<video style="visibility:<?php echo $Visibility_2; ?>" oncontextmenu="return false;" width="100%" id="home_explainer_placeholder" class="video_placeholder" onended="videoEnded<?php echo $Media_ID; ?>()" controls controlsList="nodownload">
<source src="../Instructors/<?php echo $Media_Path; ?>" type="video/mp4">
</video>
		
		
		
		

<script>var video = document.getElementById('home_explainer_placeholder');
var supposedCurrentTime = 0;
video.addEventListener('timeupdate', function() {
  if (!video.seeking) {
    supposedCurrentTime = video.currentTime;
  }
});
// prevent user from seeking
video.addEventListener('seeking', function() {
  // guard agains infinite recursion:
  // user seeks, seeking is fired, currentTime is modified, seeking is fired, current time is modified, ....
  var delta = video.currentTime - supposedCurrentTime;
  if (Math.abs(delta) > 0.01) {
    console.log("Seeking is disabled");
    video.currentTime = supposedCurrentTime;
  }
});
// delete the following event handler if rewind is not required
video.addEventListener('ended', function() {
  // reset state in order to allow for rewind
  supposedCurrentTime = 0;
});
</script>

			









<span style="color:red">Play The Video Until End To Active The Submit Button !</span>



<form method="post" action="Check_Medias.php?Course_ID=<?php echo $Current_Course_ID; ?>" >
		<input type="hidden" name="Module_ID" value="<?php echo $Module_ID; ?>"/>
		<input type="hidden" name="Lesson_ID" value="<?php echo $Lesson_ID; ?>"/>
		<input type="hidden" name="Current_Course_ID" value="<?php echo $Current_Course_ID; ?>"/>
		<input type="hidden" name="Media_ID" value="<?php echo $Media_ID; ?>"/>
		<input type="hidden" name="Student_ID" value="<?php echo $S_ID; ?>"/>
<button id="SV<?php echo $Media_ID; ?>" name="Submit_5" type="submit" class="btn btn-theme enroll-btn" disabled >Submit Your View To The Video</button>
	
	</form>


					
<script>
function videoEnded<?php echo $Media_ID; ?>() {
    
	


document.getElementById("SV<?php echo $Media_ID; ?>").disabled = false;


	


	
}
</script>			
					<br>				
							
							
				



				

						<?php
						}
						?>	
						
							
							
								<hr>
											
											
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
									<h3>Course Reviews -  <span> <?php echo $Total_Reviews; ?> </span></h3>
											</div>
											<div class="reviews-comments-wrap">
												
												
												
												
												
												
												
												<?php
					$sql1 = mysqli_query($dbConn,"select * from courses_rates where Course_ID='$Current_Course_ID' AND Status='Accepted'");
					while ($row1 = mysqli_fetch_array($sql1)){

						$Review_ID = $row1['ID'];
						$Student_ID = $row1['Student_ID'];
						$Review = $row1['Review'];
						$Rate = $row1['Rate'];


						$Date  = $row1['Date'];
					
						$Status  = $row1['Status'];
						$Add_Date_Time  = $row1['Add_Date_Time'];
						
					
					$sql2 = mysqli_query($dbConn,"select * from students where ID='$Student_ID'");
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
											
											
											
											
											
																						
											
											<!-- Submit Reviews -->
										<div class="edu_wraper">
											<h4 class="edu_title">Submit Reviews</h4>
											<div class="review-form-box form-submit">
												<form>
													<div class="row">
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														<form action="Course_Details.php?Course_ID=<?php echo $Current_Course_ID; ?>" method="post" >
														
											
											
											
											
  
  
														<input type="hidden" name="S_ID" value="<?php echo $S_ID; ?>"/>
														<input type="hidden" name="Current_Course_ID" value="<?php echo $Current_Course_ID; ?>"/>
														
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="form-group">
																<label>Review</label>
																<textarea class="form-control ht-140" name="Review" placeholder="Review"></textarea>
															</div>
														</div>
														
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="form-group">
																<input type="submit" name="Submit" class="btn btn-theme" value="Submit Review">
															</div>
														</div>
														
														</form>
														
													</div>
												</form>
											</div>
										</div>
										
										
										
										
										</div>
										
										
							
									</div>
									
									
									
									
									
									
									
									
									
									
									
									
									
										<!-- Reviews Detail -->
									<div class="tab-pane fade" id="questions" role="tabpanel" aria-labelledby="questions-tab">
										
										
							
										<!-- Reviews -->
										<div class="list-single-main-item fl-wrap">
											<div class="list-single-main-item-title fl-wrap">
									<h3>Course Questions</span></h3>
											</div>
											<div class="reviews-comments-wrap">
												
												
												
												
												
												
												
												<?php
					$sql1 = mysqli_query($dbConn,"select * from questions where Course_ID='$Current_Course_ID'");
					while ($row1 = mysqli_fetch_array($sql1)){

						$Question_ID = $row1['ID'];
						$Question = $row1['Question'];
						$Correct_Answer = $row1['Correct_Answer'];
						$Wrong_Answer_1 = $row1['Wrong_Answer_1'];
						$Wrong_Answer_2 = $row1['Wrong_Answer_2'];
						

					
						?>
									
								
								
									
									
									
										<form action="Course_Details.php?Course_ID=<?php echo $Current_Course_ID; ?>" method="post" >
														
											

											
  
  
														<input type="hidden" name="Question_ID" value="<?php echo $Question_ID; ?>"/>
														<input type="hidden" name="Current_Course_ID" value="<?php echo $Current_Course_ID; ?>"/>
														
														
														
														
														
														
														
														
												  <div class="mb-3" style="font-size:18px">
				
           


<style>


input[type=radio] {
  display: none;
}

h5:hover {
  opacity:0.6;
  cursor: pointer;
}

h5:active {
  opacity:0.4;
  cursor: pointer;
}

input[type=radio]:checked + label > h5 {
  border: 10px dashed red;
}
</style>
<center>


Question: <?php echo $Question; ?><br>
<br>
Answers: 
<input class="form-radio" type="radio" name="Answer" id="choose-<?php echo $Question_ID; ?>-1" value="Correct Answer" required> 
<label for="choose-<?php echo $Question_ID; ?>-1">
<h5><?php echo $Correct_Answer; ?></h5>
</label>



<input class="form-radio" type="radio" name="Answer" id="choose-<?php echo $Question_ID; ?>-2" value="Wrong Answer" required> 
<label for="choose-<?php echo $Question_ID; ?>-2">
<h5><?php echo $Wrong_Answer_1; ?></h5>
</label>


<input class="form-radio" type="radio" name="Answer" id="choose-<?php echo $Question_ID; ?>-3" value="Wrong Answer" required> 
<label for="choose-<?php echo $Question_ID; ?>-3">
<h5><?php echo $Wrong_Answer_2; ?></h5>
</label>


			   </div>		
														
		               <center> <button class="btn btn-primary w-100" name="Submit4" type="submit">Check Answer</button></center>

													
														</form>
														
							  
			  
			  <hr>							
														
									
					<?php
					}
					?>
					

												
											</div>
											
											
											
											
											
																						
										
										
										
										
										</div>
										
										
							
									</div>
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
								</div>
							</div>
							
						</div>
						
					<div class="col-lg-4 col-md-4" style="margin-top:-100px">
						
							<!-- Course info -->
							<div class="ed_view_box style_2 overlio">
							
							
							
							
								<?php
							


							
									$C_Name= 'Course Price';
									$C_Price= $Price;
								
								?>



								
								<br>


<?php

$sql123 = mysqli_query($dbConn,"select * from subscriptions where Student_ID='$S_ID' AND Course_ID='$Current_Course_ID'");
if (mysqli_num_rows($sql123)>0){


}else{		
?>

								<div class="ed_view_price pl-4">
									<span><?php echo $C_Name; ?></span>
									<h2 class="theme-cl"><?php echo $C_Price; ?> JOD</h2>
								</div>

<?php
}
?>

								
								
								<div class="ed_view_features pl-4">
									<span>Course Overview</span>
									<p><?php echo $Overview; ?></p>
								</div>


<?php

$sql123 = mysqli_query($dbConn,"select * from subscriptions where Student_ID='$S_ID' AND Course_ID='$Current_Course_ID'");
if (mysqli_num_rows($sql123)>0){


}else{		
?>								
								<div class="ed_view_link" style="visibility:<?php echo $Visibility; ?>">
									<a href="Subscription.php?Student_ID=<?php echo $S_ID; ?>&Course_ID=<?php echo $Current_Course_ID; ?>" target="_blank" class="btn btn-theme enroll-btn">Enroll Now<i class="ti-angle-right"></i></a>
								</div>

<?php
}
?>



	
								
								
								
								
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

	</body>
</html>