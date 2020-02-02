<html>

	<body style="background-color:#24a1b7;">
		
			<?php
				
				//construction of query	
				$autoquery="UPDATE `faculty` SET `faculty_name` = '".$_POST["faculty_name"]."',
												`faculty_phone_number`=".$_POST['faculty_phone_number'].",
												`email`= '".$_POST["email"]."' WHERE `faculty`.`faculty_id` = ".$_POST['faculty_id'];
				
				//connectio to server
					include "connection.php"; 	
											
					if(mysqli_query($conn,$autoquery))
						{?>
							<script>
								alert("Insertion Successful");
								window.location.replace("showfaculty.php");		
							</script>
						<?php	
						}
					else
						{
							include "header.php" ;
							echo mysqli_error($conn);
						}
					
						
					?>		
	
	</body>
</html>	