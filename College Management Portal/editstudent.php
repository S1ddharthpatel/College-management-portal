<html>
	<head>
	
		<link rel="stylesheet" href="form.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<?php include "header.php" ?>		
	</head>
		<title>Edit Student Details</title>
	<body style="background-color:#24a1b7;">
	
			<?php

			 //connectio to server
					include "connection.php"; 	
				
			//run query
					$query="select * from students where student_id=".$_GET['student_id'];
					$student=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($student);
			?>		
				 <br>
				 <div class="jumbotron">	
					<h2 class="display-4">Edit the student details</h2>
					<hr class="my-4">
					<div class="lead">
					<form action="update.php" method="post">
					<input type="hidden" name="student_id" value="<?php echo $row['student_id'];?>"/> <br>
					
					Name of student: &nbsp <input type="text" name="name" value="<?php echo $row['student_name'];?>"/> <br><br>			
					Phone_number:  &nbsp <input type="number" name="phone_number" value="<?php echo $row['student_phone_number']; ?>"/><br><br>
					Status: <br>
							&nbsp&nbsp <input type="radio" name="status" value="current"
							<?php if($row['status']=="current")
								echo 'checked="true"';?>				
							> 	Current<br>
							&nbsp&nbsp <input type="radio" name="status" value="aluminus"
							<?php if($row['status']=="aluminus")
								echo 'checked="true"';?>
							> 	Aluminus<br>
							&nbsp&nbsp <input type="radio" name="status" value="left"
							<?php if($row['status']=="left")
								echo 'checked="true"';?>
							>	 Left<br><br>
					<input class="btn btn-primary btn-lg" type="submit"/>
					<input class="btn btn-primary btn-lg" type="reset"/>
					</form>	
					</div>
				</div>
	</body>
</html>			
			
