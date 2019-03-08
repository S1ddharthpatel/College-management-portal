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

			<form action="savedept.php" method="post">
			Name of department: <input type="text" name="department_name"/><br>			
			Address: <input type="text" name="address"/><br>
			<input type="submit"/>
			<input type="reset"/>
			</form>	
		</body>
</html>
