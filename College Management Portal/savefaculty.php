<html>

	<body style="background-color:#24a1b7;">

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
				{?>
							<script>
								alert("Insertion Successful");
								window.location.replace("showfaculty.php");		
							</script>
				<?php	
				}
			else
				{echo "<br>".mysqli_error($conn);}
			
			
			?>
		</body>
</html>