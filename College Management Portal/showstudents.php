<html>

	<body style="background-color:powderblue;">
			<?php include "header.php";
				
				include "connection.php"; 			 
			?>
				<h1>STUDENT DETAILS</h1>
			<?php	
				 
				 //run query
				$query="select * from students";

				$studentdata=mysqli_query($conn,$query);


				//printing table
				?>
				
				<a href="form2.php"><br><font size="6">ADD STUDENT</font></a><br><br>
				
				<?php
				
					echo	"<table style='width:100%' border='1'>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Phone Number</th>
									<th>Status</th>
								</tr>";
					foreach($studentdata as $stu)
					{    
						echo	 "<tr>
									<td align='center'>".$stu['student_id']."</td>
									<td align='center'>".$stu['student_name']."</td>
									<td align='center'>".$stu['student_phone_number']."</td>
									<td align='center'>".$stu['status']."</td>
									<td align='center'><a href='editstudent.php?student_id=".$stu['student_id']."'><br>Edit</a></td>
									<td align='center'><a href='delete.php?student_id=".$stu['student_id']."'><br>DELETE</a></td>
								</tr>";
					}
					
					echo	"</table>";


			?>
	</body>
</html>