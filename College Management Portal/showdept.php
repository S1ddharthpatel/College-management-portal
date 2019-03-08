<html>

	<body style="background-color:powderblue;">
		<?php include "header.php" ?><br>

		<?php
			//connectio to server
				include "connection.php"; 	
			 
 		?>
			<h1>DEPARTMENT DETAILS</h1><br>
			<a href="form4.php"><br><font size="6">ADD DEPARTMENT</font></a><br><br>
		<?php	
			 
			 //run query
					$query="select * from department";

					$departmentdata=mysqli_query($conn,$query);

			//printing table
					echo	"<table style='width:100%' border='1' >
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Block</th>
								
							</tr>";
				foreach($departmentdata as $stu)
				{    
					echo	 "<tr>
								<td align='center'>".$stu['department_id']."</td>
								<td align='center'>".$stu['department_name']."</td>
								<td align='center'>".$stu['address']."</td>
								<td align='center'><a href='editdept.php?department_id=".$stu['department_id']."'><br>Edit</a></td>
							</tr>";
				}
			
				echo	"</table>";


		?>
	</body>
</html>