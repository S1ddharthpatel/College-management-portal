<html>

	<body style="background-color:#24a1b7;">

		<?php include "header.php" ?><br>
       
		<?php	
			//connectio to server
				include "connection.php";
			//construction of query


			$autoquery= "INSERT INTO `enrollment`(`id`, `student_id`, `course_id`) 
										VALUES (NULL,'".$_POST['student_id']."','".$_POST['course_id']."')";

			if(mysqli_query($conn,$autoquery))
				{?>
							<script>
								alert("Insertion Successful");
								window.location.replace("showfaculty.php");		
							</script>
				<?php	
				}
			else
				{echo "<br>".mysqli_error($conn);}			
		?>
	</body>
</html>