<!-- Add a new school to the database. -->
<?php
	
	include('../includes/db_connect.php');
	if ($dbinst) {
		
		$schoolName = mysql_real_escape_string($_REQUEST['SchoolName']);
		$street = mysql_real_escape_string($_REQUEST['Address']);
		$city = mysql_real_escape_string($_REQUEST['City']);
		$state = mysql_real_escape_string($_REQUEST['State']);
		$zip = mysql_real_escape_string($_REQUEST['Zip']);
		$phone = mysql_real_escape_string($_REQUEST['Phone']);
		$email = mysql_real_escape_string($_REQUEST['Email']);
		$contact = mysql_real_escape_string($_REQUEST['ContactPerson']);
		$notes = mysql_real_escape_string($_REQUEST['Notes']);

		$stmt = 'insert into school values(null, "' . $schoolName . '", "' . $street . '", "' . $city . '", "' . $state . '", "' .
			$zip . '", "' . $phone . '", "' . $email . '", "' . $contact . '", "' . $notes . '", "Y")';
    $res = mysql_query($stmt,$dbconn);
			
		$next = 'location: ' . $siteRoot . '/admin/index.php?action=SCHOOLS';
		mysql_close($dbconn);
		print('<script language="javascript">');
		print('alert("New School has been Successfully Changed.")');
		print('</script>');
		header($next);		
	} // End if $dbsinst

?>