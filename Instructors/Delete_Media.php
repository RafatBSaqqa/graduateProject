<?php
session_start();

$Media_ID=$_GET['Media_ID'];
$Lesson_ID=$_GET['Lesson_ID'];
$Course_ID=$_GET['Course_ID'];
$Module_ID=$_GET['Module_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from lessons_media where ID='$Media_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Media Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Lesson_Media.php?Module_ID=".$Module_ID."&Course_ID=".$Course_ID."&Lesson_ID=".$Lesson_ID."';
        </script>";

?>