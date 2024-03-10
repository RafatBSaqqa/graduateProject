<?php
session_start();

$CR_ID=$_GET['CR_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from courses_rates where ID='$CR_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Review Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Courses_Review_List.php';
        </script>";

?>