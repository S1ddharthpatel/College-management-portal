#24a7d5<html>

	<body style="background-color:#24a1b7;">
			<?php include "header.php" ?><br>

			<?php

			//connectio to server
					include "connection.php"; 	
				
			//run query
					$query="select * from `faculty` where faculty_id=".$_GET['id'];
					$faculty=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($faculty);
			?>
					<form action="updatefaculty.php" method="post">
					<input type="hidden" name="faculty_id" value="<?php echo $row['faculty_id'];?>"/> <br>
					
					Name of faculty: <input type="text" name="faculty_name" value="<?php echo $row['faculty_name'];?>"/> <br>			
					Phone_number: <input type="number" name="faculty_phone_number" value="<?php echo $row['faculty_phone_number']; ?>"/><br>
					Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"/><br>
					<input type="submit"/>
					<input type="reset"/>
					</form>	
			
	</body>
</html>			
			
