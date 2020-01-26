<html>
	<style>
		#table{
			margin:30px;
		}
	</style>
	<title>Department info</title>	
	<body style="background-color:#24a1b7;">
			<?php include "header.php" ?><br>
		<div id="table">
			<?php

				//connectio to server
						include "connection.php"; 	
					
						$query="SELECT * FROM `department` WHERE department_name='".$_GET['department_name']."'";
						$dept=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($dept);
						
				//printing table
						echo	"<table class='table  table-hover table-sm' style='width:100%' style='font-size:20px' >
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Address</th>
								</tr>";
						
						   
							echo	 "<tr>
										<td>".$row['department_id']."</td>
										<td>".$row['department_name']."</td>
										<td>".$row['address']."</td>
									</tr>";
						
					
						echo	"</table>";
			?>	
		</div>	
	</body>
</html>				