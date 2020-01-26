<html>
<head>
		<link rel="stylesheet" href="details.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
	<body style="background-color:#24a1b7;">
		<?php include "header.php" ?>

		<?php
			//connectio to server
				include "connection.php"; 	
			 
 		?>
			<h1 class="h1">COURSE DETAILS</h1>
			<button  class="addbut" onclick="window.location.href='form5.php';"><font size="6">ADD COURSES</font></button><br>
		<div id="table">	
		<?php	
			 
			 //run query
					$query="SELECT * from courses c JOIN faculty f JOIN department d on c.faculty_id=f.faculty_id AND c.department_id=d.department_id";

					$coursedata=mysqli_query($conn,$query);

			//printing table
					echo	"<table class='table  table-hover table-sm' style='width:100%'>
							<tr>
								<th style='font-size:20px'>ID</th>
								<th style='font-size:20px'>Course</th>
								<th style='font-size:20px'>Faculty name</th>
								<th style='font-size:20px'>Department name</th>	
								<th></th>
								<th></th>
							</tr>";
				foreach($coursedata as $stu)
				{    
					echo	 "<tr>
								<td>".$stu['course_id']."</td>
								<td>".$stu['course_name']."</td>
								<td><a id='link' href='faculty.php?faculty_name=".$stu['faculty_name']."'><u>".$stu['faculty_name']."</u></a></td>
								<td><a id='link' href='department.php?department_name=".$stu['department_name']."'><u>".$stu['department_name']."</u></a></td>
								<td><a id='editlink' href='enrollment.php?course_id=".$stu['course_id']."'>Enrollments</a></td>
								<td><a id='editlink' href='editcourse.php?course_id=".$stu['course_id']."'>Edit</a></td>
							</tr>";
				}
			
				echo	"</table>";


		?>
		</div>
	</body>
</html>