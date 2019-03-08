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
					$query1="SELECT * from students";
					$enrolldata1=mysqli_query($conn,$query1);
					$query2="SELECT * from courses";
					$enrolldata2=mysqli_query($conn,$query2);
			?>
		    <br>
			<br>			
			<h2>Enter the details</h2>

			<form action="saveenrollment.php" method="POST">
			Name of Student:<select name="student_id">
								<?php foreach($enrolldata1 as $stu){?>
								<option value="<?php echo $stu['student_id'];?>"><?php echo $stu['student_name'];?></option>
								<?php }?>
							 </select> <br>
			Name of Course:<select name="course_id">
									<?php foreach($enrolldata2 as $cour){?>
									<option value="<?php echo $cour['course_id'];?>"><?php echo $cour['course_name'];?></option>
									<?php }?>
							  </select><br>
			<input type="submit"/>
			<input type="reset"/>
			</form>	
		</body>
</html>
