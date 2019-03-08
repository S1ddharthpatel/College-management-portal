<html>

	<body style="background-color:powderblue;">
			<?php include "header.php" ?><br>
		
			<?php
				
				//construction of query	
				$autoquery="UPDATE `faculty` SET `faculty_name` = '".$_POST["faculty_name"]."',
												`faculty_phone_number`=".$_POST['faculty_phone_number'].",
												`email`= '".$_POST["email"]."' WHERE `faculty`.`faculty_id` = ".$_POST['faculty_id'];
				
				//connectio to server
					include "connection.php"; 	
											
					if(mysqli_query($conn,$autoquery))
						{echo "<br>successfully inserted";}
					else
						{echo mysqli_error($conn);}
				
				
			?>
			
			<a href="showfaculty.php"><br><font size="3">FACULTY DETAILS</font></a>
	
	</body>
</html>	