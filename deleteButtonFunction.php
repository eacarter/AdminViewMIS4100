<?php
require "connection.inc";

if (isset($_POST['oppID']))
{
$OpportunityID = $_POST['oppID'];

$query = "Delete FROM opportunity
			WHERE opportunityID= '$OpportunityID'";
			
$retval = mysqli_query($mysqlConnection,$query);


if(!retval)
{

die ('Could not delete data: ' .mysqli_error());
}



Else
{

/**echo ('Deleted Data Successfully');**/

header('Location:adminview.php');

}

}
mysqli_close($mysqlConnection);

?>


