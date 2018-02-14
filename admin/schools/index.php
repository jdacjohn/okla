<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Organic Kids LA - Admin | Schools</title>
<meta name="generator" content="TextMate http://macromates.com/">
<meta name="author" content="Goddess Design">
<!-- Date: 2013-05-09 -->
<LINK REL=StyleSheet HREF="../css/global.css" TYPE="text/css" MEDIA=screen>
	<meta name="viewport" content="width=device-width; initial-scale=1.0;">
</head>
<body>

<div id="Container"><!--1024px-->
	
<? include("../header.php");?>

<div id="Page"> <!--980px-->



<h1>Schools</h1>

 <div id="CurrentSchools">
<h2>Current Schools</h2>

<div class="School">
<a href="school/Pennsylvania-Ave-Montessori"><h3 class="Expanded">Pennsylvania Ave. Montessori</h3></a>
<table>

<tr><td valign="top" class="bold"><strong>Address:</strong></td> <td valign="top">100 Pennsylvania Ave. La Crescenta, CA 91214</td> </tr>
<tr><td valign="top" class="bold"><strong>Phone:</strong></td> <td valign="top">(818) 555-5555</td></tr>
<tr><td valign="top" class="bold"><strong>Email:</strong></td> <td valign="top"><a href="mailto:info@pennsylvaniaschool.com">info@pennsylvaniaschool.com</a></td></tr>
<tr><td valign="top" class="bold"><strong>Contact Person:</strong></td> <td valign="top">Rema Hanna</td></tr>
<tr><td valign="top" class="bold"><strong>Notes:</strong></td> <td valign="top">Deliver food through service entrance.</td></tr>

</table>
</div><!--End School-->

<div class="School">
<a href="school/First-Steps"><h3 class="Collapsed">First Steps</h3></a>
</div>

<div class="School">
<a href="school/Sunland-Pre-School"><h3 class="Collapsed">Sunland Pre-School</h3></a>
</div>

</div><!--End Current Schools-->
<div id="AddSchool">
<h2>Add New School</h2>

<form id="AddSchoolForm">
<p> <input name="SchoolName" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onBlur="if(this.value=='')this.value=this.defaultValue;" value="School Name" class="GeneralFormStyle"/></p>

<p> <input name="Address" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="Address" class="GeneralFormStyle"/></p>
<p> <input name="City" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="City" class="GeneralFormStyle"/></p>

<p> <input name="State" style="float: left; width: 60%; margin-right: 10px;" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="State" class="GeneralFormStyle"/>

<input name="Zip" style="float: right; width: 30%;" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="Zip" class="GeneralFormStyle"/></p>

<p> <input name="Phone" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="Phone" class="GeneralFormStyle"/></p>

<p> <input name="Email" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="Email" class="GeneralFormStyle"/></p>

<p> <input name="ContactPerson" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="Contact Person" class="GeneralFormStyle"/></p>

<p><textarea>Notes:</textarea></p>
<br/><br/>
<center><input type="image" src="../images/AddSchool_Btn.png" class="SubmitButton" Value="ADD SCHOOL"></center>
</div>
</div><!--Page-->


</div><!--Container-->
<div id="footer">

</div>
</body>
</html>
