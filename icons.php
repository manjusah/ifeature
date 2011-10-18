<?php
/*
	Section: Icons
	Authors: Trent Lapinski, Tyler Cunningham 
	Description: Creates header icons.
	Version: 2.0	
*/
	$options = get_option('ifeature') ;  
	$facebook		= $options['if_facebook'];
	$hidefacebook   = $options['if_hide_facebook'];
	$twitter		= $options['if_twitter'] ;
	$hidetwitter   = $options['if_hide_twitter'];
	$gplus		= $options['if_gplus'] ;
	$hidegplus   = $options['if_hide_gplus'];
	$flickr		= $options['if_flickr'] ;
	$hideflickr  = $options['if_hide_flickr'];
	$linkedin		= $options['if_linkedin'] ;
	$hidelinkedin   = $options['if_hide_linkedin'];
	$youtube		= $options['if_youtube'];
	$hideyoutube   = $options['if_hide_youtube'];
	$googlemaps		= $options['if_googlemaps'];
	$hidegooglemaps   = $options['if_hide_googlemaps'];
	$email			= $options['if_email'];
	$hideemail   = $options['if_hide_email'];
	$rss			= $options['if_rsslink'] ;
	$hiderss   = $options['if_hide_rss'];

?>

<div class="icons">

	<?php if ($hidefacebook != '1' AND $facebook != '' ):?>
		<a href="<?php echo esc_url( __( $facebook, 'ifeature')); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.png" height=32 width=32 alt="<?php esc_attr_e('Facebook', 'ifeature'); ?>" /></a>
		<?php endif;?>
	<?php if ($hidefacebook != '1' AND $facebook == '' ):?>
		<a href="<?php echo esc_url( __( 'http://facebook.com', 'ifeature' )); ?>/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.png" height=32 width=32 alt="<?php esc_attr_e('Facebook', 'ifeature' ); ?>" /></a>
	<?php endif;?>
	<?php if ($hidetwitter != '1' AND $twitter != '' ):?>
		<a href="<?php echo esc_url( __( $twitter, 'ifeature' )); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/twitter.png" height=32 width=32 alt="<?php esc_attr_e( 'Twitter', 'ifeature' ); ?>" /></a>
	<?php endif;?>
	<?php if ($hidetwitter != '1' AND $twitter == '' ):?>
		<a href="<?php echo esc_url( __( 'http://twitter.com/', 'ifeature' )); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/twitter.png" height=32 width=32 alt="<?php esc_attr_e( 'Twitter' ); ?>" /></a>
	<?php endif;?>
		<?php if ($hidegplus != '1' AND $gplus != '' ):?>
		<a href="<?php echo esc_url( __( $gplus, 'ifeature' )); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/gplus.png" height=32 width=32 alt="<?php esc_attr_e(' Gplus', 'ifeature' ); ?>" /></a>
	<?php endif;?>
	<?php if ($hidegplus != '1' AND $gplus == '' ):?>
		<a href="<?php echo esc_url( __( 'https://plus.google.com/', 'ifeature' )); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/gplus.png" height=32 width=32 alt="<?php esc_attr_e( 'Gplus', 'ifeature' ); ?>" /></a>
	<?php endif;?>
		<?php if ($hideflickr != '1' AND $flickr != '' ):?>
		<a href="<?php echo esc_url( __( $flickr, 'ifeature' )); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/flickr.png" height=32 width=32 alt="<?php esc_attr_e( 'Flickr', 'ifeature' ); ?>" /></a>
	<?php endif;?>
	<?php if ($hideflickr != '1' AND $flickr == '' ):?>
		<a href="<?php echo esc_url( __( 'https://flickr.com/', 'ifeature' )); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/flickr.png" height=32 width=32 alt="<?php esc_attr_e( 'Flickr', 'ifeature' ); ?>" /></a>
	<?php endif;?>
	<?php if ($hidelinkedin != '1' AND $linkedin != '' ):?>
		<a href="<?php echo esc_url( __( $linkedin, 'ifeature' )); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/linkedin.png" height=32 width=32 alt="<?php esc_attr_e( 'LinkedIn', 'ifeature' ); ?>" /></a>
	<?php endif;?>
		<?php if ($hidelinkedin != '1' AND $linkedin == '' ):?>
		<a href="<?php echo esc_url( __( 'http://linkedin.com/', 'ifeature' )); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/linkedin.png" height=32 width=32 alt="<?php esc_attr_e( 'LinkedIn' , 'ifeature' ); ?>" /></a>
	<?php endif;?>
	<?php if ($hideyoutube != '1' AND $youtube != '' ):?>
		<a href="<?php echo esc_url( __( $youtube, 'ifeature' )); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/youtube.png" height=32 width=32 alt="<?php esc_attr_e( 'YouTube' ,'ifeature' ); ?>" /></a>
	<?php endif;?>
	<?php if ($hideyoutube != '1' AND $youtube == '' ):?>
		<a href="<?php echo esc_url( __(' http://youtube.com/', 'ifeature' )); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/youtube.png" height=32 width=32 alt="<?php esc_attr_e( 'YouTube', 'ifeature' ); ?>" /></a>
	<?php endif;?>
	<?php if ($hidegooglemaps != '1' AND $googlemaps != ''):?>
		<a href="<?php echo esc_url( __( $googlemaps, 'ifeature' )); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/googlemaps.png" height=32 width=32 alt="<?php esc_attr_e( 'Google Maps', 'ifeature' ); ?>" /></a>
	<?php endif;?>
	<?php if ($hidegooglemaps != '1' AND $googlemaps == ''):?>
		<a href="http://google.com/maps/"><img src="<?php echo get_template_directory_uri(); ?>/images/social/googlemaps.png" height=32 width=32 alt="Google Maps" /></a>
	<?php endif;?>
	<?php if ($hideemail != '1' AND $email != ''):?>
		<a href="mailto:<?php echo esc_url( __( $email, 'ifeature' )); ?> ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/email.png" height=32 width=32 alt="<?php esc_attr_e( 'E-mail', 'ifeature' ); ?>" /></a>
	<?php endif;?>
		<?php if ($hideemail != '1' AND $email == ''):?>
		<a href="<?php echo esc_url( __( 'mailto:no@way.com', 'ifeature' )); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/email.png" height=32 width=32 alt="<?php esc_attr_e( 'E-mail', 'ifeature' ); ?>" /></a>
	<?php endif;?>
	<?php if ($hiderss != '1' and $rss != '' ):?>
		<a href="<?php echo esc_url( __($rss, 'ifeature' )); ?> ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/rss.png" height=32 width=32 alt="<?php esc_attr_e( 'RSS', 'ifeature' ); ?>" /></a>
	<?php endif;?>
	<?php if ($hiderss != '1' and $rss == ''  ):?>
		<a href="<?php echo esc_url( __(bloginfo('rss2_url'), 'ifeature' )); ?> ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/social/rss.png" height=32 width=32 alt="<?php esc_attr_e( 'RSS', 'ifeature' ); ?>" /></a>
	<?php endif;?>
	
</div>