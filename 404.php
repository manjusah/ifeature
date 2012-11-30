<?php
/**
 * 404 Template
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */
 
get_header(); ?>

<?php do_action( 'cyberchimps_before_container'); ?>

<div id="container" <?php cyberchimps_filter_container_class(); ?>>
	
	<?php do_action( 'cyberchimps_before_content_container'); ?>
	
	<div id="content" <?php cyberchimps_filter_content_class(); ?>>
			
		<?php do_action( 'cyberchimps_before_content'); ?>

		<article id="post-0" class="post error404 not-found">
			<header class="entry-header">
				<h2 class="entry-title">
					<?php if( cyberchimps_option( 'error_custom_title' ) != '' ): ?>
          <?php echo cyberchimps_option( 'error_custom_title' ); ?>
          <?php else: ?>
					<?php _e( 'Oops! That page can&rsquo;t be found.', 'cyberchimps' ); ?></h2>
          <?php endif; ?>
			</header>

			<div class="entry-content">
      	<?php if( cyberchimps_option( 'error_custom_content' ) != '' ): ?>
        	<p><?php echo cyberchimps_option( 'error_custom_content' ); ?></p>
        <?php else: ?>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try searching for it?', 'cyberchimps' ); ?></p>
				<?php endif; ?>
				<?php get_search_form(); ?>

			</div><!-- .entry-content -->
		</article><!-- #post-0 -->
		
		<?php do_action( 'cyberchimps_after_content'); ?>
		
	</div><!-- #content -->
	
	<?php do_action( 'cyberchimps_after_content_container'); ?>
	
</div><!-- #container .row-fluid-->

<?php do_action( 'cyberchimps_after_container'); ?>

<?php get_footer(); ?>