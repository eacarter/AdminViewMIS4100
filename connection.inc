<?php
  
   $server = "localhost";
   $databaseName = "mis4100r_volunteering";
   $username = "mis4100ruby";
   $password = "MIS41002016";
   
   $mysqlConnection = mysqli_connect ($server, $username, $password,$databaseName);
  
   if (!$mysqlConnection)
   {
	print "<p> Try Again Later </p>";      
      }
      else
      {
      mysqli_select_db($mysqlConnection,$databaseName);
      
      }
   
      
      Function showError ()
      	{
      die("Error " . mysqli_errno() . " : " . mysqli_error());
   }
   
   Function mysqliclean($array,$index,$maxlength,$mysqlConnection)
   	{
   	if (isset($array["{$index}"]))
   	{
        $input = substr($array["{$index}"],0,$maxlength);
        $input = mysqli_real_escape_string($mysqlConnection,$input);
        return ($input);
     }
     return NULL;
     }
   
   Function shellclean($array, $index, $maxlength)
   {
     if (isset($array["{$index}"]))
     {
       $input = substr($array["{$index}"], 0, $maxlength);
       $input = EscapeShellCmd($input);
       return ($input);
     }
     return NULL;
     }

  