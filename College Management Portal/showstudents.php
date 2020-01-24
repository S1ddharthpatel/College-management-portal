<html>
<head>
		<link rel="stylesheet" href="details.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

	<body style="background-color:#24a1b7;">
			<?php include "header.php";
				
				include "connection.php"; 			 
			?>
				<h1 class="h1">STUDENT DETAILS</h1>
			<?php	
				 
				 //run query
				$query="select * from students";

				$studentdata=mysqli_query($conn,$query);


				//printing table
				?>
				
				<button class="addbut" onclick="window.location.href='form2.php';"><font size="6">ADD STUDENT</font></button><br>
	<div id="table">				
				<?php
				
					echo	"<table class='table  table-hover table-sm' style='width:100%'>
								
								<tr>
									<th style='font-size:20px'>ID</th>
									<th style='font-size:20px'>Name</th>
									<th style='font-size:20px'>Phone Number</th>
									<th style='font-size:20px'>Status</th>
									<th></th>
								</tr>";
					foreach($studentdata as $stu)
					{    
						echo	 "<tr>
									<td>".$stu['student_id']."</td>
									<td>".$stu['student_name']."</td>	
									<td>".$stu['student_phone_number']."</td>
									<td>".$stu['status']."</td>
									<td><a id='editlink' href='editstudent.php?student_id=".$stu['student_id']."'>EDIT</a></td>	
								</tr>";
					}
					
					echo	"</table>";


			?>
	</div>		
	</body>
</html>