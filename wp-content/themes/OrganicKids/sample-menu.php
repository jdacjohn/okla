<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Full Content Template
 *
   Template Name:  Sample Menu
 *
 * @file           sample-menu.php
 * @package        OrganicKids
 * @author         Goddess Design
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/OrganicKids/sample-menu.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>





	


<div id="content-full" class="grid col-940">
        


               <h1 class="post-title"><?php the_title(); ?></h1>
                
             
            <div id="MenuLeftCol">
            	<div id="MenuInstructions">Each day you can choose between the daily Chef's Special (shown on calendar) or pick four sides for a Bento Box Lunch (shown on the right).</div>
			
				<div id="MenuDate">MAY 2013</div>
            

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

	<td valign="top">1. <span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">2.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">3.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">4.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">5.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	</tr>
	<tr class="evenRow">

	<td valign="top">8.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">9.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">10.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">11.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">12.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>

	</tr>
	<tr class="oddRow">
	<td valign="top">15.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">16.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">17.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">18.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">19.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>

	</tr>
	<tr class="evenRow">

	<td valign="top">22.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">23.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">24.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">25.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">26.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>

	</tr>

	<tr class="oddRow">
	<td valign="top">29.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">30.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top">31.<span>Groovy grape lunch chicken breast, rice, apple sauce</span></td>
	<td valign="top"></td>
	<td valign="top"></td>

	</tr>
	</table>
	
</div><!--End Monthly Calendar-->
</div><!--End Menu Left Col-->

<div id="MenuRightCol">

<h2>Bento Box Sides</h2>

<div id="SampleMenuSides">	<ul><li>Turkey &amp; Cheese</li>
	<li>Turkey &amp; Avocado</li>
	<li>Avocado &amp; Hummus</li>
	<li>Salami &amp; Butter</li></ul></div>
	
</div><!--End Right Column-->

</div><!-- end of #content-full -->

<?php get_footer(); ?>
