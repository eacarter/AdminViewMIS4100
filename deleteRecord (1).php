<?php
require ('connection.php');
require ('list.php');

$sql = "DELETE FROM opportunity WHERE opportunityID = ;

if(mysqli_query($mysqlConnection,$sql))

{ echo "Record deleted successfully";

}
Else {
echo "Error deleting record";
}

?>