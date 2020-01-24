<html>

	<body style="background-color:#24a1b7;">
			<?php include "header.php" ?><br>

			<?php

				//connectio to server
						include "connection.php"; 	
					
						$query="SELECT * FROM `department` WHERE department_name='".$_GET['department_name']."'";
						$dept=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($dept);
						
				//printing table
						echo	"<table style='width:100%' border='1' >
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Address</th>
								</tr>";
						
						   
							echo	 "<tr>
										<td align='center'>".$row['department_id']."</td>
										<td align='center'>".$row['department_name']."</td>
										<td align='center'>".$row['address']."</td>
									</tr>";
						
					
						echo	"</table>";
			?>	
	</body>
</html>				