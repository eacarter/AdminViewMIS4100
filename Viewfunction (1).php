<?php
	$conn = mysql_connect("localhost","mis4100ruby","MIS41002016");
	mysql_select_db("mis4100r_voluteering",$conn); 
	$result = mysql_query("SELECT * FROM agency");
	
	
	
	$i=0;
	while($row = mysql_fetch_array($result)) {

	<option value="<?=$row["agencyID"];?>"><?=$row["agencyPhone"];?></option>
	
	$i++;
	}

	
	mysql_close($conn);
?>