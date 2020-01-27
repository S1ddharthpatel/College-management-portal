<html>
	<head>
	
		<link rel="stylesheet" href="form.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<?php include "header.php" ?>		
	</head>
		<title>Add new Student</title>
	<body style="background-color:#24a1b7;">
			<h1 class="h1"><u>ADMINISTRATIVE FORM</u></h1><br>	 
	 
	 <div class="jumbotron">	
			<h2 class="display-4">Enter the new student details</h2>
			<hr class="my-4">
			<div class="lead">
				<form action="savestudent.php" method="post">
					Name of new student: <input type="text" name="student_name"/><br><br>			
					Phone_number: &nbsp <input type="number" name="student_number"/><br><br>
					Status: <br>
							&nbsp&nbsp&nbsp <input type="radio" name="status" value="current" checked> 	Current<br>
							&nbsp&nbsp&nbsp <input type="radio" name="status" value="aluminus"> 	Aluminus<br>
							&nbsp&nbsp&nbsp <input type="radio" name="status" value="left" >	 Left<br><br>
					<input class="btn btn-primary btn-lg" type="submit"/>
					<input class="btn btn-primary btn-lg" type="reset"/>
				</form>	
			</div>
	</div>
	</body>
</html>




