<html>

	<body style="background-color:powderblue;">

		<?php include "header.php" ?><br>

		<?php
			echo $_POST['faculty_name']."<br>";
			echo $_POST['faculty_number']."<br>";
			echo $_POST['email']."<br>";
			
			
			
			//construction of query
			
			$autoquery= "INSERT INTO `faculty`(`faculty_id`, `faculty_name`, `faculty_phone_number`, `email`)
						VALUES (NULL,'".$_POST['faculty_name']."','".$_POST['faculty_number']."','".$_POST['email']."')";
			
			
			//connectio to server
				include "connection.php"; 	
			
			
			
			if(mysqli_query($conn,$autoquery))
				{echo "<br>successfully inserted";}
			else
				{echo "<br>".mysqli_error($conn);}
			
			
			?>
		<a href="showfaculty.php"><br><font size="3">FACULTY DETAILS</font></a>	
		</body>
</html>