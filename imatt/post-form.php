<?php
$user			= get_userdata( $current_user->ID );
$first_name		= attribute_escape( $user->first_name );
?>

<div class="postwrap commentswrap">	
<div class="hentry">		
	<div class="copy"> 
		<div id="respond">

			<form id="new_post" name="new_post" method="post" action="<?php bloginfo( 'url' ); ?>/">
				<input type="hidden" name="action" value="post" />
				<?php wp_nonce_field( 'new-post' ); ?>

				<label for="posttext">Hi, <?php echo $first_name; ?>. Whatcha up to?</label>
				<div style="height:25px">
					<div id="barbox">
						<div id="progressbar"></div>
					</div>
					<div id="count">0</div>
				</div>
				<textarea name="posttext" id="posttext" rows="3" cols="60"></textarea>
			
				<label for="tags">Tag it</label>
				<input type="text" name="tags" id="tags" autocomplete="off" />
				<input type="checkbox" name="facebook" value="yes" />
				<img alt='' src='<?php echo get_bloginfo('template_directory') . '/images/col_fb_ico.gif';?>' />			
				<input type="checkbox" name="twitter" value="yes" />
				<img alt='' src='<?php echo get_bloginfo('template_directory') . '/images/col_twitter_ico.gif';?>' />
				<input id="submit" type="submit" value="Post it" />
			</form>
		</div><!-- End respond -->
	</div><!-- End copy -->
</div><!-- End hentry -->
</div><!-- End postwrap commentswrap -->

