<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Full Content Template
 *
   Template Name:  Create Account
 *
 * @file           create-account.php
 * @package        OrganicKids
 * @author         Goddess Design
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/OrganicKids/create-account.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
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
	<tr><td valign="top">Name:</td><td valign="top"><input name="Name"   type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
		  onblur="if(this.value=='')this.value=this.defaultValue;" value="Name"  class="GeneralFormStyle"/></td></tr>
	<tr><td valign="top">Address:</td><td valign="top">	<input name="Address"   type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
			  onblur="if(this.value=='')this.value=this.defaultValue;" value="Address"  class="GeneralFormStyle"/></td></tr>
	<tr><td valign="top">City:</td><td valign="top">		<input name="City"   type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
				  onblur="if(this.value=='')this.value=this.defaultValue;" value="City"  class="GeneralFormStyle"/></td></tr>
	<tr><td valign="top">State:</td><td valign="top"></td></tr>
	<tr><td valign="top">Zip:</td><td valign="top"><input name="Zip"   type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
		  onblur="if(this.value=='')this.value=this.defaultValue;" value="Zip"  class="GeneralFormStyle"/></td></tr>
	<tr><td valign="top">Phone:</td><td valign="top">	<input name="Phone"   type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
			  onblur="if(this.value=='')this.value=this.defaultValue;" value="Phone"  class="GeneralFormStyle"/></td></tr>
	<tr><td valign="top">E-mail:</td><td valign="top">		<input name="Email"   type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
				  onblur="if(this.value=='')this.value=this.defaultValue;" value="Email"  class="GeneralFormStyle"/></td></tr>
</table>

<h2>Account Login</h2>
<table><tr><td valign="top">Username:</td><td valign="top"></td></tr>
<tr><td valign="top">Password:</td><td valign="top"></td></tr>
<tr><td valign="top">Confirm Password:</td><td valign="top"></td></tr></table>
</div><!--End Left Col-->

<div id="CreateAccountRight"><h2>Child(ren) / Teacher</h2>
	<!--Child 1-->
<table>	<tr><td valign="top">Name:</td><td valign="top">	<input name="Child1Name"   type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
			  onblur="if(this.value=='')this.value=this.defaultValue;" value="Child1Name"  class="GeneralFormStyle"/></td></tr>
	<tr><td valign="top">School:</td><td valign="top">		<input name="Child1School"   type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
					  onblur="if(this.value=='')this.value=this.defaultValue;" value="Child1School"  class="GeneralFormStyle"/></td></tr>
	<tr><td valign="top">Room #:</td><td valign="top">				<input name="Child1Room"   type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
							  onblur="if(this.value=='')this.value=this.defaultValue;" value="Child1Room"  class="GeneralFormStyle"/></td></tr></table>
	
								<!--Child 2-->
							<table>	<tr><td valign="top">Name:</td><td valign="top">	<input name="Child2Name"   type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
										  onblur="if(this.value=='')this.value=this.defaultValue;" value="Child2Name"  class="GeneralFormStyle"/></td></tr>
								<tr><td valign="top">School:</td><td valign="top">		<input name="Child2School"   type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
												  onblur="if(this.value=='')this.value=this.defaultValue;" value="Child2School"  class="GeneralFormStyle"/></td></tr>
								<tr><td valign="top">Room #:</td><td valign="top">				<input name="Child2Room"   type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
														  onblur="if(this.value=='')this.value=this.defaultValue;" value="Child2Room"  class="GeneralFormStyle"/></td></tr></table>

<a href=""><img src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/AddChild-Btn.png" width="228" height="26" alt="Add Another Child"></a>
</div>

<div id="CreateSubmit"><input type="image" style="width: 135px !important; height: 38px !important; border: none !important" src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/Create-Btn.png">
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
