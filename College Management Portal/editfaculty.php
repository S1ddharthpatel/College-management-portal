<html>
	<head>
	
		<link rel="stylesheet" href="form.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<?php include "header.php" ?>		
	</head>
	<body style="background-color:#24a1b7;">

			<?php

			//connectio to server
					include "connection.php"; 	
				
			//run query
					$query="select * from `faculty` where faculty_id=".$_GET['id'];
					$faculty=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($faculty);
			?>
			<br>
				<div class="jumbotron">	
					<h2 class="display-4">Edit the faculty details</h2>
					<hr class="my-4">
					<div class="lead">
					<form action="updatefaculty.php" method="post">
					<input type="hidden" name="faculty_id" value="<?php echo $row['faculty_id'];?>"/> <br>
					
					Name of faculty: <input type="text" name="faculty_name" value="<?php echo $row['faculty_name'];?>"/> <br>	<br>		
					Phone_number: <input type="number" name="faculty_phone_number" value="<?php echo $row['faculty_phone_number']; ?>"/><br><br>
					Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"/><br><br>
					<input class="btn btn-primary btn-lg" type="submit"/>
					<input class="btn btn-primary btn-lg" type="reset"/>
					</form>	
					</div>
				</div>			
	</body>
</html>			
			
