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
					$query="select * from `department` where department_id=".$_GET['department_id'];
					$department=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($department);
			?>
				<br>
				<div class="jumbotron">	
					<h2 class="display-4">Edit the department details</h2>
					<hr class="my-4">
					<div class="lead">
					<form action="updatedept.php" method="post">
					<input type="hidden" name="department_id" value="<?php echo $row['department_id'];?>"/> <br>
					
					Name of Department: <input type="text" name="department_name" value="<?php echo $row['department_name'];?>"/> <br><br>			
					Address: <input type="text" name="address" value="<?php echo $row['address']; ?>"/><br><br>
					<input class="btn btn-primary btn-lg" type="submit"/>
					<input class="btn btn-primary btn-lg" type="reset"/>
					</form>	
					</div>
				</div>			
	</body>
</html>			
			
