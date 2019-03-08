<html>
	<head>
		<title>ADMINISTRATIVE FORM</title>
	</head>
	<body style="background-color:powderblue;">
			<h1>ADMINISTRATIVE FORM</h1>
	 <?php include "header.php" ?>
	 <br>
	 <br>
			<h2>Enter the details</h2>

			<form action="savestudent.php" method="post">
			Name of student: <input type="text" name="student_name"/><br>			
			Phone_number: <input type="number" name="student_number"/><br>
			Status: <br>
					<input type="radio" name="status" value="current" checked> 	Current<br>
					<input type="radio" name="status" value="aluminus"> 	Aluminus<br>
					<input type="radio" name="status" value="left" >	 Left<br>
			<input type="submit"/>
			<input type="reset"/>
			</form>	
		</body>
</html>




