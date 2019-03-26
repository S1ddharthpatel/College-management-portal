<html>

	<body style="background-color:powderblue;">
			<?php include "header.php" ?><br>

			<?php

			//connectio to server
					include "connection.php"; 	
				
			//run query
					$query="SELECT * from courses c JOIN faculty f JOIN department d on c.faculty_id=f.faculty_id AND c.department_id=d.department_id";
					$course=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($course1);
			?>
					<form action="updatecourse.php" method="post">
					<input type="hidden" name="course_id" value="<?php echo $GET_['course_id'];?>"/> <br>
					
					Name of course: <input type="text" name="course_name" value="<?php echo $row['course_name'];?>"/> <br>			
					Name of Faculty:<select name="faculty_id">
								<?php foreach($course1 as $stu){?>
								<option value="<?php echo $stu['faculty_id'];?>"><?php echo $stu['faculty_name'];?></option>
								<?php }?>
							 </select> <br>
					Name of Department:<select name="department_id">
									<?php foreach($course1 as $stu){?>
									<option value="<?php echo $stu['department_id'];?>"><?php echo $stu['department_name'];?></option>
									<?php }?>
							  </select><br>
					<input type="submit"/>
					<input type="reset"/>
					</form>	
			
	</body>
</html>			
