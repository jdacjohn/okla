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
    $stmt = 'select a.month_no, a.day_no, a.lunch_id, b.lunch_desc from month_menu a, lunch b where month_no = ' . $monthNo .
			' and day_no = ' . $menuDay . ' and b.lunch_id = a.lunch_id'; 
    //print("Set up select statement." . $stmt . "<br />");
    $res = mysql_query($stmt,$dbconn);
  } // End if dbinst
	mysql_close($dbconn); // Close the connection

?>