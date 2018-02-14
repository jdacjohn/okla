<!-- Submit the login credentials to the database.  If successful, set the session variables that will
     Track the User info for the session. -->
<?php
	print('User ID = ' . $_REQUEST['Username'] . '<br />');
	print('Password = ' . $_REQUEST['Password'] . '<br />');
	
	include('../includes/db_connect.php');
	if ($dbinst) {
		
		$user = mysql_real_escape_string($_REQUEST['Username']);
		print('User after mysql_real_escape_string = ' . $user . '<br />');
		$pass = mysql_real_escape_string($_REQUEST['Password']);
		print('Site Root = ' . $siteRoot . '<br />');

		$stmt = "select * from users where user_name = '" . $user . "' and user_pass = password('" . $pass . "')";
		print($stmt . '<br />');
    $res = mysql_query($stmt,$dbconn);
		if (mysql_num_rows($res) > 0) {
			print('Num rows returned > 0<br />');
			$row = mysql_fetch_array($res);
			// Capture username, userId, accessString to Session
			$_SESSION['user'] = $row['user_name'];
			$_SESSION['uid'] = $row['user_id'];
			$_SESSION['access'] = $row['actionAccess'];
			print('Updated SESSION vars.<br />');
			$next = 'location: ' . $siteRoot . '/admin/index.php?action=' . $adminLanding;
		} else {
			print('No Rows returned<br />');
			$next = 'location: ' . $siteRoot . '/admin/index.php?action=LOGIN_ADM_INVALID';
			//print('Header sent.<br />');
		}
	//session_write_close();
	mysql_close($dbconn);
	header($next);		
	} // End if $dbsinst

?>