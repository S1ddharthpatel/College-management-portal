<html>

	<body style="background-color:#24a1b7;">
			<?php include "header.php" ?><br>

			<?php

				//connectio to server
						include "connection.php"; 	
					
						$query="SELECT * from courses c JOIN faculty f JOIN department d on c.faculty_id=f.faculty_id AND c.department_id=d.department_id
											WHERE `course_name`='".$_GET['course_name']."'";
						$stud=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($stud);
						
				//printing table
						echo	"<table style='width:100%' border='1' >
								<tr>
									<th>course id</th>
									<th>Course name</th>
									<th>Faculty name</th>
									<th>Department name</th>
								</tr>";
						
						echo	 "<tr>
										<td align='center'>".$row['course_id']."</td>
										<td align='center'>".$row['course_name']."</td>
										<td align='center'>".$row['faculty_name']."</td>
										<td align='center'>".$row['department_name']."</td>

								</tr>";
						
					
						echo	"</table>";
			?>	
	</body>
</html>			