<?php get_header( ); ?> 
<div id="container" class="fix">
<div id="maincontent">
	<div id="content">
	<?php 
	if( have_posts( ) ) {
		$first_post = true;

		while( have_posts( ) ) {
			the_post( );

			$email_md5		= md5( get_the_author_email( ) );
			$default_img	= urlencode( 'http://use.perl.org/images/pix.gif' );
	?>

			<div class="postwrap fix">	
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">		
					<div class="copy fix">		
						<div class="metabar">
							<em>
							<!-- <?php the_author_posts_link( ); ?>
							&nbsp;&nbsp; -->
							<?php the_time( ); ?> on <?php the_time( 'F j, Y' ); ?> |
							<?php comments_popup_link( __( '0' ), __( '1' ), __( '%' ) ); ?> |
							<a href="<?php the_permalink( ); ?>">#</a> | 
							<?php edit_post_link( __( 'e' ) ); ?>
							</em>
							<br />
							<?php the_tags( __( 'Tags: ' ), ', ', ' ' ); ?>
						</div>
					</div>					
						<div class="textcontent">
							<?php the_content( __( '(More ...)' ) ); ?>
								<?php if ( get_post_meta($post->ID, 'image', true) ) : ?>
									<?php echo get_post_meta($post->ID, 'image', true) ?>
								<?php endif; ?>							
						</div> <!-- // postcontent -->
											
				</div>
				<div class="hl"></div>
				<div class="post-footer">
					<div class="right">
							<?php if ( in_category('1') ) : ?><img alt='l_ico' src='<?php echo get_bloginfo('template_directory') . '/images/lakmus_icon.gif';?>' /><?php endif; ?>							
							<?php if ( in_category('3') ) : ?><img alt='fb_ico' src='<?php echo get_bloginfo('template_directory') . '/images/facebook_icon.gif';?>' /><?php endif; ?>
							<?php if ( in_category('4') ) : ?><img alt='tw_ico' src='<?php echo get_bloginfo('template_directory') . '/images//twitter_icon.gif';?>' /><?php endif; ?>							
					</div>
				</div>
			</div>
			
	<div class="tags"></div>
	<div class="clear"></div>

	<?php
		comments_template( );

	} // while have_posts
} // if have_posts
?>


<?php get_footer( ); ?>
