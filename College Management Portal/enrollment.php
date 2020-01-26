<html>
	<style>
		#table{
			margin:30px;
		}
	</style>
	<title>Enrollment info</title>
	<body style="background-color:#24a1b7;">
			<?php include "header.php" ?><br>
		<div id="table">
			<?php

				//connectio to server
						include "connection.php"; 	
					
						$query="SELECT * FROM students JOIN enrollment WHERE students.student_id=enrollment.student_id AND course_id ='".$_GET['course_id']."'";
						$enrollmentdata=mysqli_query($conn,$query);
						
				//printing table
				
						echo	"<table class='table  table-hover table-sm' style='width:100%' style='font-size:20px'>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Phone number</th>
									<th>Status</th>
								</tr>";
					foreach($enrollmentdata as $row)
					{  	
						echo	 "<tr>
										<td>".$row['student_id']."</td>
										<td>".$row['student_name']."</td>
										<td>".$row['student_phone_number']."</td>
										<td>".$row['status']."</td>
									</tr>";
					}									
						echo	"</table>";
	
			?>	
		</div>	
	</body>
</html>				