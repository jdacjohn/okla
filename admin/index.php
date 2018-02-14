<?php session_start(); ?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Organic Kids LA - Admin</title>
	
  <meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Goddess Design">
	<!-- Date: 2013-05-09 -->
	<LINK REL=StyleSheet HREF="css/global.css" TYPE="text/css" MEDIA=screen>
	<meta name="viewport" content="width=device-width; initial-scale=1.0;">
  <script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/showHide.js" type='text/javascript'></script>
  <script src="js/global.js" type="text/javascript"></script>
	
</head>

<body>
<div id="Container"><!--1024px-->

<?php 
	
	include('../includes/head.php');
	include('../application.php'); 
	// Trap the action that will drive the page.
	$action = $_REQUEST['action'];
	if ($action != '') {
		$actionReq = $action;
	} else {
		$actionReq = 'LOGIN_ADM';
	}
	print('actionReq = ' . $actionReq . '<br />');
	
	// Turn off the system here by un-commenting the code below
	// $actionReq = "App_Home_Sys_Down">
	
	// If the id of the requested action is not found in the openActions list, include the security template. 
	// Get the id of the action
	include('../includes/db_connect.php');
  if ($dbinst) {		
    $stmt = 'select actionID from actions where action = "' . $actionReq . '"'; 
    //print("Set up select statement." . $stmt . "<br />");
    $res = mysql_query($stmt,$dbconn);
  } // End if dbinst
	mysql_close($dbconn); // Close the connection
	
	if ($res) {
		//print('$res is defined');
		$row = mysql_fetch_array($res);
		//print('Action ID from DB = ' . $row["actionID"] . '<br />');
		$openActions_array = explode(",",trim($openActions));
		if(!in_array($row['actionID'],$openActions_array)) {
			//print('Access Check against user required.<br />');
  		include('../includes/security.php');
		}
	}
	
	switch($actionReq) {
		
		case 'HOME':
			header('location: ' . $siteRoot);
			break;
		case 'LOGOUT':
			session_destroy();
			header('location: ' . $siteRoot . '/admin/');
			break;
		case 'LOGIN_ADM':
			include('./login.php');
			break;
		case 'LOGIN_ADM_SUBMIT':
			include('./login_submit.php');
			break;
		case 'LOGIN_ADM_INVALID':
			$log_err = 'The username or password you entered is incorrect. Please try again.';
			include('./login.php');
			break;
		case 'LOST_PWD':
			include('./forgot-password/request_temp.php');
			break;
		case 'TMP_PW_REQ':
			include('./forgot-password/submit_temp_req.php');
			break;
		case 'PW_REQ_INVALID':
			$email_err = 'The email address entered could not be found in the system. Please enter a different email address.';
			include('./forgot-password/request_temp.php');
			break;
		case 'PWD_CHANGE':
			include('./forgot-password/change_pwd.php');
			break;
		case 'PWD_CHANGE_INVALID':
			$change_err = 'Please verify your temporary password and login name and re-enter.';
			include('./forgot-password/change_pwd.php');
			break;
		case 'PWD_CHANGE_SUBMIT':
			include('./forgot-password/change_submit.php');
			break;
		case 'DELIVERIES':
			include('./deliveries/index.php');
			break;
		case 'SCHOOLS':
			include('./schools/main.php');
			break;
		case 'ADD_SCHOOL':
			include('./schools/add_school.php');
			break;
		case 'SIDES':
			include('./sides/main.php');
			break;
		case 'DEL_SIDES':
			include('./sides/delete.php');
			break;
		case 'ADD_SIDES':
			include('./sides/add_side.php');
			break;
		case 'MENUS':
			include('./menu/main.php');
			break;
	}
	
?>


</div> <!-- End DIV Container -->
  
<div id="footer"></div>

</body>
</html>
