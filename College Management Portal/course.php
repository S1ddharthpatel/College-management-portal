<html>
	<style>
		#table{
			margin:30px;
		}
	</style>
	<title>Course info</title>

	<body style="background-color:#24a1b7;">
			<?php include "header.php" ?><br>
		<div id="table">
			<?php

				//connectio to server
						include "connection.php"; 	
					
						$query="SELECT * from courses c JOIN faculty f JOIN department d on c.faculty_id=f.faculty_id AND c.department_id=d.department_id
											WHERE `course_name`='".$_GET['course_name']."'";
						$stud=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($stud);
						
				//printing table
						echo	"<table class='table  table-hover table-sm' style='width:100%' style='font-size:20px'>
								<tr>
									<th>course id</th>
									<th>Course name</th>
									<th>Faculty name</th>
									<th>Department name</th>
								</tr>";
						
						echo	 "<tr>
										<td >".$row['course_id']."</td>
										<td >".$row['course_name']."</td>
										<td >".$row['faculty_name']."</td>
										<td>".$row['department_name']."</td>

								</tr>";
						
					
						echo	"</table>";
			?>	
		</div>
	</body>
</html>			