<!-- Generate a random temp password for the submitted email address and send to user via email. -->
<?php
	//print('User ID = ' . $_REQUEST['Username'] . '<br />');
	//print('Password = ' . $_REQUEST['Password'] . '<br />');
	
	include('../includes/db_connect.php');
	if ($dbinst) {
		
		$email = mysql_real_escape_string($_REQUEST['email']);
		//print('User after mysql_real_escape_string = ' . $user . '<br />');

		$stmt = "select count(*) as found from users where email = '" . $email . "'";
		//print($stmt . '<br />');
    $res = mysql_query($stmt,$dbconn);
		$row = mysql_fetch_array($res);
		if ($row['found'] == 0) {
			$next = 'location: ' . $siteRoot . '/admin/index.php?action=PW_REQ_INVALID';
		} else {
			// Generate a new temp password.
			include('../includes/password.php');
			$tempPW = generatePassword(9,4);
			print('Random password = ' . $tempPW);
			// Record the password in the database.
			$stmt2 = "update users set pass_reset = 'Y', temp_pass = '" . $tempPW . "' where email = '" . $email . "'";
			$res2 = mysql_query($stmt2,$dbconn);
			// Build an email to send to the user
			$to = $email;
			$subject = 'Organic Kids LA Password Reset';
			$from = 'Organic Kids LA';
			$headers = 'From: ' . $from;
			
			$body = 'Thank you for submitting a request for a password reset from Organic Kids LA.\n\n';
			$body .= 'We have provided a temporary password for your use below.\n\n';
			$body .= 'Your temporary password is ' . $tempPW . '\n\n';
			$body .= 'Please use the following link to access the website to enter a new password.  You will need the temporary password and your login name to reset your password.\n\n';
			$body .= $siteRoot . '/admin/index.php?action=PWD_CHANGE \n\n';
			$body .= 'Thank You,\nOrganic Kids LA.com';
			
			print($body);

			$send = mail($to, $subject, $body, $headers);
			$next = 'location: ' . $siteRoot;
		}
	// session_write_close();
	mysql_close($dbconn);
	header($next);		
	} // End if $dbsinst

?>