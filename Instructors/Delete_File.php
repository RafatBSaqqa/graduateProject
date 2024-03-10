<?php
session_start();

$File_ID=$_GET['File_ID'];
$Lesson_ID=$_GET['Lesson_ID'];
$Course_ID=$_GET['Course_ID'];
$Module_ID=$_GET['Module_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from lessons_files where ID='$File_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This File Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Lesson_Files.php?Module_ID=".$Module_ID."&Course_ID=".$Course_ID."&Lesson_ID=".$Lesson_ID."';
        </script>";

?>