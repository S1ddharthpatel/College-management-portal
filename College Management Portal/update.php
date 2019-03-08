<html>

	<body style="background-color:powderblue;">
			<?php include "header.php" ?><br>
		
			<?php
				
				//construction of query	
				$autoquery="UPDATE `students` SET `student_name` = '".$_POST["student_name"]."',
												`student_phone_number`=".$_POST['student_phone_number'].",
												`status`= '".$_POST["status"]."' WHERE `students`.`student_id` = ".$_POST['student_id'];
				

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