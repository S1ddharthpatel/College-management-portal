<html>

	<body style="background-color:powderblue;">

		<?php include "header.php" ?><br>

		<?php	
			//connectio to server
				include "connection.php";
			//construction of query

				$autoquery= "INSERT INTO `courses`(`course_id`, `course_name`, `faculty_id`, `department_id`) 
										VALUES (NULL,'".$_POST['course_name']."','".$_POST['faculty_id']."','".$_POST['department_id']."')";

			if(mysqli_query($conn,$autoquery))
				{echo "<br>successfully inserted";}
			else
				{echo "<br>".mysqli_error($conn);}			
		?>
			<a href="showcourses.php"><br><font size="3">COURSES DETAILS</font></a>
		</body>
</html>