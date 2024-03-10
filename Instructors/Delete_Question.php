<?php
session_start();

$Question_ID=$_GET['Question_ID'];
$Course_ID=$_GET['Course_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from questions where ID='$Question_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Question Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Course_Questions.php?Course_ID=".$Course_ID."';
        </script>";

?>