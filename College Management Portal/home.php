<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="home.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
 
	<body style="background-color:#24a1b7;">
		
		<?php include "header.php"; ?>
		
		<img id="img" src="Photos/logo.jpg" height="275" width="450" align="right" HSPACE=”500” />
		
		<br>
			<h1 style="font-size:80px;"><u>COLLEGE MANAGEMENT<br>PORTAL </u></h1>		
		<br>
		<br>				
							<button class="but" type="button" onclick="window.location.href='showstudents.php';"><font size="6">STUDENT DETAILS</font></button>
							<button class="abut" type="button" onclick="window.location.href='form2.php';"><font size="6">ADD STUDENT</font></button><br>
							<button class="but" type="button" onclick="window.location.href='showfaculty.php';"><font size="6">FACULTY DETAILS</font></button>
							<button class="abut" class="but1" class="but1" class="but1" class="but1" class="but1" class="but1" type="button" onclick="window.location.href='form3.php';"><font size="6">ADD FACULTY</font></button><br>
							<button class="but" class="but1" class="but1" class="but1" class="but1" class="but1" type="button" onclick="window.location.href='showdept.php';"><font size="6">DEPARTMANT DETAILS</font></button>
							<button class="abut" class="but1" class="but1" class="but1" class="but1" type="button" onclick="window.location.href='form4.php';"><font size="6">ADD DEPARTMANT</font></button><br>
							<button class="but" class="but1" class="but1" class="but1" type="button" onclick="window.location.href='showcourses.php';"><font size="6">COURSES DETAILS</font></button>
							<button class="abut" class="but1" class="but1" type="button" onclick="window.location.href='form5.php';"><font size="6">ADD COURSES</font></button><br>
							<button class="but" class="but1" type="button" onclick="window.location.href='showenrollment.php';"><font size="6">ENROLLMENT DETAILS</font></button>
							<button class="abut" type="button" onclick="window.location.href='form6.php';"><font size="6">ADD ENROLLMENTS</font></button>
	</body>
</html>