<html>

	<body style="background-color:powderblue;">

		<?php include "header.php" ?><br>

		<?php
			echo $_POST['department_name']."<br>";
			echo $_POST['address']."<br>";
			
			
			
			//construction of query
			
			$autoquery= "INSERT INTO `department`(`department_id`, `department_name`, `address`)
						VALUES (NULL,'".$_POST['department_name']."','".$_POST['address']."')";
			
			//connectio to server
				include "connection.php"; 	
			
			
			if(mysqli_query($conn,$autoquery))
				{echo "<br>successfully inserted";}
			else
				{echo "<br>".mysqli_error($conn);}
			
			
		?>
			<a href="showdept.php"><br><font size="3">DEPARTMENT DETAILS</font></a>
		</body>
</html>