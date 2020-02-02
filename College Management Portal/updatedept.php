<html>

	<body style="background-color:#24a1b7;">
			<?php include "header.php" ?><br>
		
			<?php
				
				//construction of query	
				$autoquery="UPDATE `department` SET `department_name` = '".$_POST["department_name"]."',
												`address`= '".$_POST["address"]."' WHERE `department`.`department_id` = ".$_POST['department_id'];
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
						{echo mysqli_error($conn);}				
				
			?>
	
	</body>
</html>	