<?php
require "connection.inc";


session_start();

$loginUsername = mysqliclean ($_POST, "user", 45,$mysqlConnection);
$oldPassword = mysqliclean ($_POST, "pass", 35, $mysqlConnection);
$newPassword = mysqliclean ($_POST, "newpass", 35,$mysqlConnection);
$newPassword1 = mysqliclean ($_POST, "confirmpass",35, $mysqlConnection);


$password_hash= Md5($oldPassword);
$sql= "Select * from administrator 
			 Where adminUsername = '$loginUsername' and adminPassword = '$password_hash'"; 

			
		
$result = mysqli_query($mysqlConnection,$sql);
	
	
if (mysqli_num_rows($result) > 0) and if($newPassword == $newPassword1)  

	{ $digest = md5(trim($newPassword));

	$update_query = "UPDATE administrator SET adminPassword = '$digest'
					WHERE adminUsername = '$loginUsername'";
	
	$result= mysqli_query ($mysqlConnection,$update_query);
	
	
	/**echo "In the If clause";
	echo $loginUsername;
	echo $oldPassword;
	echo $newPassword;
	echo $newPassword1;
	echo $sql;
	echo $$digest;
	echo $result; **/	
	header ('Location:adminview.php');
		
		}
	
	else{		
		
	/**echo "In the Else clause";
	echo $loginUsername;
	echo $oldPassword;
	echo $newPassword;
	echo $newPassword1;
	echo $sql;
	echo $$digest;
	echo $result;	 **/	
			header('Location: ChangePassword.html');
			
			} 
?>