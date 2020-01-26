<html>
	<style>
		#table{
			margin:30px;
		}
	</style>
	<title>Student info</title>
	<body style="background-color:#24a1b7;">
			<?php include "header.php" ?><br>
		<div id="table">
			<?php

				//connectio to server
						include "connection.php"; 	
					
						$query="SELECT * FROM `students` WHERE student_name ='".$_GET['student_name']."'";
						$stud=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($stud);
						
				//printing table
						echo	"<table class='table  table-hover table-sm' style='width:100%' style='font-size:20px'>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Phone number</th>
									<th>Admission time</th>
									<th>Status</th>
								</tr>";
						
						echo	 "<tr>
										<td>".$row['student_id']."</td>
										<td>".$row['student_name']."</td>
										<td>".$row['student_phone_number']."</td>
										<td>".$row['admission_time']."</td>
										<td>".$row['status']."</td>
									</tr>";
						
					
						echo	"</table>";
			?>	
		</div>	
	</body>
</html>				