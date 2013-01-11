<?php get_sidebar( ); ?>

    <?php if ( !is_single() ) : ?>
        <div class="page-nav fix">
        <?php if(function_exists('wp_pagenavi')) : ?>
            <?php wp_pagenavi(); ?>
        <?php else : ?>
            <span class="previous-entries">
                <?php next_posts_link(__('Older Entries', get_option('posts_per_page'))); ?>
            </span>
            <span class="next-entries">
                <?php previous_posts_link(__('Newer Entries', get_option('posts_per_page'))); ?>
            </span>
        <?php endif; ?>
        </div><!-- page nav -->
    <?php endif; ?>
	</div><!--/wrapper -->
</div><!--/page -->
</body>
</html>
