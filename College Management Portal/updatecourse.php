<html>

	<body style="background-color:powderblue;">
			<?php include "header.php" ?><br>
		
			<?php
				
				//construction of query	
				$autoquery="UPDATE `courses`, `department`, `faculty` 
							SET `course_name` = '".$_POST["course_name"]."', `department_name`= '".$_POST["department_name"]."', `faculty_name`= '".$_POST["faculty_name"]."'
							WHERE `courses`.`course_name` = '".$_POST['course_name']."' AND `department`.`department_name` = '".$_POST['department_name']."' AND `faculty`.`faculty_name` = '".$_POST['faculty_name']."'";
								
												
				//connectio to server
					include "connection.php"; 	
					
					if(mysqli_query($conn,$autoquery))
						{echo "<br>successfully inserted";}
					else
						{echo mysqli_error($conn);}				
				
			?>
			
			<a href="showcourses.php"><br><font size="3">COURSES DETAILS</font></a>
	
	</body>
</html>	