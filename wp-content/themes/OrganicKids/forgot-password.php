<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Full Content Template
 *
   Template Name:  Forgot Password
 *
 * @file           forgot-password.php
 * @package        OrganicKids
 * @author         Goddess Design
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/OrganicKids/forgot-password.php
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

						<div id="LoginArea">

						<form id="LoginForm">
							<p> <input name="EmailAddress"  type="text" onFocus="if(this.value==this.defaultValue)this.value='';" 
								onBlur="if(this.value=='')this.value=this.defaultValue;" value="Enter Email Address" class="formstyle" /></p>

								

						<center><input type="image" style="width: 135px !important; height: 38px !important; border: none !important" src="http://www.organickidsla.com/wp-content/themes/OrganicKids/images/Submit-Btn.png"><br/>
									</center>
						</form>
						</div>


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
