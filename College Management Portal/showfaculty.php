<html>

	<body style="background-color:powderblue;">
		
		<?php include "header.php" ?><br>
			<h1>FACULTY DETAILS</h1>
		<?php
			//displaying a table of the data


			//connectio to server
				include "connection.php"; 	
	
			 //run query
			$query="select * from faculty";

			$facultydata=mysqli_query($conn,$query);


			//printing table
		?>	
			
			<a href="form3.php"><br><font size="6">ADD FACULTY</font></a><br><br>
		<?php	echo	"<table style='width:100%' border='1'>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Phone Number</th>
								<th>Email</th>
							</tr>";
				foreach($facultydata as $stu){    
					echo	 "<tr>
								<td align='center'>".$stu['faculty_id']."</td>
								<td align='center'>".$stu['faculty_name']."</td>
								<td align='center'>".$stu['faculty_phone_number']."</td>
								<td align='center'>".$stu['email']."</td>
								<td align='center'><a href='editfaculty.php?id=".$stu['faculty_id']."'><br>Edit</a></td>
							</tr>";
				}
				echo	"</table>";


		?>
	</body>
</html>