<?php

require ('connection.php');


$q = intval($_GET['q']);




	$sql = "Select DISTINCT opportunityName, agencyName, agencyPhone, agencyContactFName, agencyContactLName, agencyEmail, opportunityAddress, opportunityCity, opportunityState, opportunityZip, opportunityStartDate, opportunityEndDate, volunteersNeeded, opportunityDescription FROM opportunity, agency WHERE opportunityID = '".$q."'";  

$result = mysqli_query($mysqlConnection,$sql);


while($row = mysqli_fetch_array($result)) {
    
    echo "<p> Opportunity Name: <strong>" . $row['opportunityName'] . "</strong></p>  <p>" .$row['opportunityCategory']. "</p>";
    echo "<p> Agency Name: " .$row['agencyName']. "</p>";
    echo "<p> Agency Phone: " .$row['agencyPhone']. "</p>";
    echo "<p> Agency Contact Name: " .$row['agencyContactFName']. " " .$row['agencyContactLName']. "</p>";
    echo "<p> Email: " .$row['agencyEmail']. "</p>";
    echo "<p> Address: ".$row['opportunityAddress']. ", " . $row['opportunityCity'] .", " .$row['opportunityState']. ", " .$row['opportunityZip']. "</p>";
    echo "<p> Start Date: " . $row['opportunityStartDate'] . "    </br>     End Date: ". $row['opportunityEndDate'] ."</p>";
    echo "<p> Volunteers Needed: " .$row['volunteersNeeded']. "</p>";
    echo "<p>  Description: " . $row['opportunityDescription'] . "</p>";
   
}

$mysqlConnection->close();
?>