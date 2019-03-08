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

			<form action="savefaculty.php" method="post">
			Name of faculty: <input type="text" name="faculty_name"/><br>			
			Phone_number: <input type="number" name="faculty_number"/><br>
			Email id: <input type="text" name="email"/><br>
			<input type="submit"/>
			<input type="reset"/>
			</form>	
		</body>
</html>
