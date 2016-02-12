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
require ('connection.php');
/**$servername = "localhost";
$username = "mis4100ruby";
$password = "MIS41002016";
$dbname = "mis4100r_volunteering";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} **/

$sql = "Select opportunityID, opportunityName, opportunityCity, opportunityDescription,opportunityStartDate,opportunityEndDate, agencyName  FROM opportunity, agency ";
/**$result = $conn->query($sql); **/
$result = mysqli_query($mysqlConnection,$sql);



if ($result->num_rows > 0) {
     // output data of each row
     echo"<div class='container'>";
     echo"<div class='list-group'>";
     
     while($row = $result->fetch_assoc()) {
     echo"
     	<li class='list-group-item' id=".$row["opportunityID"].">
      		<h3 class='list-group-item-heading'><strong>". $row["opportunityName"]."</strong></h3>
      		<h4 class='list-group-item-heading'>". $row["agencyName"]. "</h4>
      		<h6 class='list-group-item-heading'>". $row["opportunityCity"]. "</h6>
      		<h6 class= 'list-group-item-heading'> Start Date: ". $row ["opportunityStartDate"]."     End Date: ". $row ["opportunityEndDate"]."  </h6>
      		<p class='list-group-item-text'>". $row["opportunityDescription"]. "</p>
    	</li>";
     
 
     }
     
     echo"</div>";
     echo"</div>";
     
} else {
     echo "0 results";
}

/**$conn->close(); **/
$mysqlConnection->close();
?>  
</body>

<script> 
			$(".list-group-item").on('click',function(){ 
			the_id = $(this).attr('id'); 
			
			    $.ajax({
			        type: "POST",
			        url: "adminview.php?id=" + the_id,
			        success: function(data){
			          $("#adminview").html(data);
			
			            }
			        });
			});
		</script>


</html>

