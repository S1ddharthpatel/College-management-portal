<html>
	<head>
	
		<link rel="stylesheet" href="form.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<?php include "header.php" ?>		
	</head>
		<title>Edit Course Details</title>
	<body style="background-color:#24a1b7;">

			<?php

			//connectio to server
					include "connection.php"; 	
				
			//run query
					$query="SELECT * from courses c JOIN faculty f JOIN department d on c.faculty_id=f.faculty_id AND c.department_id=d.department_id";
					$course=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($course);
			?>
				<br>
				<div class="jumbotron">	
					<h2 class="display-4">Edit the student details</h2>
					<hr class="my-4">
					<div class="lead">
					<form action="updatecourse.php" method="post">
					<input type="hidden" name="course_id" value="<?php echo $GET_['course_id'];?>"/> <br>
					
					Name of course: <input type="text" name="course_name" value="<?php echo $row['course_name'];?>"/> <br><br>		
					Name of Faculty:<select name="faculty_name">
								<?php foreach($course as $stu){?>
								<option value="<?php echo $stu['faculty_name'];?>"><?php echo $stu['faculty_name'];?></option>
								<?php }?>
							 </select> <br><br>
					Name of Department:<select name="department_name">
									<?php foreach($course as $stu){?>
									<option value="<?php echo $stu['department_name'];?>"><?php echo $stu['department_name'];?></option>
									<?php }?>
							  </select><br><br>
					<input class="btn btn-primary btn-lg" type="submit"/>
					<input class="btn btn-primary btn-lg" type="reset"/>
					</form>	
					</div>
				</div>
	</body>
</html>			
