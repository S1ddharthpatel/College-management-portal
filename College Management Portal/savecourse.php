<html>

	<body style="background-color:#24a1b7;">

		<?php include "header.php" ?><br>

		<?php	
			//connectio to server
				include "connection.php";
			//construction of query

				$autoquery= "INSERT INTO `courses`(`course_id`, `course_name`, `faculty_id`, `department_id`) 
										VALUES (NULL,'".$_POST['course_name']."','".$_POST['faculty_id']."','".$_POST['department_id']."')";

			if(mysqli_query($conn,$autoquery))
				{?>
							<script>
								alert("Insertion Successful");
								window.location.replace("showcourses.php");		
							</script>
				<?php	
				}
			else
				{echo "<br>".mysqli_error($conn);}			
		?>

		</body>
</html>