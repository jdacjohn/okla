<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
* Full Content Template
*
Template Name: Edit Account
*
* @file edit-account.php
* @package OrganicKids
* @author Goddess Design
* @copyright 2003 - 2011 ThemeID
* @license license.txt
* @version Release: 1.0
* @filesource wp-content/themes/OrganicKids/edit-account.php
* @link http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
* @since available since Release 1.0
*/

get_header(); ?>

<div id="content-full" class="grid col-940">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>



<?php responsive_entry_before(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php responsive_entry_top(); ?>

<h1 class="post-title"><?php the_title(); ?></h1>

<div class="post-entry">

<?php the_content(__('Read more &#8250;', 'responsive')); ?>
<?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>



<div id="CreateAccountLeft">
<form><h2>Personal Information</h2>
<table>
<tr><td valign="top" width="75">Name:</td><td valign="top"><input name="Name" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="Stephanie Taglianetti" class="GeneralFormStyle"/></td></tr>
<tr><td valign="top">Address:</td><td valign="top"> <input name="Address" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="3800 Foothill Blvd. " class="GeneralFormStyle"/></td></tr>
<tr><td valign="top">City:</td><td valign="top"> <input name="City" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="La Crescenta" class="GeneralFormStyle"/></td></tr>
<tr><td valign="top">State:</td><td valign="top"> <select name="state">
<option value="">-choose a state-</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
</select></td></tr>
<tr><td valign="top">Zip:</td><td valign="top"><input name="Zip" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="91214" class="GeneralFormStyle"/></td></tr>
<tr><td valign="top">Phone:</td><td valign="top"> <input name="Phone" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="8189575800" class="GeneralFormStyle"/></td></tr>
<tr><td valign="top">E-mail:</td><td valign="top"> <input name="Email" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="steph@goddessdesignonline.com" class="GeneralFormStyle"/></td></tr>
</table>

<h2>Account Login</h2>
<table><tr><td valign="top" width="75">Username:</td><td valign="top"> <input name="Username" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="GoddessDesign" class="GeneralFormStyle"/></td></tr>
<tr><td valign="top">Reset Password:</td><td valign="top"> <input name="Password" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="*******" class="GeneralFormStyle"/></td></tr>
<tr><td valign="top">Confirm Password:</td><td valign="top"> <input name="ConfirmPassword" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="*******" class="GeneralFormStyle"/><br/>
</td></tr>

</table>
</div><!--End Left Col-->

<div id="CreateAccountRight"><h2>Child(ren) / Teacher</h2>
	
<!--Child 1-->
<fieldset><legend>Child / Teacher 1</legend><table> <tr><td valign="top" width="75">Name:</td><td valign="top"> <input name="Child1Name" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="Emma Taglianetti" class="GeneralFormStyle"/></td></tr>
<tr><td valign="top">School:</td><td valign="top"> <input name="Child1School" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="First Steps" class="GeneralFormStyle"/></td></tr>
<tr><td valign="top">Room #:</td><td valign="top"> <input name="Child1Room" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="202" class="GeneralFormStyle"/></td></tr>
<tr><td valign="top">Food Allergies:</td><td valign="top"> <input name="Child1Allergies" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="eggs" class="GeneralFormStyle"/><br/><small>*leave blank if no food allergies</small></td>
</tr>

</table></fieldset>

<!--Child 2-->
<fieldset><legend>Child 2</legend><table> <tr><td valign="top" width="75">Name:</td><td valign="top"> <input name="Child2Name" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="Michael Taglianetti" class="GeneralFormStyle"/></td></tr>
<tr><td valign="top">School:</td><td valign="top"> <input name="Child2School" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="First Steps" class="GeneralFormStyle"/></td></tr>
<tr><td valign="top">Room #:</td><td valign="top"> <input name="Child2Room" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="101" class="GeneralFormStyle"/></td></tr>
<tr><td valign="top">Food Allergies:</td><td valign="top"> <input name="Child2Allergies" type="text" onFocus="if(this.value==this.defaultValue)this.value='';"
onblur="if(this.value=='')this.value=this.defaultValue;" value="none" class="GeneralFormStyle"/><br/><small>*leave blank if no food allergies</small></td>
</tr>
</table></fieldset>

<a href=""><img src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/AddChild-Btn.png" width="228" height="26" alt="Add Another Child"></a>
</div><!--End Right Col-->

<div id="CreateSubmit"><input type="image" style="width: 135px !important; height: 38px !important; border: none !important" src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/Update-Btn.png">
</form></div>
</div><!-- end of .post-entry -->

<?php get_template_part( 'post-data' ); ?>

<?php responsive_entry_bottom(); ?>
</div><!-- end of #post-<?php the_ID(); ?> -->
<?php responsive_entry_after(); ?>

<?php responsive_comments_before(); ?>

<?php responsive_comments_after(); ?>

<?php
endwhile;

get_template_part( 'loop-nav' );

else :

get_template_part( 'loop-no-posts' );

endif;
?>

</div><!-- end of #content-full -->

<?php get_footer(); ?>
