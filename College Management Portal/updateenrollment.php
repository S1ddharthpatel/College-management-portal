<html>

	<body style="background-color:powderblue;">
			<?php include "header.php" ?><br>
		
			<?php
				
				//construction of query	
				$autoquery="UPDATE `students` SET `student_name`= '".$_POST["student_name"]."'WHERE `students`.`student_name` = '".$_POST['student_name']."'";
							"UPDATE `courses` SET `course_name`= '".$_POST["course_name"]."' WHERE `courses`.`course_name` = '".$_POST['course_name']."'";
												
				//connectio to server
					include "connection.php"; 
					
					if(mysqli_query($conn,$autoquery))
						{echo "<br>successfully inserted";}
					else
						{echo mysqli_error($conn);}				
				
			?>
			
			<a href="showenrollment.php"><br><font size="3">ENROLLMENTS</font></a>
	
	</body>
</html>	