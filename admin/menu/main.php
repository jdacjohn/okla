<?php 
	include("./header.php");
	$monthArray = array();
	$monthArray[1] = 'January';
	$monthArray[2] = 'February';
	$monthArray[3] = 'March';
	$monthArray[4] = 'April';
	$monthArray[5] = 'May';
	$monthArray[6] = 'June';
	$monthArray[7] = 'July';
	$monthArray[8] = 'August';
	$monthArray[9] = 'September';
	$monthArray[10] = 'October';
	$monthArray[11] = 'November';
	$monthArray[12] = 'December';
	
//	for ($i = 1; $i <= 12; $i++) {
//		print('Month: ' . $monthArray[$i] . '<br />');
//	}
	$today = getdate();
	if ($_REQUEST['month']) {
		$month = $monthArray[$_REQUEST['month']];
		$monthNo = $_REQUEST['month'];
		$year = $_REQUEST['year'];
	} else {
		$month = $today['month'];
		$monthNo = $today['mon'];
		$year = $today['year'];
	}
	
	$numDays = cal_days_in_month(CAL_GREGORIAN, $monthNo, $year);
	
//	print("Number of days in the month: " . $numDays . "<br />");
		
	
?>

<div id="Page"> <!--980px-->


<h1>Edit Menus</h1>

<div id="DeliveryAdmin">


<div id="DeliveryIcons">

<a href=""><img src="./images/printerIcon.jpg" width="40" height="40" title="Print" alt="Print"></a>
</div>

<!--<div id="DeliverySort">
<select>
<option value="">-Select School-</option>
<option value="">Rainbow Montessori</option>
<option value="">Sunland Pre-School</option>
<option value="">First Steps</option>
</select>
</div> -->


<?php
	$monthPlus = $monthNo + 1;
	$yearPlus = $year;
	$monthMinus = $monthNo - 1;
	$yearMinus = $year;
	if ($monthPlus > 12) {
		$monthPlus = 1;
		$yearPlus = $year + 1;
	}
	if ($monthMinus < 1) {
		$monthMinus = 12;
		$yearMinus = $year - 1;
	}
	print('<div id="MenuDate">');
	print('<a href="' . $siteRoot . '/admin/index.php?action=MENUS&month=' . $monthMinus . '&year=' . $yearMinus . '"><img src="./images/DateLeftArrow.png" width="15" height="17" alt="DateLeftArrow"></a>');
	print(' ' . $month . ' ' . $year );
	print('<a href="' . $siteRoot . '/admin/index.php?action=MENUS&month=' . $monthPlus . '&year=' . $yearPlus . '"><img src="./images/DateRightArrow.png" width="15" height="17" alt="DateRightArrow" style="margin-left: 5px;"></a>');
?>





</div><!--End Delivery Admin-->

<?php
//	print("Number of rows required for calendar: " . $rows . '<br />');
	// How many weekdays?
	$weekdays = 0;
	for ($i = 1; $i <= $numDays; $i++) {
		$calDate = getdate(mktime(0,0,0,$monthNo,$i,$year));
		$calDay = $calDate['weekday'];
		//print('Day = ' . $i . ' Week Day = ' . $calDay . '<br />');
		if ($calDay != 'Saturday' && $calDay != 'Sunday') {
			$weekdays += 1;
		}
	}
//	print('Number of weekdays = ' . $weekdays . '<br />');
	if (($weekdays % 5) == 0) {
		$rows = $weekdays / 5;
	} else {
		$rows = intval($weekdays / 5) + 1;
	}
//	print('Number of rows required for month: ' . $rows . '<br />');

	

?>


<table border="1" cellspacing="10" id="MenuTable">
<tr class="dTableHeader">
<td valign="top" width="20%">MONDAY</td>
<td valign="top" width="20%">TUESDAY</td>
<td valign="top" width="20%">WEDNESDAY</td>
<td valign="top" width="20%">THURSDAY</td>
<td valign="top" width="20%">FRIDAY</td>
</tr>

<?php
	$week = 0;
	$offset = 0;
	$weekdays = array();
	$weekdays[1] = 'Monday';
	$weekdays[2] = 'Tuesday';
	$weekdays[3] = 'Wednesday';
	$weekdays[4] = 'Thursday';
	$weekdays[5] = 'Friday';
	$weekdays[6] = 'Saturday';
	$weekdays[7] = 'Sunday';
	$weekPos = array();
	$weekPos['Monday'] = 1;
	$weekPos['Tuesday'] = 2;
	$weekPos['Wednesday'] = 3;
	$weekPos['Thursday'] = 4;
	$weekPos['Friday'] = 5;
	$weekPos['Saturday'] = 6;
	$weekPos['Sunday'] = 7;
	// Initialize some vars for the main loop
	$rowNum = 1;
	$calDate = getdate(mktime(0,0,0,$monthNo,1,$year));
	$calDay = $calDate['weekday'];
	$startPos = $weekPos[$calDay];
	$menuStartDay = 1;
	$offset = 0;
//	print('Month starts on ' . $calDay . ' startPos = ' . $startPos . '<br />');
	if ($startPos > 5) {
		for ($i = $startPos; $i <= 7; $i++) {
			$menuStartDay += 1;
		}
	} else {
		$offset = $startPos - 1;
	}
	$menuDay = $menuStartDay;
	
//	print('Menu starting offset = ' . $offset . '<br />');
//	print('Monthly Menu starts on day: ' . $menuStartDay . '<br />');
	
	// Get the first row printed
	print('<tr class="oddRow">');
	for ($cellPos = 1; $cellPos <= $offset; $cellPos++) {
		print('<td valign="top"></td>');
	}
	for ($cellPos = $offset + 1; $cellPos <= 5; $cellPos++) {
		include('./menu/getMenuForDayNMonth.php');
		if ($res) {
			$resRow = mysql_fetch_array($res);
			print('<td valign="top"><a href="#" style="text-decoration: none;">' . $menuDay . '<span>' . $resRow['lunch_desc'] . '</span></a></td>');
		} else {
			print('<td valign="top">' . $menuDay . ' <span>&nbsp;</span></td>');
		}
		$menuDay += 1;
	}
	print('</tr>');
	$menuDay += 2;
	
	for ($i = 2; $i <= $rows; $i++) {
		if (($i % 2) == 0) {
			print('<tr class="evenRow">');
		} else {
			print('<tr class="oddRow">');
		}
		
		for ($cellPos = 1; $cellPos <= 5; $cellPos++) {
			//print("Month Day = " . $day . '<br />');
			$calDate = getdate(mktime(0,0,0,$monthNo,$menuDay,$year));
			$calDay = $calDate['weekday'];
			if ($menuDay <= $numDays) {
				include('./menu/getMenuForDayNMonth.php');
				if ($res) {
					$resRow = mysql_fetch_array($res);
					print('<td valign="top"><a href="#" style="text-decoration: none;">' . $menuDay . ' <span>' . $resRow['lunch_desc'] . '</span></a></td>');
				} else {
					print('<td valign="top">' . $menuDay . ' <span>&nbsp;</span></td>');
				}
				$menuDay += 1;
			} else {
				print('<td valign="top"></td>');
			}
		}
		$menuDay += 2;
		print('</tr>');
		
	}
?>
</table>
<!--End Delivery Table-->

<div id="MenuSubmit"><input type="image" src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/Update-Btn.png" class="SubmitButton" Value="UPDATE MENU"></div>

</div><!--Page-->
