<html>

	<body style="background-color:#24a1b7;">
			<?php include "header.php" ?><br>
		
			<?php
				
				//construction of query	
				$autoquery="UPDATE `students`, `courses` 
							SET `student_name`= '".$_POST["student_name"]."', `course_name`= '".$_POST["course_name"]."'
							WHERE `students`.`student_name` = '".$_POST['student_name']."' AND `courses`.`course_name` = '".$_POST['course_name']."'";
												
				//connectio to server
					include "connection.php"; 
					
					if(mysqli_query($conn,$autoquery))
						{?>
							<script>
								alert("Insertion Successful");
								window.location.replace("showenrollment.php");		
							</script>
						<?php	
						}
					else
						{echo mysqli_error($conn);}				
				
				
			?>
	
	</body>
</html>	