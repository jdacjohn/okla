<?php
// Get all the schools that are stored in the database.

	include('../includes/db_connect.php'); 
  if ($dbinst) {		
    $stmt = 'delete from sides where side_id = ' . $_REQUEST['side'];
    //print("Set up select statement." . $stmt . "<br />");
    $res = mysql_query($stmt,$dbconn);
  } // End if dbinst
	mysql_close($dbconn); // Close the connection
	$next = 'location: ' . $siteRoot . '/admin/index.php?action=SIDES';
	header($next);

?>