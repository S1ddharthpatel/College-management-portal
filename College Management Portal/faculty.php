<html>
	<style>
		#table{
			margin:30px;
		}
	</style>
	<title>Faculty info</title>
	<body style="background-color:#24a1b7;">
			<?php include "header.php" ?><br>


		<div id="table">
			<?php

				//connectio to server
						include "connection.php"; 	
					
						$query="SELECT * FROM `faculty` WHERE faculty_name='".$_GET['faculty_name']."'";
						$faculty=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($faculty);
						
				//printing table
						echo	"<table class='table  table-hover table-sm' style='width:100%' style='font-size:20px'>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Phone number</th>
									<th>Email</th>
								</tr>";
						
						   
							echo	 "<tr>
										<td>".$row['faculty_id']."</td>
										<td>".$row['faculty_name']."</td>
										<td>".$row['faculty_phone_number']."</td>
										<td>".$row['email']."</td>
									</tr>";
					
						echo	"</table>";
			?>	
	</div>		
	</body>
</html>