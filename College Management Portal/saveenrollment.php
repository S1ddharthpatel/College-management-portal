<html>

	<body style="background-color:powderblue;">

		<?php include "header.php" ?><br>
       
		<?php	
			//connectio to server
				include "connection.php";
			//construction of query


			$autoquery= "INSERT INTO `enrollment`(`id`, `student_id`, `course_id`) 
										VALUES (NULL,'".$_POST['student_id']."','".$_POST['course_id']."')";

			if(mysqli_query($conn,$autoquery))
				{echo "<br>successfully inserted";}
			else
				{echo "<br>".mysqli_error($conn);}			
		?>
			<a href="showenrollment.php"><br><font size="3">ENROLLMENTS DETAILS</font></a>
		</body>
</html>