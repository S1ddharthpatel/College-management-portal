<html>

	<body style="background-color:powderblue;">

			<?php include "header.php" ?>
			<br>
			<br>
			<?php
				echo $_POST['student_name']."<br>";
				echo $_POST['student_number']."<br>";
				echo $_POST['status']."<br>";



				//construction of query

					$autoquery= "INSERT INTO `students`(`student_id`, `student_name`, `student_phone_number`, `admission_time`, `status`)
						VALUES (NULL,'".$_POST['student_name']."',".$_POST['student_number'].", CURRENT_TIMESTAMP , '".$_POST['status']."')";



				//connectio to server
					include "connection.php"; 	



					if(mysqli_query($conn,$autoquery))
					{echo "<br>successfully inserted";}
					else
					{echo mysqli_error($conn);}


			?>
			
			<a href="showstudents.php"><br><font size="3">STUDENT DETAILS</font></a>
		
		</body>
</html>