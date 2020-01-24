<html>
<head>
		<link rel="stylesheet" href="details.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

	<body style="background-color:#24a1b7;">
		
		<?php include "header.php"
		?> 
			<h1 class="h1">FACULTY DETAILS</h1>
		<?php
			//displaying a table of the data


			//connectio to server
				include "connection.php"; 	
	
			 //run query
			$query="select * from faculty";

			$facultydata=mysqli_query($conn,$query);


			//printing table
		?>	
			
			<button class="addbut" onclick="window.location.href='form3.php';"><font size="6">ADD FACULTY</font></button><br>
	<div id="table">			
		<?php	echo	"<table class='table  table-hover table-sm' style='width:100%'>
							<tr>
								<th style='font-size:20px'>ID</th>
								<th style='font-size:20px'>Name</th>
								<th style='font-size:20px'>Phone Number</th>
								<th style='font-size:20px'>Email</th>
								<th></th>
							</tr>";
				foreach($facultydata as $stu){    
					echo	 "<tr>
								<td>".$stu['faculty_id']."</td>
								<td>".$stu['faculty_name']."</td>
								<td>".$stu['faculty_phone_number']."</td>
								<td>".$stu['email']."</td>
								<td><a id='editlink'href='editfaculty.php?id=".$stu['faculty_id']."'>Edit</a></td>
							</tr>";
				}
				echo	"</table>";


		?>
	</div>		
	</body>
</html>