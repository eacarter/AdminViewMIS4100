<html>

	<head>
	

	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="adminindex.css">
	<link rel="stylesheet" type="text/css" href="General_CSS.css">


	

	</head>

	<body>

<div id = header>
	<h1> <b> <center>  <img src="http://mis4100ruby.sbe.mtu.edu/StudentTest/HuskyHelpersLogoFinal.png" alt="HuskyHelpersLogo" width="700" height="150" />   </h1> </font> </b> </center>  

</div>

		<div class="clearform">
		
				<div class = "nav-bar">
	
		<ul class = CSS> 
		
			<li> <a href="Home.html">Home</a></li> <br><br>
			<li> <a href="Student.php">Student</a> </li><br><br>
			<li> <a href="agencyForm.html">Agency</a> </li><br><br>
			<li> <a href="adminindex.html">Admin</a> </li><br><br>
		
		</ul> 

</div>

				<div class="userform">


					<form   method="POST" action = "Authentication.php">
						<label for= "user" >Username </label>
						<br>
						<input type="text" name= "user" id="user"/>
						<br>
						<label for= "pass" >Password </label>
						<br>
						<input type="password" name="pass" id="pass"/>
						<br>
						<br>
						<input type="submit" value="Login" id="sub"/>
					<input type="button" value="Change Password" id="sub" Onclick="window.location.href='ChangePassword.html'">
				
					</form>
				</div>
			
					
					
					
				</div>
		</div>
	</body>


</html>