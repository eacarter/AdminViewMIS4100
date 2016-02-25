<html>

	<head>

	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="adminview.css">
	
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	
	<div id = header>
	
	<h1> <b> <center>  <img src="http://mis4100ruby.sbe.mtu.edu/StudentTest/HuskyHelpersLogoFinal.png" alt="HuskyHelpersLogo" width="700" height="150" />   </h1> </font> </b> </center>  

	</div>
	
	</head>

	<body>

		<h1>Welcome to Admin Page</h1>

		<div class="clearform">
		
				<div class = "nav-bar">
	
		<ul class = CSS> 
		
			<li> <a href="Home.html">Home</a></li> <br><br>
			<li> <a href="Student.php">Student</a> </li><br><br>
			<li> <a href="agencyForm.html">Agency</a> </li><br><br>
			<li> <a href="adminindex.html">Admin</a> </li><br><br>
		
		</ul> 

</div>

				<div class="param">

					<ul>
						<li><input type="search" id="search"></li>
						<li><input type= "submit" id="searchbutton" value="Search"></li>
						<li><input type="radio">Agency Name</li>
						<li><input type="radio">Category</li>
						<li><input type="radio">Event Name</li>
						<li><input type="radio">Date</li>
					</ul> 
					</div> 
				<!--	<ul class="order">
						<li><a href=""><h2>Name</h2></a></li>
						<li><a href=""><h2>Description</h2></a></li>
						<li><a href=""><h2>Start Date</h2></a></li>
						<li><a href=""><h2>End Date</h2></a></li>
						<li><a href=""><h2>Time</h2></a></li>
						<li><a href=""><h2>Approved</h2></a></li>
					</ul> -->
				

				<div class= "dummylist">
					<?php
						require "connection.inc";
						$sql = "Select *  FROM opportunity ";
 						$result = mysqli_query($mysqlConnection,$sql);
						if ($result->num_rows > 0) {
						     // output data of each row
						     echo"<ul id= 'listwork'>";
						     echo"<div class='container'>";
						     echo"<div class='list-group'>";
						     
						     while($row = $result->fetch_assoc()) {
						     echo"
						     	<li class='list-group-item' id='query' value=".$row['opportunityID']." >
						     	    <a href='#try' >
						      		<h3 class='list-group-item-heading' ><strong>". $row["opportunityName"]."</strong></h3>
						      		<h4 class='list-group-item-heading'>". $row["agencyName"]. "</h4>
						      		<h6 class='list-group-item-heading'>". $row["opportunityCity"]. "</h6>
						      		<h6 class= 'list-group-item-heading'> Start Date: ". $row ["opportunityStartDate"]." End Date: ". $row ["opportunityEndDate"].  "</h6>";					if($row['approved'] == 0){
						      			echo"<h6 style='color: #FF0000 ' class='list-group-item-heading'> Unapproved </h6>";
						      		}
						      		else{
						      			echo"<h6 style='color: #5efb1f ' class='list-group-item-heading'> Approved </h6>";
						      		}
						      		"<p class='list-group-item-text'>". $row["opportunityDescription"]. "</p>
						      	    </a>
						    	</li>";
						     
						 
						     }
						     
						     echo"</div>";
						     echo"</div>";
						     echo"</ul>";
						     
						} else {
						     echo "0 results";
						}
						
						/**$conn->close(); **/
						$mysqlConnection->close();
						?>  
						
				</div>



		</div>

		<div class="event_info">
		


		<p id="try"></p>

		</div>
	</body>
	
	<script type="text/javascript">
	

	
		$("#listwork li").on("click", function(){
		
		var id = $(this).attr("value");
		showUser(id);
  			
		});
		
	</script>	
		
	<script>
		function showUser(str) {
		    if (str == "") {
		        document.getElementById("try").innerHTML = "";
		        return;
		    } else { 
		        if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp = new XMLHttpRequest();
		        } else {
		            // code for IE6, IE5
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		        }
		        xmlhttp.onreadystatechange = function() {
		            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		                document.getElementById("try").innerHTML = xmlhttp.responseText;
		            }
		        };
		        xmlhttp.open("POST","AAform.php?id="+str,true);
		        xmlhttp.send();
		    }
		}
	</script>


</html>