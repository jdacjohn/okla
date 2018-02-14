<!-- Change the users password if all required data is correct. -->
<?php
	//print('User ID = ' . $_REQUEST['Username'] . '<br />');
	//print('Password = ' . $_REQUEST['Password'] . '<br />');
	
	include('../includes/db_connect.php');
	if ($dbinst) {
		
		$user = mysql_real_escape_string($_REQUEST['user']);
		$tempPW = mysql_real_escape_string($_REQUEST['tempPW']);
		$newPW = mysql_real_escape_string($_REQUEST['newPW']);
		
		//print('User after mysql_real_escape_string = ' . $user . '<br />');

		$stmt = "select count(*) as found, user_level from users where user_name = '" . $user . "' and temp_pass = '" . $tempPW . "'";
		//print($stmt . '<br />');
    $res = mysql_query($stmt,$dbconn);
		$row = mysql_fetch_array($res);
		// user name or temp pass was incorrent
		if ($row['found'] == 0) {
			$next = 'location: ' . $siteRoot . '/admin/index.php?action=PWD_CHANGE_INVALID';
		} else {
			// A match was found.
			// Update the user's password in the database.
			$stmt2 = "update users set pass_reset = 'N', temp_pass = '', user_pass = password('" . $newPW . "') where user_name = '" . $user . "'";
			$res2 = mysql_query($stmt2,$dbconn);
			if ($row['user_level'] == 1) {
				$next = 'location: ' . $siteRoot . '/admin/index.php';
			} else {
				$next = 'location: ' . $siteRoot;
			}
		}
	// session_write_close();
	mysql_close($dbconn);
	print('<script language="javascript">');
	print('alert("Your Password has been Successfully Changed.")');
	print('</script>');
	header($next);		
	} // End if $dbsinst

?>