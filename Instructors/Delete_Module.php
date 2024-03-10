<?php
session_start();

$Module_ID=$_GET['Module_ID'];
$Course_ID=$_GET['Course_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from lessons where Module_ID='$Module_ID'");
mysqli_query($dbConn,"delete from modules where ID='$Module_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Module Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Course_Modules.php?Course_ID=".$Course_ID."';
        </script>";

?>