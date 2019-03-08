<html>

	<body style="background-color:powderblue;">
		<?php include "header.php" ?><br>

		<?php
			//connectio to server
				include "connection.php"; 	
			 
 		?>
			<h1>ENROLLMENTS</h1><br>
			<a href="form6.php"><br><font size="6">ADD ENROLLMENTS</font></a><br><br>
		<?php	
			 
			 //run query
					$query="SELECT * from enrollment e JOIN students s JOIN courses c on e.student_id=s.student_id AND e.course_id=c.course_id";

					$enrollmentdata=mysqli_query($conn,$query);

			//printing table
					echo	"<table style='width:100%' border='1' >
							<tr>
								<th>Enrollment id</th>
								<th>Student name</th>
								<th>Course name</th>									
							</tr>";
				foreach($enrollmentdata as $stu)
				{    
					echo	 "<tr>
								<td align='center'>".$stu['id']."</td>
								<td align='center'><a href='student.php?student_name='".$stu['student_name']."'><br>".$stu['student_name']."</a></td>
								<td align='center'><a href='course.php?course_name='".$stu['course_name']."'><br>".$stu['course_name']."</a></td>
								<td align='center'><a href='editenrollment.php?id='".$stu['id']."'><br>Edit</a></td>
							</tr>";
				}
			
				echo	"</table>";


		?>
	</body>
</html>
