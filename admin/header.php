<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Nothing+You+Could+Do|Didact+Gothic|Raleway' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width; initial-scale=1.0;">
<div id="Header">
	<div id="Logo"><a href="http://www.organickidsla.com/admin/"><img src="./images/logo.png" width="131" height="122" alt="Logo"></a></div>
<div id="RightSectionHeader">	<div id="TopNav">
	<div id="Welcome">
  	Welcome Admin!<br/>
    <a href="http://www.organickidsla.com/admin/profile">edit profile</a>&nbsp;|&nbsp;<a href="<?php print($siteRoot . '/admin/index.php?action=LOGOUT'); ?>">logout</a></div>
		<div id="Search"><form><input type="search" id="searchfield" value="search" onFocus="if(this.value==this.defaultValue)this.value='';" 
			  onblur="if(this.value=='')this.value=this.defaultValue;"><input id="searchBtn" type="image" src="./images/SearchBtn.png" value="search"></form></div>
		</div>
		
	<div id="Menu">
		<ul>
			<li><a href="<?php print($siteRoot . '/admin/index.php?action=DELIVERIES'); ?>">VIEW DELIVERIES</a></li>
			<li><a href="<?php print($siteRoot . '/admin/index.php?action=MENUS'); ?>">EDIT MENUS</a></li>
			<li><a href="<?php print($siteRoot . '/admin/index.php?action=SIDES'); ?>">EDIT SIDES</a></li>
			<li><a href="<?php print($siteRoot . '/admin/index.php?action=SCHOOLS'); ?>">VIEW SCHOOLS</a></li>
			<li><a href="<?php print($siteRoot . '/admin/index.php?action=CUSTOMERS'); ?>">VIEW CUSTOMERS</a></li>
		</ul>
	</div>
	</div><!--End Right Section Header-->
</div><!--End Header-->