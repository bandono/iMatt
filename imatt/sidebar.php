<div id="sidebar" class="fix">
<?php if( !is_page() && !is_single() ) : ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	<div id="dtags" class="widget_tags widget">
		<div class="winner">
		<h3 class="wtitle"><?php _e('Tags', TDOMAIN);?></h3>
		<ul>
			<?php wp_tag_cloud('smallest=8&largest=17&number=30'); ?>
		</ul>
		</div>
	</div>
	<?php endif; ?>
<?php endif; ?>	
</div> <!-- // sidebar -->
