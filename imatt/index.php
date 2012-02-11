<?php 
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'post' ) {
	if ( ! is_user_logged_in() )
		auth_redirect();

	if( !current_user_can( 'publish_posts' ) ) {
		wp_redirect( get_bloginfo( 'url' ) . '/' );
		exit;
	}

	check_admin_referer( 'new-post' );

	$user_id		= $current_user->user_id;
	$post_content	= $_POST['posttext'];
	$tags			= $_POST['tags'];
	$facebook		= $_POST['facebook'];
	$twitter		= $_POST['twitter'];
	
	if( $facebook == 'yes' && $twitter == 'yes' ) {
		$category	= array('49','50');
	}
	elseif( $twitter == 'yes') {
		$category	= array('50');
	}
	elseif( $facebook == 'yes') {
		$category	= array('49');
	}
	

	$char_limit		= 40;
	$post_title		= strip_tags( $post_content );
	if( strlen( $post_title ) > $char_limit ) {
		$post_title = substr( $post_title, 0, $char_limit ) . ' ... ';
	}

	$post_id = wp_insert_post( array(
		'post_author'	=> $user_id,
		'post_title'	=> $post_title,
		'post_content'	=> $post_content,
		'tags_input'	=> $tags,
		'post_status'	=> 'publish',
		'post_category'	=> $category
	) );

	wp_redirect( get_bloginfo( 'url' ) . '/' );
	exit;
}
?>
<?php get_header( ); ?>
<?php if( current_user_can( 'publish_posts' ) ) : ?>
<div id="wrapper" class="fix" >
	<div id="container" class="fix">
		<div id="maincontent">
		<?php require_once dirname( __FILE__ ) . '/post-form.php'; ?>
		</div>
	</div>
</div>
<?php endif; ?>
	


<div id="container" class="fix">
<div id="maincontent">
	<div id="content">

		<?php if( have_posts( ) ) : ?>
			<?php while( have_posts( ) ) : the_post( ) ?>
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
				</div><!-- End postwrap -->
	<div class="tags"></div>
	<div class="clear"></div>
			<?php endwhile; ?> 
		<?php endif; ?>
	</div>



	

	
</div> <!-- // main -->

<?php get_footer( ); ?>
