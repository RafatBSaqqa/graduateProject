<?php
session_start();

include("../includes/config.php");

						$Current_Course_ID = $_POST['Current_Course_ID'];
						$Media_ID = $_POST['Media_ID'];
						$Student_ID = $_POST['Student_ID'];
						$Module_ID = $_POST['Module_ID'];
						$Lesson_ID = $_POST['Lesson_ID'];



						$sql112233 = mysqli_query($dbConn,"select * from check_medias where Media_ID='$Media_ID' AND Student_ID='$Student_ID'");
						if (mysqli_num_rows($sql112233)>0){
							
							
							
							echo "<script language='JavaScript'>
							alert ('You Already Submit This Video Before !');
							</script>";
							
							
							
						}else{
							
						mysqli_query($dbConn,"insert into check_medias (Media_ID,Student_ID) values ('$Media_ID','$Student_ID')");	
							
						}
						
						
						
						
						
						
						$sql112233 = mysqli_query($dbConn,"select * from check_lessons where Lesson_ID='$Lesson_ID' AND Student_ID='$Student_ID'");
						if (mysqli_num_rows($sql112233)>0){
							
					




							
						}else{
							
						mysqli_query($dbConn,"insert into check_lessons (Lesson_ID,Student_ID) values ('$Lesson_ID','$Student_ID')");	
							
						}
						
						
						




						$sql114477 = mysqli_query($dbConn,"select * from lessons where Module_ID='$Module_ID'");
						$num114477 = mysqli_num_rows($sql114477);
						
						
						

						
						
						
						$sql225588 = mysqli_query($dbConn,"select * from lessons where Module_ID='$Module_ID'");
						while ($row225588 = mysqli_fetch_array($sql225588)){
							
							
							$L_ID = $row225588['ID'];
							
						$sql336699 = mysqli_query($dbConn,"select * from check_lessons where Lesson_ID='$L_ID' AND Student_ID='$Student_ID'");
						if (mysqli_num_rows($sql336699)>0){
							
							$T_S_L = $T_S_L+1;
							
						}else{
							
							
							
						}
							
							
							
							
						}
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						if ($T_S_L==$num114477){
							
							
							
						$sql112233 = mysqli_query($dbConn,"select * from check_modules where Module_ID='$Module_ID' AND Student_ID='$Student_ID'");
						if (mysqli_num_rows($sql112233)>0){
							
							
							
							
						}else{
							
						mysqli_query($dbConn,"insert into check_modules (Module_ID,Student_ID) values ('$Module_ID','$Student_ID')");	
							
						}
						
						
						
						
							
						}
						




	echo "<script language='JavaScript'>
document.location='Course_Details.php?Course_ID=".$Current_Course_ID."';
        </script>";
		
		
					
						?>