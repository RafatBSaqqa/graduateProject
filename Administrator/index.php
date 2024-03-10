<?php
session_start();

include("../includes/config.php");


$A_ID = $_SESSION['A_Log'];


if (!$_SESSION['A_Log'])
echo '<script language="JavaScript">
 document.location="../Admin_Login.php";
</script>';





	$sql1 = mysqli_query($dbConn,"select * from students");
	$row1 = mysqli_num_rows($sql1);	
		
		
		
	$sql2 = mysqli_query($dbConn,"select * from courses");
	$row2 = mysqli_num_rows($sql2);
	
	
	
	$sql3 = mysqli_query($dbConn,"select * from instructors");
	$row3 = mysqli_num_rows($sql3);	
	


	

?>
<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>E-Study | Administration Area</title>

   <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">


    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/icon.png"/>
	
	<style>
@font-face {
   font-family: myFirstFont;
   src: url(fonts/NotoKufiArabic-Regular.ttf);
   font-size:8px;
}
body {
   font-family: myFirstFont;
}

</style>

</head>

<body style="back">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header" style="background-color:#fff">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image"  src="img/logo.png" width="100%"/>
                             </span>
							 

                       
                           
                            
                        </div>
                        <div class="logo-element" style="color:#000">
                            E STUDY
                        </div>
						
							
                    </li>
                    <li class="active">
                        <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>

                    </li>
					
				
				
					
					
					
					
					

                       <li>
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Instructors</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="Add_New_Instructor.php">Add New Instructor</a></li>
                            <li><a href="View_Instructors_List.php">View Instructors List</a></li>

                        </ul>
                    </li>
					
					



					<li>
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Students</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="View_Students_List.php">View Students List</a></li>

                        </ul>
                    </li>
					
					<li>
                        <a href="#"><i class="fa fa-list"></i> <span class="nav-label">Courses Review</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="View_Courses_Review_List.php">View Courses Review List</a></li>

                        </ul>
                    </li>

					

                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome To E-Study - Administration Portal</span>
                </li>
                <li class="dropdown">

                    <ul class="dropdown-menu dropdown-messages">


                        <li class="divider"></li>


                    </ul>
                </li>



                <li>
                    <a href="Logout.php">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </li>

            </ul>

        </nav>
        </div>

        <div class="row">
            <div class="col-lg-12" style="background-color:#fff">
                <div class="wrapper wrapper-content">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>E-Study - Administration Portal</h5>

                                    </div>
                                    <div class="ibox-content">

                                        <div>
                                            <div class="feed-activity-list">

                                                <div class="feed-element">

                                                    <div class="media-body ">
												
													<br>
                                                        <strong><center>
														
													
														
														<img src="img/logo.png" width="35%"/></center></strong>

                                                    </div>



                                                </div>






                                            </div>


                                        </div>

                                    </div>
                                </div>
								
								
								
								
								
								
								
								<div class="col-lg-4" >
                <div class="widget style1 lazur-bg" style="background-color:#2D3954">
                    <div class="row">
                        <div class="col-xs-4">
                            <i  style="color:#F8B948" class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
										<a style="color:#fff" href="View_Students_List.php">

										<h3> Total Students</h3>
										<h2 style="color:#fff" class="font-bold"> <?php echo $row1; ?></h2>
										</a>
                        </div>
                    </div>
                </div>
            </div>						
					
					
					
					
					
					
					
					
					
					
					
					<div class="col-lg-4" >
                <div class="widget style1 lazur-bg" style="background-color:#2D3954">
                    <div class="row">
                        <div class="col-xs-4">
                            <i  style="color:#F8B948" class="fa fa-list fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
										

										<h3> Total Courses</h3>
										<h2 style="color:#fff" class="font-bold"> <?php echo $row2; ?></h2>
										
                        </div>
                    </div>
                </div>
            </div>						
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<div class="col-lg-4" >
                <div class="widget style1 lazur-bg" style="background-color:#2D3954">
                    <div class="row">
                        <div class="col-xs-4">
                            <i  style="color:#F8B948" class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
										<a style="color:#fff" href="View_Instructors_List.php">

										<h3> Total Instructors</h3>
										<h2 style="color:#fff" class="font-bold"> <?php echo $row3; ?></h2>
										</a>
                        </div>
                    </div>
                </div>
            </div>						
					
					
					
					
					
					
			
					

                            </div>


                        </div>
                </div>
              </div>

                <div class="footer">

                    <div>
                       <center>E-Study © <?php echo date("Y"); ?>. All Rights Reserved.</center>
                    </div>
                </div>
            </div>
        </div>

        </div>




        </div>
    </div>
<!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>





    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>


   
</body>
</html>
