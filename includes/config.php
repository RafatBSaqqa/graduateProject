<?php

	$dbHost = 'localhost';
	$dbUser = 'root';
	$dbPass = '';
	$dbName = 'e_study_first_2023';

$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName) or die ('MySQL connect failed. ' .  $mysqli -> error);
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' .  $mysqli -> error);

mysqli_set_charset($dbConn,'utf8'); 

date_default_timezone_set('Asia/Amman');

?>


<style>
    * {
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: -moz-none;
    -o-user-select: none;
    user-select: none;
}
</style>
