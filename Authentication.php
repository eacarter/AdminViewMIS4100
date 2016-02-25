<?php
require "connection.inc";


		if(empty ($_POST ['user']))
		{
		echo "Username is Empty!";
		return false;
		 }
	if(empty ($_POST['pass'])) /**If empty posts error message**/
	{
	echo "Password is Empty";
	return false;
	}
	$user = mysqliclean($_POST, 'user',45,$mysqlConnection);
	$password = mysqliclean ($_POST, 'pass',35,$mysqlConnection);
	$password_hash= Md5($password);
	

	
	$sql= "Select * from administrator 
			 Where adminUsername = '$user' and adminPassword = '$password_hash'"; 
			
		
	$result = mysqli_query($mysqlConnection,$sql);
	
	
	if (mysqli_num_rows($result) > 0)    

	{
		header ('Location: adminview.php');
		}
	
	else{		
			
			header('Location: adminindex.php'); 
			} 
		
	

?>	