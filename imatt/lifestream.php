<?php /*
Template Name: SIMILE Timeline Lifestream
*/ ?>

<?php get_header(); ?>

<div id="container" class="fix">
	<?php if( have_posts( ) ) : ?> 
		<?php while( have_posts( ) ) : ?>
			<?php
			the_post( );
			the_content( __( '(More ...)' ) );
			?> 
		<?php endwhile; ?>
	<?php endif; ?>
</div>
<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Flakm.us%2Fbookit%2Flifestream&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
