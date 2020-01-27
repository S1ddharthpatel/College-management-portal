<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="index.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand" href="home.php" >
				<img src="logo2.png" width="100" height="50" class="d-inline-block align-top" alt="">
		</a>
		<a class="nav-heading"> COLLEGE MANAGEMENT PORTAL
		</a>
	</nav>
	
	<body style="background-color:#24a1b7;">
			
	<div id="slider">	

			<div class="w3-content w3-section" style="max-width:800px">
			  <img class="mySlides" src="Photos/slider1.jpg" style="width:1160px">
			  <img class="mySlides" src="Photos/slider2.jpg" style="width:1160px">
			  <img class="mySlides" src="Photos/slider3.jpg" style="width:1160px">
			</div>

			<script>
			var myIndex = 0;
			carousel();

			function carousel() {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			  }
			  myIndex++;
			  if (myIndex > x.length) {myIndex = 1}    
			  x[myIndex-1].style.display = "block";  
			  setTimeout(carousel, 2000); // Change image every 2 seconds
			}
			</script>
		</div>
	
		<img id="logo" src="Photos/logo.jpg" width="350px" align="left" HSPACE=”300”  />	
		
		<div class="login">
		
		
		<br><br>
		<h2>LOG IN</h2>
		<br>
<?php 
		$loginid = "12345";
		$password =0000;
		
			if(isset($_POST["pass"])&& isset($_POST["id"]))
			{
						if($password==$_POST["pass"]&&$loginid==$_POST["id"])
						{
							
							echo "Login Successful";?>
							<a href="home.php" color="white" ><br>Click to continue</a>
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
		</div> 
		
		
	</body>
</html>