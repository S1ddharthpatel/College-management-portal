<html>
	<head>
		<link rel="stylesheet" href="form.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<?php include "header.php" ?>		
	</head>
		<title>Add new Course</title>
	<body style="background-color:#24a1b7;">
			<h1 class="h1"><u>ADMINISTRATIVE FORM</u></h1><br>
			
			
			<?php 
				include "connection.php"; 	
						 
				//run query
					$query="SELECT * from faculty";
					$facultydata=mysqli_query($conn,$query);
					$quer="SELECT * from department";
					$deptdata=mysqli_query($conn,$quer);
			?>
			
		<div class="jumbotron">		
			<h2  class="display-4">Enter the new course details</h2>
			<hr class="my-4">
			<div class="lead">
				<form action="savecourse.php" method="post">
				Name of the new Course: <input type="text" name="course_name"/><br>	<br>	
				Faculty: &nbsp <select name="faculty_id">
									<?php foreach($facultydata as $stu){?>
									<option value="<?php echo $stu['faculty_id'];?>"><?php echo $stu['faculty_name'];?></option>
									<?php }?>
								 </select> <br><br>
				Department: &nbsp <select name="department_id">
										<?php foreach($deptdata as $dept){?>
										<option value="<?php echo $dept['department_id'];?>"><?php echo $dept['department_name'];?></option>
										<?php }?>
								  </select><br><br>
				<input class="btn btn-primary btn-lg" type="submit"/>
				<input class="btn btn-primary btn-lg" type="reset"/>
				</form>	
			</div>
		</div>
		</body>
</html>
