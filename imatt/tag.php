<?php 
	get_header( ); 
	$tag_obj = $wp_query->get_queried_object();
?>

<div id="container" class="fix">
<div id="maincontent">
	<div id="content">
	Posts tagged with:  <?php single_tag_title( ); ?> <a class="rss" href="<?php echo get_tag_feed_link( $tag_obj->term_id ); ?>">RSS</a>
	</br>
	
	<?php
		if( have_posts( ) ) {

			$previous_user_id = 0;
			while( have_posts( ) ) {
				the_post( );
	?>

			<div class="postwrap fix">	
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">		
					<div class="copy fix">		
						<div class="metabar">
							<?php if ( in_category('3') ) : ?>
									<img alt='fb' src='<?php echo get_bloginfo('template_directory') . '/facebook_icon.gif';?>' width='11' height='11' />
							<?php endif; ?>
							<?php if ( in_category('4') ) : ?>
									<img alt='tw' src='<?php echo get_bloginfo('template_directory') . '/twitter_icon.gif';?>' width='11' height='11'/>
							<?php endif; ?>
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
					</div> <!-- // postcontent -->
				</div>
			</div>
		<div class="tags"></div>
		<div class="clear"></div>
<?php
	} // while have_posts

} // if have_posts
?>
	</div><!-- // content -->
</div><!-- // main -->
	
<?php get_footer( ); ?>
