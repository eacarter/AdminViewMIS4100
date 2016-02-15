
<html>

	<head>

	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="adminview.css">


	</head>

	<body>

		<h1>Welcome to Admin Page</h1>

		<div class="clearform">
		
				<div class="nav-bar">
					<ul id="navbar">

						<li><a href=""><h1>Home</h1></a></li>
						<li><a href=""><h1>Student</h1></a></li>
						<li><a href=""><h1>Agency</h1></a></li>
						<li><a href=""><h1>Admin</h1></a></li>

					</ul>
				</div>

				<div class="param">

					<ul>
						<li><form method="post" action="search.php?go" id="searchform"><input type="search" id="search" name="name">
						<input type= "submit" id="searchbutton" value="Search" name="submit"></form></li>
						<li><input type="radio">Agency Name</li>
						<li><input type="radio">Category</li>
						<li><input type="radio">Event Name</li>
						<li><input type="radio">Date</li>
					</ul>

					<ul class="order">
						<li><a href=""><h2>Name</h2></a></li>
						<li><a href=""><h2>Description</h2></a></li>
						<li><a href=""><h2>Start Date</h2></a></li>
						<li><a href=""><h2>End Date</h2></a></li>
						<li><a href=""><h2>Time</h2></a></li>
						<li><a href=""><h2>Approved</h2></a></li>
					</ul>
				</div>

				<div class= "dummylist">
					<iframe src="list.php"></iframe>
				</div>


				<div class="edits">
					<ul>	
						<li><button><a href="">Add Event</a></button></li>
						<li><button><a href="">Edit Event</a></button></li>
						<li><button><a href="">Delete Event</a></button></li>
						<li><button><a href="">Approve Event</a></button></li>
						<li><button><a href="">Deny Event</a></button></li>
						<li><button>Log Out</button></li>

					</ul>
				</div>

		</div>

		<div class="event_info">
		
		<script> 
			$(".product").on('click',function(){ 
			the_id = $(this).attr('id'); 
			
			    $.ajax({
			        type: "POST",
			        url: "php_includes/productspec.php?id=" + the_id,
			        success: function(data){
			          $("#productSpec").html(data);
			
			            }
			        });
			});
		</script>
	
		
		
		
		
		
		<h3>Event Information</h3>


		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nunc metus, rhoncus non ante in, scelerisque porta enim. Nullam eu venenatis leo. Integer arcu lectus, mollis ut odio et, semper luctus tortor. Sed congue erat ut neque condimentum, sed luctus massa scelerisque. Suspendisse porta, libero ac dignissim aliquet, quam orci cursus diam, ut pulvinar libero purus quis erat. Suspendisse posuere ut leo eget suscipit. Suspendisse finibus sapien nisl, at pulvinar quam aliquam a. Morbi sed libero nunc.
        </p>

		</div>
	</body>


</html>