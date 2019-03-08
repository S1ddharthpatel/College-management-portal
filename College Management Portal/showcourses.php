<html>

	<body style="background-color:powderblue;">
		<?php include "header.php" ?><br>

		<?php
			//connectio to server
				include "connection.php"; 	
			 
 		?>
			<h1>COURSE DETAILS</h1><br>
			<a href="form5.php"><br><font size="6">ADD COURSES</font></a><br><br>
		<?php	
			 
			 //run query
					$query="SELECT * from courses c JOIN faculty f JOIN department d on c.faculty_id=f.faculty_id AND c.department_id=d.department_id";

					$coursedata=mysqli_query($conn,$query);

			//printing table
					echo	"<table style='width:100%' border='1' >
							<tr>
								<th>ID</th>
								<th>Course</th>
								<th>Faculty name</th>
								<th>Department name</th>									
							</tr>";
				foreach($coursedata as $stu)
				{    
					echo	 "<tr>
								<td align='center'>".$stu['course_id']."</td>
								<td align='center'>".$stu['course_name']."</td>
								<td align='center'><a href='faculty.php?faculty_name=".$stu['faculty_name']."'><br>".$stu['faculty_name']."</a></td>
								<td align='center'><a href='department.php?department_name=".$stu['department_name']."'><br>".$stu['department_name']."</a></td>
								<td align='center'><a href='editcourse.php?course_id=".$stu['course_id']."'><br>Edit</a></td>
							</tr>";
				}
			
				echo	"</table>";


		?>
	</body>
</html>