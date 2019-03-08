<html>

	<body style="background-color:powderblue;">
			<?php include "header.php" ?><br>

			<?php

			//connectio to server
					include "connection.php"; 	
				
			//run query
					$query="SELECT * from courses c JOIN faculty f JOIN department d on c.faculty_id=f.faculty_id AND c.department_id=d.department_id";
					$course=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($course);
			?>
					<form action="updatecourse.php" method="post">
					<input type="hidden" name="course_id" value="<?php echo $row['course_id'];?>"/> <br>
					
					Name of course: <input type="text" name="course_name" value="<?php echo $row['course_name'];?>"/> <br>			
					Name of faculty: <input type="text" name="faculty_name" value="<?php echo $row['faculty_name'];?>"/> <br>	
					Name of department: <input type="text" name="department_name" value="<?php echo $row['department_name'];?>"/> <br>	
					<input type="submit"/>
					<input type="reset"/>
					</form>	
			
	</body>
</html>			
			
