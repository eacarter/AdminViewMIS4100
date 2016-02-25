<?php
require "connection.inc"

if (isset( intval($_POST['id']);))
{
$OpportunityID =  intval($_POST['id']);;

$query = "Update opportunity Set approved = 1
			WHERE opportunityID= '$OpportunityID' ";
			
$retval = mysqli_query($mysqlConnection,$query);
if(!retval)
{

die ('Could not delete data: ' .mysqli_error());
}

Else
{

echo ('Deleted Data Successfully');
}

mysqli_close($mysqlConnection);

header ("adminview.php");


?>