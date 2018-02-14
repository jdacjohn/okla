<?php
// Get all the schools that are stored in the database.

	include('../includes/db_connect.php'); 
  if ($dbinst) {		
    $stmt = 'select * from sides where active = "Y" order by side'; 
    //print("Set up select statement." . $stmt . "<br />");
    $res = mysql_query($stmt,$dbconn);
  } // End if dbinst
	mysql_close($dbconn); // Close the connection

?>