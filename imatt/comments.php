<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', TDOMAIN);?></p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number(__('No Response &#187;', TDOMAIN), __('1 Response &#187;', TDOMAIN), __ngettext('% Response', '% Responses', get_comments_number (),TDOMAIN));?> <?php _e('to &#8220;',TDOMAIN);?><?php the_title(); ?>&#8221;</h3>

	<ol class="commentlist">
	<?php wp_list_comments(); ?>
	</ol>
	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.', TDOMAIN);?></p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<div class="postwrap commentswrap">	
<div class="hentry">		
	<div class="copy"> 

	<div id="respond">

	<h3><?php comment_form_title( __('Leave a Reply', TDOMAIN), __('Leave a Reply to %s', TDOMAIN) ); ?></h3>

	<div class="cancel-comment-reply">
		<small><?php cancel_comment_reply_link(); ?></small>
	</div>

	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p><?php _e('You must be', TDOMAIN);?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e('logged in',TDOMAIN);?></a> <?php _e('to post a comment.', TDOMAIN);?></p>
	<?php else : ?>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment">

		<?php if ( $user_ID ) : ?>

			<p><?php _e('Logged in as', TDOMAIN);?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account', TDOMAIN);?>"><?php _e('Log out &raquo;', TDOMAIN);?></a></p>

		<?php else : ?>

		<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
		<label for="author"><small><?php _e('Name', TDOMAIN);?> <?php if ($req) _e('(required)', TDOMAIN); ?></small></label></p>

		<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
		<label for="email"><small><?php _e('Mail (will not be published)', TDOMAIN);?> <?php if ($req) _e('(required)', TDOMAIN); ?></small></label></p>

		<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
		<label for="url"><small><?php _e('Website', TDOMAIN);?></small></label></p>

		<?php endif; ?>

		<?php if(get_option('show_xhtml')):?>
			<p><small><strong>XHTML:</strong> <?php _e('You can use these tags:', TDOMAIN);?> <code><?php echo allowed_tags(); ?></code></small></p>
		<?php endif;?>

		<p><textarea name="comment" id="comment" cols="40%" rows="10" tabindex="4"></textarea></p>

		<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment', TDOMAIN);?>" />
		<?php comment_id_fields(); ?>
		</p>
		<?php do_action('comment_form', $post->ID); ?>

			</form>
	<?php endif; // If registration required and not logged in ?>

	</div> <!-- End Respond -->
	</div><!-- End copy -->
</div><!-- End hentry -->
</div><!-- End postwrap-commentswrap -->
<?php endif; // if you delete this the sky will fall on your head ?>
