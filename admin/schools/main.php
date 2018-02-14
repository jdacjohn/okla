
<?php include("./header.php");?>

<div id="Page"> <!--980px-->


<h1>Schools</h1>

<div id="CurrentSchools">
<h2>Current Schools</h2>
<?php 
	include('./schools/getSchools.php'); 
	if ($res) {
		$count = 1;
		while ($schools = mysql_fetch_array($res)) {
			print('<div class="School">');
			$schoolNoBlanks = str_replace(" ", "-", $schools['school_name']);
			$schoolNoBlanks = str_replace('.','',$schoolNoBlanks);
			if ($count == 1) {
				print('<a href="#" class="show_hide" rel="#' . $schoolNoBlanks . '"><h3 class="Expanded">' . $schools['school_name'] . '</h3></a>');
				print('<div id="' . $schoolNoBlanks . '">');
			} else {
				print('<a href="#" class="show_hide" rel="#' . $schoolNoBlanks . '"><h3 class="Collapsed">' . $schools['school_name'] . '</h3></a>');
				print('<div id="' . $schoolNoBlanks . '" style="display: none;">');
			}
			print('<table>');
			print('<tr><td valign="top" class="bold"><strong>Address:</strong></td><td valign="top">' . $schools['street'] . ' ' . $schools['city'] . ' ,' . $schools['state_abbr'] . ' ' . $schools['zip'] . '</td></tr>');
			print('<tr><td valign="top" class="bold"><strong>Phone:</strong></td><td valign="top">' . $schools['phone'] . '</td></tr>');
			print('<tr><td valign="top" class="bold"><strong>Email:</strong></td><td valign="top"><a href="mailto:' . $schools['email'] . '">' . $schools['email'] . '</a></td></tr>');
			print('<tr><td valign="top" class="bold"><strong>Contact Person:</strong></td><td valign="top">' . $schools['contact'] . '</td></tr>');
			print('<tr><td valign="top" class="bold"><strong>Notes:</strong></td><td valign="top">' . $schools['notes'] . '.</td></tr>');
			print('</table></div></div>');
			$count += 1;
		}
	}
?>

</div><!--End Current Schools-->

<div id="AddSchool">
<h2>Add New School</h2>

<form id="AddSchoolForm" method="POST" action="<?php print($siteRoot . '/admin/index.php?action=ADD_SCHOOL'); ?>">
<p> <input name="SchoolName" id="SchoolName" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onBlur="if(this.value=='')this.value=this.defaultValue;" value="School Name" class="GeneralFormStyle"/></p>

<p> <input name="Address" id="Address" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="Address" class="GeneralFormStyle"/></p>

<p> <input name="City" id="City" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="City" class="GeneralFormStyle"/></p>

<p> <input name="State" id="State" style="float: left; width: 60%; margin-right: 10px;" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="State" class="GeneralFormStyle"/>

<input name="Zip" id="Zip" style="float: right; width: 30%;" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="Zip" class="GeneralFormStyle"/></p>

<p> <input name="Phone" id="Phone" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="Phone" class="GeneralFormStyle"/></p>

<p> <input name="Email" id="Email" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="Email" class="GeneralFormStyle"/></p>

<p> <input name="ContactPerson" id="ContactPerson" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="Contact Person" class="GeneralFormStyle"/></p>

<p><textarea id="Notes">Notes:</textarea></p>
<br/><br/>
<center><input type="image" src="./images/AddSchool_Btn.png" class="SubmitButton" Value="ADD SCHOOL"></center>

</div> <!--Add School-->

</div><!--Page-->


