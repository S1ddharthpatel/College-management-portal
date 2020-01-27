<html>
	<head>
	
		<link rel="stylesheet" href="form.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<?php include "header.php" ?>		
	</head>
		<title>Edit Enrollments details</title>
	<body style="background-color:#24a1b7;"><br>

			<?php

			//connectio to server
					include "connection.php"; 	
				
			//run query
					$query="SELECT * FROM enrollment";
					$enroll=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($enroll);
					$query2="SELECT * FROM students";
					$student=mysqli_query($conn,$query2);
					$query3="SELECT * FROM courses";
					$course=mysqli_query($conn,$query3);
			?>
			 <div class="jumbotron">	
				<h2 class="display-4">Edit the enrollment details</h2>
				<hr class="my-4">
				<div class="lead">
					<form action="updateenrollment.php" method="post">
					<input type="hidden" name="id" value="<?php echo $row['id'];?>"/> <br>			
					Name of Student:<select name="student_name">
								<?php foreach($student as $stu){?>
								<option value="<?php echo $stu['student_name'];?>"><?php echo $stu['student_name'];?></option>
								<?php }?>
							 </select> <br><br>
					Name of Course:<select name="course_id">
									<?php foreach($course as $cour){?>
									<option value="<?php echo $cour['course_name'];?>"><?php echo $cour['course_name'];?></option>
									<?php }?>
							  </select><br>	<br>
					<input class="btn btn-primary btn-lg" type="submit"/>
					<input class="btn btn-primary btn-lg" type="reset"/>
					</form>	
				</div>
			</div>			
	</body>
</html>			
			
