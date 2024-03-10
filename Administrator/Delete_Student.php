<?php
session_start();

$Student_ID=$_GET['Student_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from students where ID='$Student_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Student Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Students_List.php';
        </script>";

?>