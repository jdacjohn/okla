<? include("./header.php");?>
<div id="Page"> <!--980px-->



<h1>Edit Sides</h1>

<div id="DeliveryAdmin">


<div id="DeliveryIcons">
<a href=""><img src="./images/printerIcon.jpg" width="40" height="40" title="Print" alt="Print"></a>
</div>



<div id="MenuDate"><a href=""><img src="./images/DateLeftArrow.png" width="15" height="17" alt="DateLeftArrow"></a>
MAY 2013<a href=""><img src="./images/DateRightArrow.png" width="15" height="17" alt="DateLeftArrow" style="margin-left: 5px;"></a></div>




</div><!--End Delivery Admin-->

<?php include('./sides/getSides.php'); ?>

<div id="currentSides">
<ol>
<?php
	if ($res) {
		$numSides = mysql_num_rows($res);
		$listMax = intval($numSides / 3);
		$count = 1;
		//print('Number of sides = ' . $numSides . '<br />');
		//print('List size per column = ' . $listMax . '<br />');
		print('<div class="doublecolList">');
		while (($side = mysql_fetch_array($res)) && $count < ($listMax + 1)) {
			print('<li><span>' . $side['side'] . '</span><a href="' . $siteRoot . '/admin/index.php?action=DEL_SIDES&side=' . $side['side_id'] . '">Remove</a></li>');
			$count += 1;
		}
		print('</div>');
		print('<div class="doublecolList">');
		while (($side = mysql_fetch_array($res)) && $count < (($listMax * 2) + 1)) {
			print('<li><span>' . $side['side'] . '</span><a href="' . $siteRoot . '/admin/index.php?action=DEL_SIDES&side=' . $side['side_id'] . '">Remove</a></li>');
			$count += 1;
		}
		print('</div>');
		print('<div class="doublecolList">');
		while (($side = mysql_fetch_array($res)) && $count < ($numSides + 1)) {
			print('<li><span>' . $side['side'] . '</span><a href="' . $siteRoot . '/admin/index.php?action=DEL_SIDES&side=' . $side['side_id'] . '">Remove</a></li>');
			$count += 1;
		}
		print('</div>');
	}
?>
</ol>
</div>

<div id="addNewSide">
	<h2>Add New Side</h2>
<form name="sideForm" method="post" action="<?php print($siteRoot . '/admin/index.php?action=ADD_SIDES'); ?>">	
	<input type="text" name="side" id="side" class="GeneralFormStyle" onFocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" value="-type new side here-"><br/><br/>
	<input type="image" src="./images/Add_Btn.png" value="ADD" class="SubmitButton"></form>
</div>


</div><!--Page-->


