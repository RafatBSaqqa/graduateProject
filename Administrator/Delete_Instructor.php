<?php
session_start();

$Instructor_ID=$_GET['Instructor_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from instructors where ID='$Instructor_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Instructor Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Instructors_List.php';
        </script>";

?>