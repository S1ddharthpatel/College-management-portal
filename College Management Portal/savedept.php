<html>

	<body style="background-color#24a1b7;">

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
				{?>
							<script>
								alert("Insertion Successful");
								window.location.replace("showdept.php");		
							</script>
				<?php	
				}
			else
				{echo "<br>".mysqli_error($conn);}
			
			
		?>
		</body>
</html>