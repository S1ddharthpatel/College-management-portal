<html>

	<body style="background-color:#24a1b7;">
			<?php include "header.php" ?><br>

			<?php

			//connectio to server
					include "connection.php"; 	
				
			//run query
					$query="SELECT * from courses c JOIN faculty f JOIN department d on c.faculty_id=f.faculty_id AND c.department_id=d.department_id";
					$course=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($course);
			?>
					<form action="updatecourse.php" method="post">
					<input type="hidden" name="course_id" value="<?php echo $GET_['course_id'];?>"/> <br>
					
					Name of course: <input type="text" name="course_name" value="<?php echo $row['course_name'];?>"/> <br>			
					Name of Faculty:<select name="faculty_name">
								<?php foreach($course as $stu){?>
								<option value="<?php echo $stu['faculty_name'];?>"><?php echo $stu['faculty_name'];?></option>
								<?php }?>
							 </select> <br>
					Name of Department:<select name="department_name">
									<?php foreach($course as $stu){?>
									<option value="<?php echo $stu['department_name'];?>"><?php echo $stu['department_name'];?></option>
									<?php }?>
							  </select><br>
					<input type="submit"/>
					<input type="reset"/>
					</form>	
			
	</body>
</html>			
