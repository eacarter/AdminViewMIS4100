<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="adminview.css">
	<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
<div class="whole">

<?php



require "connection.inc";

$id = intval($_GET['id']);
$sql = "SELECT * FROM  opportunity, agency WHERE opportunityID = $id AND opportunity.agencyID = agency.agencyID"; 
/**$result = $conn->query($sql); **/
$result = mysqli_query($mysqlConnection,$sql);



if ($result->num_rows > 0) {

echo"<h1>Event Information: </h1>"; 
echo "<form action='insert_database.php' method='POST'>";
echo "<div class='half'>";



	while($row = $result->fetch_assoc()) {
     echo"
	<div class='right'><label for='opportunityID'>Opportunity ID: </label> <input id='oppID' name='oppID' required='' type='text' value= " .$row['opportunityID']."  /></div>
	<div class='right'><label for='eventName'>Event Name: </label> <input id='eventName' name='eventName' required='' type='text' value= " .$row['opportunityName']."  /></div>
	<div class='right'><label for='agencyName'>Agency Name: </label> <input id='agencyName' name='agencyName' required='' type='text'  value= " .$row['agencyName']. "/></div>
	<div class='right'><label for='contactName'>Contact First Name: </label> <input id='contactFName' name='contactFName' required='' type='text' value=" .$row['agencyContactFName']. " /></div>
	<div class='right'><label for='myStreet'>Street Address: </label> <input id='myStreet' name='myStreet' required='' type='text' value=" .$row['opportunityAddress']. " /></div>
	<div class='right'><label for='myCity'>City: </label> <input id='myCity' name='myCity' required='' type='text' value=" .$row['opportunityCity']. " /></div>
	<div class='right'><label for='contactName'>Contact Last Name: </label> <input id='contactLName' name='contactLName' required='' type='text' value=" .$row['agencyContactLName']. " /></div>
	<div class='right'><label for='state'>State: </label> <select name='state' value=" .$row['opportunityState']. "><option value='Michigan'>MI</option><option value='Wisconsin'>WI</option> </select></div>
	<div class='right'><label for='zipCode'>Zip: </label> <input id='zipCode' name='zipCode' required='' type='text' value=" .$row['opportunityZIP']. " /></div>
	<div class='right'><label for='contactPhone'>Contact Phone: </label> <input id='contactPhone' name='contactPhone' required='' type='text' value=" .$row['agencyPhone']. "/></div>
	<div class='right'><label for='volunteersNeeded'>Volunteers Needed: </label> <input id='volunteersNeeded' name='volunteersNeeded' required='' type='text' value=" .$row['volunteersNeeded']. " /></div>
	<div class='right'><label for='timesNeeded'>Length of Service (hours): </label> <input id='timesNeeded' name='timesNeeded' required='' type='hours' value=" .$row['lengthOfService']. " /></div>
	<div class='right'><label for='contactEmail'>Contact E-mail Address: </label> <input id='contactEmail' name='contactEmail' required='' type='email' value=" .$row['agencyEmail']. " /></div>
	<div class='right'><label for='startDate'>Start Date: </label> <input id='startDate' name='startDate' required='' type='date' value=" .$row['opportunityStartDate']. " /></div>
	<div class='right'><label for='endDate'>End Date: </label> <input id='endDate' name='endDate' required='' type='date' value=" .$row['opportunityEndDate']. "/></div>
	<div class='right'><label for='eventDescription'>Description of Event: </label><textarea id='eventDescription' name='eventDescription' required='' width= '300px' height='150px' >" .$row['opportunityDescription']. "</textarea></div>
	
<div class='categories'>	
<fieldset>
	<legend> *Event Category: </legend>
	<input name='Annual Events' type='checkbox' class='categories' value='Annual Events'><label for='annualEvents'>Annual Events</label> 
	<input name='Animals' type='checkbox' class='categories' value='Animals'><label for='animals'>Animals</label> 		   
	<input name='Family Services' type='checkbox' class='categories' value='Family Services' /><label for='familyServices'>Family Services</label>
	<input name='Healthcare' type='checkbox' class='categories' value='Healthcare' /> <label for='healthcare'>Healthcare</label>
	<input name='Mentoring' type='checkbox' class='categories' value='Mentoring' /><label for='mentoring'>Mentoring</label>
	<input name='Senior Citizens' type='checkbox' class='categories' value='Senior Citizens' /><label for='seniorCitizens'>Senior Citizens</label>
	<input name='Youth' type='checkbox' class='categories' value='Youth' /><label for='youth'>Youth</label>
	<input name='Environment' type='checkbox' class='categories' value='Environment' /><label for='environment'>Environment</label>
	<input name='Other' type='checkbox' class='categories' value='Other' /><label for='other'>Other</label>
  </fieldset>
  
  
</div>
</div>	

<div class = 'edits'>
	<ul>
		<li><button><a href =''> Add Event </a></button></li>
		<li><button><a href =''> Edit Event </a></button></li>
		<li><button type ='submit' formmethod ='post' formaction= 'deleteButtonFunction.php'>Delete Event</button></li>
		<li><button> Approve Event</button></li>
		<li><button><a href =''> Deny Event </a></button></li>
	</ul>

</div>
		

	</form>";
	
}
} 
else {
     echo "Error, does not compute...";
}

/**$conn->close(); **/
$mysqlConnection->close();
?>

				<!-- <div class="edits">
					<ul>	
						<li><button><a href="">Add Event</a></button></li>
						<li><button><a href="">Edit Event</a></button></li>
						<li><button type ="submit" formmethod= "post" formaction="deleteButtonFunction.php">Delete Event</button></li>
						<li><button>Approve Event</button></li>
						<li><button><a href="">Deny Event</a></button></li>
						

					</ul>
				</div>	-->
				
	</div>
</body>




</html>