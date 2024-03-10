<?php
session_start();

include 'includes/config.php';

	$Error ='';



if(isset($_POST['Submit']))
{
	
$Username=mysqli_real_escape_string($dbConn,$_POST['Username']);
$Password=mysqli_real_escape_string($dbConn,md5($_POST['Password']));



if ($Username=='admin' && $Password=='21232f297a57a5a743894a0e4a801fc3'){


$A_ID=1;
$_SESSION['A_Log'] = $A_ID;


echo '<script language="JavaScript">
            document.location="Administrator/";
        </script>';	
}
else
{

$Error = 'Error ... Please Check Administrator Username Or Password !';
}
}


?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-Study - Administrator Portal | Login</title>

    <link href="Administrator/css/bootstrap.min.css" rel="stylesheet">
	    <link href="Administrator/css/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="Administrator/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="Administrator/css/animate.css" rel="stylesheet">
    <link href="Administrator/css/style.css" rel="stylesheet">
	        	<link rel="shortcut icon" href="Administrator/img/icon.png"/>
	
	<style>
@font-face {
   font-family: myFirstFont;
   src: url(Administrator/fonts/NotoKufiArabic-Regular.ttf);
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
            
       
                <img src="Administrator/img/logo.png" class="img-rounded" width="80%"/>

            </div>
                    <h2 class="font-bold">Admin Login</h2>
            
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <form class="m-t" role="form" method="post" action="Admin_Login.php">
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
    <script src="Administrator/js/jquery-2.1.1.js"></script>
    <script src="Administrator/js/bootstrap.min.js"></script>

</body>

</html>



