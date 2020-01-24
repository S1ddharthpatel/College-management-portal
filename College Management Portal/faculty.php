<html>

	<body style="background-color:#24a1b7;">
			<?php include "header.php" ?><br>

			<?php

				//connectio to server
						include "connection.php"; 	
					
						$query="SELECT * FROM `faculty` WHERE faculty_name='".$_GET['faculty_name']."'";
						$faculty=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($faculty);
						
				//printing table
						echo	"<table style='width:100%' border='1' >
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Phone number</th>
									<th>Email</th>
								</tr>";
						
						   
							echo	 "<tr>
										<td align='center'>".$row['faculty_id']."</td>
										<td align='center'>".$row['faculty_name']."</td>
										<td align='center'>".$row['faculty_phone_number']."</td>
										<td align='center'>".$row['email']."</td>
									</tr>";
						
					
						echo	"</table>";
			?>	
	</body>
</html>				