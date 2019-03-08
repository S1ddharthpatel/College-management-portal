<html>

	<body style="background-color:powderblue;">
			<?php include "header.php" ?><br>

			<?php

				//connectio to server
						include "connection.php"; 	
					
						$query="SELECT * FROM `students` WHERE `student_name`='".$_GET['student_name']."'";
						$stud=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($stud);
						
				//printing table
						echo	"<table style='width:100%' border='1' >
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Phone number</th>
									<th>Admission time</th>
									<th>Status</th>
								</tr>";
						
						echo	 "<tr>
										<td align='center'>".$row['student_id']."</td>
										<td align='center'>".$row['student_name']."</td>
										<td align='center'>".$row['student_phone_number']."</td>
										<td align='center'>".$row['admission_time']."</td>
										<td align='center'>".$row['status']."</td>
									</tr>";
						
					
						echo	"</table>";
			?>	
	</body>
</html>				