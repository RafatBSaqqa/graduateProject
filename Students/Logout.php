<?php
session_start();

include "../includes/config.php";

$_SESSION['S_Log']=0;

echo "<script language='JavaScript'>
			  alert ('You Logout Successfuly !');
      </script>";	
	  
echo '  <script language="JavaScript">
            document.location="../index.php";
        </script>';




?>

