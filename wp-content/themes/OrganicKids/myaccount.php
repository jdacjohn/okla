<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
* Full Content Template
*
Template Name: My Account
*
* @file myaccount.php
* @package OrganicKids
* @author Goddess Design
* @copyright 2003 - 2011 ThemeID
* @license license.txt
* @version Release: 1.0
* @filesource wp-content/themes/OrganicKids/myaccount.php
* @link http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
* @since available since Release 1.0
*/

get_header(); ?>


<script type="text/javascript">
	$(document).ready(function() {

		/*
		*   Examples - various
		*/

		$("#DeleteChild").fancybox({
			'titlePosition'		: 'inside',
			'transitionIn'		: 'none',
			'transitionOut'		: 'none'
		});

		
	});
</script>

<style>
	
	#DeleteWarning { 
	width: 500px; border: 2px solid #0ba14b; line-height: 30px; padding: 20px; }
	
	#DeleteWarning tr td { font-family: 'Roboto Condensed', Helvetica, sans-serif; color: #582f1c; font-size: 30px; 
	 line-height: 30px; 	}
	
	#DeleteWarning table { border: none !important;}

</style>
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
<tr><td valign="top" width="75"><strong>Name:</strong></td><td valign="top">Stephanie Taglianetti</td></tr>
<tr><td valign="top"><strong>Address:</strong></td><td valign="top"> 3800 Foothill Blvd. Ste. B</td></tr>
<tr><td valign="top"><strong>City:</strong></td><td valign="top">La Crescenta</tr>
<tr><td valign="top"><strong>State:</strong></td><td valign="top">CA</td></tr>
<tr><td valign="top"><strong>Zip:</strong></td><td valign="top">91214</td></tr>
<tr><td valign="top"><strong>Phone:</strong></td><td valign="top">(818) 957-5800</td></tr>
<tr><td valign="top"><strong>E-mail:</strong></td><td valign="top">steph@goddessdesignonline.com</td></tr>
</table>

<h2>Account Login</h2>
<table><tr><td valign="top" width="75"><strong>Username:</strong></td><td valign="top">StephTag</td></tr>
<tr><td valign="top"><strong>Password:</strong></td><td valign="top">*********</td></tr>


</table>
</div><!--End Left Col-->

<div id="CreateAccountRight">



<h2>Child(ren) / Teacher</h2>

<!--Child 1-->
<table> <tr><td valign="top" width="65"><strong>Name:</strong></td><td valign="top" width="150"> Emma Taglianetti</td><td valign="top" width="200"><a id="DeleteChild" href="#DeleteWarning"><img src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/Delete-Button.png" width="26" height="26" alt="">&nbsp;Delete Child/Teacher</a></td></tr>
<tr><td valign="top"><strong>School:</strong></td><td valign="top">First Steps</td></tr>
<tr><td valign="top"><strong>Room #:</strong></td><td valign="top">3</td></tr>
<tr><td valign="top"><strong>Food Allergies:</strong></td><td valign="top">none</td></tr></table>

<!--Child 2-->
<table> <tr><td valign="top" width="65"><strong>Name:</strong></td><td valign="top" width="150">Michael Taglianetti</td><td valign="top" width="200"><a id="DeleteChild" href="#DeleteWarning"><img src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/Delete-Button.png" width="26" height="26" alt="">&nbsp;Delete Child/Teacher</a></td></tr>
<tr><td valign="top"><strong>School:</strong></td><td valign="top">First Steps</td></tr>
<tr><td valign="top"><strong>Room #:</strong></td><td valign="top">4</td></tr>
<tr><td valign="top"><strong>Food Allergies:</strong></td><td valign="top">Milk, Eggs and Soy</td></tr>
</table>


<h2>Lunch Credits</h2>
<table> <tr><td valign="top" width="150"><strong>Total Lunch Credits:</strong></td><td valign="top">$60.00</td></tr>
</table>

<a href="http://organickidsla.com/order-page"><img src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/Buy-More-Lunches-Btn.png" width="285" height="42" alt="Buy More Lunches Btn"></a>
</div><!--End Right Col-->

<div id="CreateSubmit"><input type="image" style="width: 87px !important; height: 38px !important; border: none !important" src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/Edit-Btn.png">
</form></div>
</div><!-- end of .post-entry -->


<div style="display: none;">
	<div id="DeleteWarning" align="center">
	<table>	<tr><td valign="top"><img src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/ErrorGraphic.png" width="29" height="29" alt="Alert" align="left"></td><td valign="top">Are you sure you want to want to remove the child / teacher from your account?</td></tr></table>
	<input type="image" src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/Yes-Remove-Btn.png" id="YesRemove"></input><input type="image" src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/No-Cancel-Btn.png" id="NoCancel"></input>
	</div><!--Delete Warning-->
</div>

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
