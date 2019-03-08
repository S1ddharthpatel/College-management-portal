<html>

	<body style="background-color:powderblue;">
		<?php include "header.php" ?><br>

		<?php

			//connectio to server
				include "connection.php"; 	
			 
			 
			 //run query
			$query="delete from student WHERE student_id=".$_GET['student_id'];

			if(mysqli_query($conn,$query))
				{echo " successfully deleted";}	
			else
				{echo mysqli_error($conn);}
			
		?>	

	</body>
</html>


