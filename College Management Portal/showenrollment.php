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
			<h1 class="h1">ENROLLMENTS</h1>
			<button class="addbut" onclick="window.location.href='form6.php';"><font size="6">ADD ENROLLMENTS</font></button><br>
		<div id="table">
		<?php	
			 
			 //run query
					$query="SELECT * from enrollment e JOIN students s JOIN courses c on e.student_id=s.student_id AND e.course_id=c.course_id";

					$enrollmentdata=mysqli_query($conn,$query);

			//printing table
					echo	"<table class='table  table-hover table-sm' style='width:100%' >
							<tr>
								<th style='font-size:20px'>Enrollment id</th>
								<th style='font-size:20px'>Student name</th>
								<th style='font-size:20px'>Course name</th>
								<th></th>
							</tr>";
				foreach($enrollmentdata as $stu)
				{    
					echo	 "<tr>
								<td>&nbsp".$stu['id']."</td>
								<td><a id='link' href='student.php?student_name=".$stu['student_name']."'><u>".$stu['student_name']."</u></a></td>
								<td><a id='link' href='course.php?course_name=".$stu['course_name']."'><u>".$stu['course_name']."</u></a></td>
								<td><a id='editlink' href='editenrollment.php?id=".$stu['id']."'>Edit</a></td>
							</tr>";
				}
			
				echo	"</table>";


		?>
		</div>
	</body>
</html>