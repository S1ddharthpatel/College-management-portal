<html>
	<head>
		<title>ADMINISTRATIVE FORM</title>
	</head>
	<body style="background-color:powderblue;">
			<h1>ADMINISTRATIVE FORM</h1>
			
			
			<?php 
				include "connection.php"; 	
				include "header.php";			 
				//run query
					$query="SELECT * from courses c JOIN faculty f JOIN department d on c.faculty_id=f.faculty_id AND c.department_id=d.department_id";

					$coursedata=mysqli_query($conn,$query);
			?>
		    <br>
			<br>			
			<h2>Enter the details</h2>

			<form action="savecourse.php" method="post">
			Name of Course: <input type="text" name="course_name"/><br>			
			Name of Faculty:<select name="faculty_id">
								<?php foreach($coursedata as $stu){?>
								<option value="<?php echo $stu['faculty_id'];?>"><?php echo $stu['faculty_name'];?></option>
								<?php }?>
							 </select> <br>
			Name of Department:<select name="department_id">
									<?php foreach($coursedata as $stu){?>
									<option value="<?php echo $stu['department_id'];?>"><?php echo $stu['department_name'];?></option>
									<?php }?>
							  </select><br>
			<input type="submit"/>
			<input type="reset"/>
			</form>	
		</body>
</html>
