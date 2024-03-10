<?php
session_start();

$Subscription_ID=$_GET['Subscription_ID'];
$Course_ID=$_GET['Course_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from subscriptions where ID='$Subscription_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Subscription Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Subscriptions_List.php?Course_ID=".$Course_ID."';
        </script>";

?>