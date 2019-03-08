<html>
	<head>
		<title> Login form </title>
	</head>
	<body style="background-color:powderblue;">
		<h1 style="font-size:40px;"><u>WELCOME TO THE COLLEGE MANAGEMENT PORTAL  
		<img src="logo1.jpg" alt="Christ" height="300" width="300" align="right" HSPACE=”300”  /> </u></h1>		
		<br>
		<br>
		<h2>LOGIN PAGE</h2>
		<br>
<?php 
		$loginid = "sid";
		$password =12345;
		
			if(isset($_POST["pass"])&& isset($_POST["id"]))
			{
						if($password==$_POST["pass"]&&$loginid==$_POST["id"])
						{
							
							echo "Login Successful";?>
							<a href="home.php"><br>Click to continue</a>
						<?php	
						}
						else
						{	
							
							echo "Login Failure<br>";
							echo "Enter details again";
							include "form.php";
						}
			}
			else
			{
				// entering form
				include "form.php";
				
			}
?>
		
	</body>
</html>