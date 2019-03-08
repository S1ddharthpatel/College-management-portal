<html>

	<body style="background-color:powderblue;">
			<?php include "header.php" ?><br>

			<?php

			 //connectio to server
					include "connection.php"; 	
				
			//run query
					$query="select * from students where student_id=".$_GET['student_id'];
					$student=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($student);
			?>
					<form action="update.php" method="post">
					<input type="hidden" name="student_id" value="<?php echo $row['student_id'];?>"/> <br>
					
					Name of student: <input type="text" name="name" value="<?php echo $row['student_name'];?>"/> <br>			
					Phone_number: <input type="number" name="phone_number" value="<?php echo $row['student_phone_number']; ?>"/><br>
					Status: <br>
							<input type="radio" name="status" value="current"
							<?php if($row['status']=="current")
								echo 'checked="true"';?>				
							> 	Current<br>
							<input type="radio" name="status" value="aluminus"
							<?php if($row['status']=="aluminus")
								echo 'checked="true"';?>
							> 	Aluminus<br>
							<input type="radio" name="status" value="left"
							<?php if($row['status']=="left")
								echo 'checked="true"';?>
							>	 Left<br>
					<input type="submit"/>
					<input type="reset"/>
					</form>	
			
	</body>
</html>			
			
