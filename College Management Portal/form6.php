<html>
	<head>
	
		<link rel="stylesheet" href="form.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<?php include "header.php" ?>		
	</head>
		<title>Add new Enrollment</title>
	<body style="background-color:#24a1b7;">
			<h1 class="h1"><u>ADMINISTRATIVE FORM</u></h1><br>
			
			
			<?php 
				include "connection.php"; 	
			 
				//run query
					$query1="SELECT * from students";
					$enrolldata1=mysqli_query($conn,$query1);
					$query2="SELECT * from courses";
					$enrolldata2=mysqli_query($conn,$query2);
			?>
			
		 <div class="jumbotron">	
			<h2 class="display-4">Enter the enrollment details</h2>
			<hr class="my-4">
			<div class="lead">
			<form action="saveenrollment.php" method="POST">
			Name of Student: &nbsp <select name="student_id">
								<?php foreach($enrolldata1 as $stu){?>
								<option value="<?php echo $stu['student_id'];?>"><?php echo $stu['student_name'];?></option>
								<?php }?>
							 </select> <br><br>
			Name of Course: &nbsp <select name="course_id">
									<?php foreach($enrolldata2 as $cour){?>
									<option value="<?php echo $cour['course_id'];?>"><?php echo $cour['course_name'];?></option>
									<?php }?>
							  </select><br><br>
			<input class="btn btn-primary btn-lg" type="submit"/>
			<input class="btn btn-primary btn-lg" type="reset"/>
			</form>	
			</div>
		</div>
	</body>
</html>
