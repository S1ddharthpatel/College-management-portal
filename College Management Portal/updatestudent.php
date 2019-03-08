<html>

	<body style="background-color:powderblue;">
			<?php include "header.php" ?><br>
			<a href="showstudents.php"><br><font size="6">STUDENT DETAILS</font></a>
			<?php
				
				//construction of query	
				$autoquery="UPDATE `students` SET `name` = '".$_POST["name"]."',
												`phone_number`=".$_POST['phone_number'].",
												`status`= '".$_POST["status"]."' WHERE `students`.`id` = ".$_POST['id'];
				

				$severname="localhost";
				$username="root";
				$password="";
				
				//connect to dbserver
				$conn=mysqli_connect($severname,$username,$password);
				
				//check connection_aborted
				if (!$conn) {echo "error";}
				else {echo "connected successfully";}
				
				//connect to database of the project
				mysqli_select_db($conn,"workshop");
				
				
				
				
				
				if(mysqli_query($conn,$autoquery))
					{echo "<br>successfully inserted";}
				else
					{echo mysqli_error($conn);}
				
				
			?>
	
	</body>
</html>	