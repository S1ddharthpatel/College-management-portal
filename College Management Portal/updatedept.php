<html>

	<body style="background-color:powderblue;">
			<?php include "header.php" ?><br>
		
			<?php
				
				//construction of query	
				$autoquery="UPDATE `department` SET `department_name` = '".$_POST["department_name"]."',
												`address`= '".$_POST["address"]."' WHERE `department`.`department_id` = ".$_POST['department_id'];
				//connectio to server
					include "connection.php"; 	
					
					if(mysqli_query($conn,$autoquery))
						{echo "<br>successfully inserted";}
					else
						{echo mysqli_error($conn);}				
				
			?>
			
			<a href="showdept.php"><br><font size="3">DEPARTMENT DETAILS</font></a>
	
	</body>
</html>	