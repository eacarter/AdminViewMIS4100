<html>
	<head>
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
			
	</head>


<body>
<?php

	if(isset($_POST['submit'])){
	if(isset($_GET['go'])){
	if(preg_match("^/[A-Za-z]+/", $_POST['name'])){ 
	   $name=$_POST['name']; 

	   include 'connection.php';

	   $sql= "SELECT opportunityID, opportunityName, opportunityCity, opportunityDescription,opportunityStartDate,opportunityEndDate, agencyName  FROM opportunity, agency WHERE  opportunityName LIKE '%" . $name . "%'  OR agencyName LIKE '%" . $name  ."%'";
	
		$result=mysqli_query($mysqlConnection,$sql);

		while ($row = mysqli_fetch($result)) {
			echo"
     	<li class='list-group-item' >
     		<a href = \" search.php?id= .$row["opportunityID"].\">
      		<h3 class='list-group-item-heading'><strong>". $row["opportunityName"]."</strong></h3>
      		<h4 class='list-group-item-heading'>". $row["agencyName"]. "</h4>
      		<h6 class='list-group-item-heading'>". $row["opportunityCity"]. "</h6>
      		<h6 class= 'list-group-item-heading'> Start Date: ". $row ["opportunityStartDate"]."     End Date: ". $row ["opportunityEndDate"]."  </h6>
      		<p class='list-group-item-text'>". $row["opportunityDescription"]. "</p>
    	</li>";
     
			
		}

	 }
	 } 
	else{
		echo "<p>enter stuff please</p>";
	}	
	
	}
?>
</body>

</html>