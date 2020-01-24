<html>

	<body style="background-color:#24a1b7;">
			<?php include "header.php" ?><br>

			<?php

			//connectio to server
					include "connection.php"; 					
				
			//run query
					$query="select * from `department` where department_id=".$_GET['department_id'];
					$department=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($department);
			?>
					<form action="updatedept.php" method="post">
					<input type="hidden" name="department_id" value="<?php echo $row['department_id'];?>"/> <br>
					
					Name of Department: <input type="text" name="department_name" value="<?php echo $row['department_name'];?>"/> <br>			
					Address: <input type="text" name="address" value="<?php echo $row['address']; ?>"/><br>
					<input type="submit"/>
					<input type="reset"/>
					</form>	
			
	</body>
</html>			
			
