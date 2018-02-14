<!-- Check the requested action against the user's access string. -->
<?php
	//print('Session User = ' . $_SESSION['user'] . '<br />');
	//print('Session User ID = ' . $_SESSION['uid'] . '<br />');
	//print('Session User Access = ' . $_SESSION['access'] . '<br />');
	
	// First check. User is Logged in.
	if (!$_SESSION['user']) {
		$actionReq = 'LOGIN_ADM';
		$actionMsg = 'It appears you are not logged in. Please login to continue.';
	}

	// Second Check. Expired Session
	if ($_SESSION['user'] && $_SESSION['user'] == '' && $actionReq != 'LOGIN_ADM_SUBMIT' && $actionReq != 'LOGIN_ADM') {
		$actionReq = 'LOGIN_ADM';
		$actionMsg = 'It appears that your session has expired. Please login to continue.';
	}
	
	// Third check.  Is user admin user?
	if ($_SESSION['access'] != '*') {
		$userActions_array = explode(",",trim($_SESSION['access']));
		if(!in_array($row['actionID'],$userActions_array)) {
			$actionReq = 'HOME';
			print('<script language="javascript">');
			print('alert("You do not have access to the requested page. You will be redirected to the Organic Kids LA Home Page.")');
			print('</script>');
		}
	}

?>