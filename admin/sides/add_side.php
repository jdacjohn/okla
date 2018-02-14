<!-- Add a new side to the database. -->
<?php
	
	include('../includes/db_connect.php');
	if ($dbinst) {
		
		$side = mysql_real_escape_string($_REQUEST['side']);

		$stmt = 'insert into sides values(null, "' . $side . '", "Y")';
    $res = mysql_query($stmt,$dbconn);
			
		$next = 'location: ' . $siteRoot . '/admin/index.php?action=SIDES';
		mysql_close($dbconn);
		print('<script language="javascript">');
		print('alert("New Side has been Successfully Changed.")');
		print('</script>');
		header($next);		
	} // End if $dbsinst

?>