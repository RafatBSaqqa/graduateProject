<?php
session_start();

include 'includes/config.php';

	$Error ='';



if(isset($_POST['Submit']))
{
	
$Username=mysqli_real_escape_string($dbConn,$_POST['Username']);
$Password=mysqli_real_escape_string($dbConn,$_POST['Password']);



   $sql1 = mysqli_query($dbConn,"select * from instructors where (Username='$Username' AND Password='$Password') AND Status='Active'"); 

   

if (mysqli_num_rows($sql1)>0){

   

$row=mysqli_fetch_array($sql1);
$I_ID=$row['ID'];
$_SESSION['I_Log'] = $I_ID;






echo '<script language="JavaScript">
            document.location="Instructors/";
        </script>';	
}
else
{

$Error = 'Error ... Please Check Instructors Username Or Password !';
}
}


?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-Study - Instructors Portal | Login</title>

    <link href="Instructors/css/bootstrap.min.css" rel="stylesheet">
	    <link href="Instructors/css/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="Instructors/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="Instructors/css/animate.css" rel="stylesheet">
    <link href="Instructors/css/style.css" rel="stylesheet">
	        	<link rel="shortcut icon" href="Instructors/img/icon.png"/>
	
	<style>
@font-face {
   font-family: myFirstFont;
   src: url(Instructors/fonts/NotoKufiArabic-Regular.ttf);
   font-size:8px;
}
body {
   font-family: myFirstFont;
}






</style>





</head>

<body class="white-bg" class="" style="background-color:#fff">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
            
       
                <img src="Instructors/img/logo.png" class="img-rounded" width="80%"/>

            </div>
                    <h2 class="font-bold">Instructors Login</h2>
            
            </p>
            <form class="m-t" role="form" method="post" action="Instructors_Login.php">
                <div class="form-group">
                   Username <input type="text" class="form-control" placeholder="Username" name="Username" required="">
                </div>
				



                <div class="form-group">
                  Password  <input type="password" id="password" class="form-control" placeholder="Password" name="Password" required="">

				</div>
					
                <button type="submit" name="Submit" class="btn btn-primary block full-width m-b">Login</button>
                <button type="reset" name="Reset" class="btn btn-danger block full-width m-b">Clear</button>
			
				<font style="color:red"><?php echo $Error; ?></font>
				
				
			   </div>

			</form>




  <p class="m-t"> <small><br>E-Study © <?php echo date("Y"); ?>. All Rights Reserved </small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="Instructors/js/jquery-2.1.1.js"></script>
    <script src="Instructors/js/bootstrap.min.js"></script>

</body>

</html>



