<?php
// Get the lunch menu for either the current month or the selected month.


	if ($_REQUEST['month']) {
		$month = $_REQUEST['month'];
	} else {
		$today = getdate();
		$month = $today['mon'];
	}
	include('../includes/db_connect.php'); 
  if ($dbinst) {		
    $stmt = 'select month_no, day_no, lunch_id from month_menu where month_no = $month'; 
    //print("Set up select statement." . $stmt . "<br />");
    $res = mysql_query($stmt,$dbconn);
  } // End if dbinst
	mysql_close($dbconn); // Close the connection

?>