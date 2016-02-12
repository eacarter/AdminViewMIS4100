
<html>

	<head>

	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="adminindex.css">


	</head>

	<body>


		<div class="clearform">
		
				<div class="nav-bar">
					<ul id="navbar">

						<li><a href=""><h1>Home</h1></a></li>
						<li><a href=""><h1>Student</h1></a></li>
						<li><a href=""><h1>Agency</h1></a></li>
						<li><a href=""><h1>Admin</h1></a></li>

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
						<br>
						<input type="submit" value="Login" id="sub"/>

					</form>
				</div>
		</div>
	</body>


</html>