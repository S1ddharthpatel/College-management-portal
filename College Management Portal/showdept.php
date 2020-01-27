<html>
<head>
		<link rel="stylesheet" href="details.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
	<title>Department details</title>
	<body style="background-color:#24a1b7;">
		<?php include "header.php" ?>

		<?php
			//connectio to server
				include "connection.php"; 	
			 
 		?>
			<h1  class="h1">DEPARTMENT DETAILS</h1>
			<button class="addbut" onclick="window.location.href='form4.php';"><font size="6">ADD DEPARTMENT</font></button><br>
	<div id="table">
		<?php	
			 
			 //run query
					$query="select * from department";

					$departmentdata=mysqli_query($conn,$query);

			//printing table
					echo	"<table class='table  table-hover table-sm' style='width:100%' style='font-size:20px'>
							<tr>
								<th style='font-size:20px'>ID</th>
								<th style='font-size:20px'>Name</th>
								<th style='font-size:20px'>Block</th>
								<th style='font-size:20px'></th>
							</tr>";
				foreach($departmentdata as $stu)
				{    
					echo	 "<tr>
								<td>".$stu['department_id']."</td>
								<td>".$stu['department_name']."</td>
								<td>".$stu['address']."</td>
								<td><a id='editlink' href='editdept.php?department_id=".$stu['department_id']."'>Edit</a></td>
							</tr>";
				}
			
				echo	"</table>";


		?>
	</div>	
	</body>
</html>