<html>

	<body style="background-color:#24a1b7;">
			<?php include "header.php" ?><br>

			<?php

			//connectio to server
					include "connection.php"; 	
				
			//run query
					$query="SELECT * from enrollment e JOIN students s JOIN courses c on e.student_id=s.student_id AND e.course_id=c.course_id WHERE s.student_id = '".$_POST['student_id']."'";
					$enroll=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($enroll);
			?>
					<form action="updateenrollment.php" method="post">
					<input type="hidden" name="id" value="<?php echo $row['id'];?>"/> <br>			
					Name of Student:<select name="student_name">
								<?php foreach($enroll as $stu){?>
								<option value="<?php echo $stu['student_name'];?>"><?php echo $stu['student_name'];?></option>
								<?php }?>
							 </select> <br>
					Name of Course:<select name="course_id">
									<?php foreach($enroll as $cour){?>
									<option value="<?php echo $cour['course_name'];?>"><?php echo $cour['course_name'];?></option>
									<?php }?>
							  </select><br>	
					<input type="submit"/>
					<input type="reset"/>
					</form>	
			
	</body>
</html>			
			
