<html>

	<body style="background-color:#24a1b75;">
			<?php include "header.php" ?><br>
		
			<?php
				
				//construction of query	
				$autoquery="UPDATE `courses`, `department`, `faculty` 
							SET `course_name` = '".$_POST["course_name"]."', `department_name`= '".$_POST["department_name"]."', `faculty_name`= '".$_POST["faculty_name"]."'
							WHERE `courses`.`course_name` = '".$_POST['course_name']."' AND `department`.`department_name` = '".$_POST['department_name']."' AND `faculty`.`faculty_name` = '".$_POST['faculty_name']."'";
								
												
				//connectio to server
					include "connection.php"; 	
					
					if(mysqli_query($conn,$autoquery))
						{?>
							<script>
								alert("Insertion Successful");
								window.location.replace("showcourses.php");		
							</script>
						<?php	
						}
					else
						{echo mysqli_error($conn);}				
				
			?>
	
	</body>
</html>	