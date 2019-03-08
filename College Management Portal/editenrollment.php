<html>

	<body style="background-color:powderblue;">
			<?php include "header.php" ?><br>

			<?php

			//connectio to server
					include "connection.php"; 	
				
			//run query
					$query="SELECT * from enrollment e JOIN students s JOIN courses c on e.student_id=s.student_id AND e.course_id=c.course_id";
					$enroll=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($enroll);
			?>
					<form action="updateenrollment.php" method="post">
					<input type="hidden" name="id" value="<?php echo $row['id'];?>"/> <br>			
					Name of student: <input type="text" name="student_name" value="<?php echo $row['student_name'];?>"/> <br>	
					Name of course: <input type="text" name="course_name" value="<?php echo $row['course_name'];?>"/> <br>	
					<input type="submit"/>
					<input type="reset"/>
					</form>	
			
	</body>
</html>			
			
