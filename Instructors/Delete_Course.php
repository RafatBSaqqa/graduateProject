<?php
session_start();

$Course_ID=$_GET['Course_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from modules where Course_ID='$Course_ID'");
mysqli_query($dbConn,"delete from lessons where Course_ID='$Course_ID'");
mysqli_query($dbConn,"delete from courses_rates where Course_ID='$Course_ID'");
mysqli_query($dbConn,"delete from courses where ID='$Course_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Course Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Courses_List.php';
        </script>";

?>