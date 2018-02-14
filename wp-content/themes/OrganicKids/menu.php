<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Full Content Template
 *
   Template Name:  Menu
 *
 * @file           menu.php
 * @package        OrganicKids
 * @author         Goddess Design
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/OrganicKids/menu.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>
<script type="text/javascript">
	$(document).ready(function() {

		/*
		*   Examples - various
		*/

		$("#PopUpFirstTime").fancybox({
			'titlePosition'		: 'inside',
			'transitionIn'		: 'none',
			'transitionOut'		: 'none'
		});

		
	});
</script>
<script type="text/javascript">     
$(document).ready(function() {        
    $("#PopUpFirstTime").fancybox().trigger('click');     
});
</script>

<script type="text/javascript">
	$(document).ready(function() {

		/*
		*   Examples - various
		*/

		$("#OrderPopUp").fancybox({
			'titlePosition'		: 'inside',
			'transitionIn'		: 'none',
			'transitionOut'		: 'none'
		});

		
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {

		/*
		*   Examples - various
		*/

		$("#CurrentSidesFB").fancybox({
			'titlePosition'		: 'inside',
			'transitionIn'		: 'none',
			'transitionOut'		: 'none'
		});

		
	});
</script>

	
<script>
    
var sections = {
    'BentoBox': 'section2'
};
    
var selection = function(select) {
    
    for(i in sections)
        document.getElementById(sections[i]).style.display = "none";    

    document.getElementById(sections[select.value]).style.display = "block";
    
}
</script>

<div id="content-full" class="grid col-940">
        


               <h1 class="post-title"><?php the_title(); ?></h1>
                
              <h2>Emma Taglianetti Menu</h2>
            <div id="MenuLeftCol">
            	<div id="MenuInstructions">Tap a square on the calendar to choose your lunch delivery.<br/>
				<a href="#CurrentSidesPopUp" id="CurrentSidesFB">Click here to view current Bento Box Options</a>.</div>
				<div id="MenuDate"><a href=""><img src="http://www.organickidsla.com/admin/images/DateLeftArrow.png" width="15" height="17" alt="DateLeftArrow"></a>
				MAY 2013<a href=""><img src="http://www.organickidsla.com/admin/images/DateRightArrow.png" width="15" height="17" alt="DateLeftArrow" style="margin-left: 5px;"></a></div>
            

<div id="MonthlyCal">
	
	<table border="1" cellspacing="10" id="MenuTable">
	<tr class="dTableHeader">
	<td valign="top">MONDAY</td>
	<td valign="top">TUESDAY</td>
	<td valign="top">WEDNESDAY</td>
	<td valign="top">THURSDAY</td>
	<td valign="top">FRIDAY</td>

	</tr>
	<tr class="oddRow">

	<td valign="top"><a id="OrderPopUp" href="#OrderPage">1. <span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">2.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">3.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">4.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">5.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	</tr>
	<tr class="evenRow">

	<td valign="top"><a id="OrderPopUp" href="#OrderPage">8.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">9.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">10.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">11.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">12.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>

	</tr>
	<tr class="oddRow">
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">15.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">16.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top" class="selected"><a id="OrderPopUp" href="#OrderPage">17.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top" class="selected"><a id="OrderPopUp" href="#OrderPage">18.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top" class="selected"><a id="OrderPopUp" href="#OrderPage">19.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>

	</tr>
	<tr class="evenRow">

	<td valign="top"><a id="OrderPopUp" href="#OrderPage">22.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">23.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">24.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">25.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">26.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>

	</tr>

	<tr class="oddRow">
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">29.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">30.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"><a id="OrderPopUp" href="#OrderPage">31.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></a></td>
	<td valign="top"></td>
	<td valign="top"></td>

	</tr>
	</table>
	
	<!--hidden calendar hover-->
	<div id="ChooseDay">Place lunch order on this day</div>
	<!--END HIDDEN CAL HOVER-->
	
	<!--Pop Up First Timers Box-->
	<div style="display: none;"><div id="PopUpFirstTime"><div id="FirstTimeInfo">
	<h2>We Offer 2 Different Types of Lunch Options</h2>
		
		<div id="LunchOptions">
		<div id="ChefsSpecial"><h3>The Chef's Special</h3>
			(listed on our monthly calendar)</div>
		<div id="OR">OR</div>
		<div id="BentoBox"><h3>Bento Box</h3>(choose 4 items for your lunch out of a list of 40)</div>
		
		<p>in 2 different portion sizes!</p></div>
		<!--End Lunch Options-->
		
		<div id="Ordering">
			<h2>Ordering is as easy as 1-2-3</h2>
			<div id="Number1Small">Click on a calendar date</div>
			<div id="Number2Small">Select your lunch type</div>
			<div id="Number3Small">Select your portion size</div>
		</div><!--End Ordering-->
		
		<div id="Smoothie">
			<div id="SmoothieText"><h2>Thirsty?</h2>Add on a 
			smoothie! 
			Yum!</div>
			<div id="SmoothieImg"><img src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/Menu_Smoothie.jpg" width="121" height="135" alt="Menu Smoothie"></div>
			</div><!--End Smoothie-->


			
	</div><!--End FirstTimeInfo-->
			<div id="DontShowAnyMore"><input type="checkbox" value="Yes">&nbsp;&nbsp;Don’t show this message again</div></div></div>
		<!--End Pop Up First Timers Box-->
</div><!--End Monthly Calendar-->
</div><!--End Menu Left Col-->

<div id="MenuRightCol">
	<div id="LunchProfile"><h2>Lunch Profile</h2>
			<table>
				<tr><td valign="top"><strong>School:</strong></td><td valign="top">First Steps</td></tr>
				<tr><td valign="top"><strong>Room #:</strong></td><td valign="top">202</td></tr>
				<tr><td valign="top"><strong>Food Allergies:</strong></td><td valign="top">Eggs, Soy</td></tr>
				<tr><td valign="top"><strong>Lunch Credits:</strong></td><td valign="top">200</td></tr>
			
			</table>
		
		</div>
	<div id="SelectedDays">
		<H2>Selected Days</H2>
		<div class="DateSelected"><a href=""><h3 class="Expanded">May 17, 2013</h3></a>
			<table>
				<tr><td valign="top"><strong>Lunch:</strong></td><td valign="top">Bento Box</td></tr>
				<tr><td valign="top"><strong>Sides:</strong></td><td valign="top"><ol>
					<li>avocado &amp; cheese </li>
						    <li>hummus &amp; avocado</li> 
					  	    <li>ham &amp; cheese</li> 
						    <li>avocado &amp; cream cheese</li>
				</ol></td></tr>
				<tr><td valign="top"><strong>Size:</strong></td><td valign="top">Large</td></tr>
				<tr><td valign="top"><strong>Smoothie:</strong></td><td valign="top">Yes</td></tr>
			
			</table>
			</div><!--End Date Selected-->
			
			<div class="DateSelected"><a href=""><h3 class="Collapsed">May 18, 2013</h3></a></div><!--End Date Selected-->
				<div class="DateSelected"><a href=""><h3 class="Collapsed">May 19, 2013</h3></a></div><!--End Date Selected-->
	</div><!--End Selected Days-->
</div><!--End Right Column-->


<!--Order Pop-Up-->
<div style="display: none;">
	<div id="OrderPage">
<form>
		<h1>SELECT YOUR LUNCH</h1>
		<div id="OrderDate">May 20, 2013</div>
		<div id="section1">
			
		<div id="LunchType">	<h2>Lunch Type</h2>
		<select  id="choice" onchange="selection(this);">
			<option value="">-choose type of lunch-</option>
			<option value="ChefsSpecial">Chef's Special - Turkey and Cheese</option>
			<option value="BentoBox" >Bento Box</option>
			</select>	</div>
			</div>
			
		<!--Hidden Sides-->
			<div id="section2" style="display: none;">
<div style="float: left; clear: both; ">Please select four items for your Bento Box.</div>
				<ul id="SidesMenu">
					<li><label for="TurkeyCheese"><input type="checkbox" value="TurkeyCheese">&nbsp;&nbsp;Turkey &amp; Cheese</label></li>
					<li><label for="TurkeyAvocado"><input type="checkbox" value="TurkeyAvocado">&nbsp;&nbsp;Turkey &amp; Avocado</label></li>
					<li><label for="AvocadoHummus"><input type="checkbox" value="AvocadoHummus">&nbsp;&nbsp;Avocado &amp; Hummus</label></li>
					<li><label for="SalamiButter"><input type="checkbox" value="SalamiButter">&nbsp;&nbsp;Salami &amp; Butter</label></li>
				</ul>
			</div>	<!--End Hidden Sides-->
		<div id="LunchSize"><h2>Lunch Size</h2>
			<select>
					<option value="">-choose size-</option>
					<option value="Regular">Regular = 6 credits</option>
					<option value="Large">Large = 8 credits</option>
					</select>
			</div>
		<div id="SmoothieOrder"><h2>Smoothie</h2>
			
			<label for="YesSmoothie">Yes! = 1 credit &nbsp;&nbsp;<input type="checkbox" value="YesSmoothie"></label>&nbsp;&nbsp;
			<label for="NoSmoothie">Nope.&nbsp;&nbsp;<input type="checkbox" value="NoSmoothie"></label>
			</div>
			
			<div id="TotalCredits">Total Credits For This Lunch =  7</div>
			
			<div id="PlaceOrderBtn"><input type="image" src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/PlaceOrder_Btn.png"></div>
			</form>
	</div>

</div>
<!--End Order Pop-Up-->

<!--Sides Pop-Up-->
<div style="display: none;">
	<div id="CurrentSidesPopUp">
		<h1>CURRENT BENTO BOX LUNCH SELECTIONS</h1>
			<ul><li>Turkey &amp; Cheese</li>
			<li>Turkey &amp; Avocado</li>
			<li>Avocado &amp; Hummus</li>
			<li>Salami &amp; Butter</li></ul>
	</div>
</div>

<!--End Sides Pop-Up-->     


</div><!-- end of #content-full -->

<?php get_footer(); ?>
