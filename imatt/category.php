<?php get_header(); ?>
<!-- End the general wrapper after header -->
</div><!--/wrapper -->

<!-- Load the masonry library and script -->
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>


<div id="container" class="fix">
    <div id="shakenmaincontent">
        <div id="sort" class="masoned">

            <?php if( have_posts( ) ) : ?>
                <?php while( have_posts( ) ) : the_post( ) ?>   <!-- the Wordpress Loop !-->
                <div class="shakenpostwrap">
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
                        </div><!-- End metabar -->
                    </div><!-- End copy fix -->
                    <?php the_content( __( '(More ...)' ) ); ?>
                    <?php if ( get_post_meta($post->ID, 'image', true) ) : ?>
                        <div id="embeddedmeta"><?php echo get_post_meta($post->ID, 'image', true) ?></div>
                    <?php endif; ?>
                    <div class="hl"></div>
                    <div class="post-footer"></div>
                </div><!-- End shakenpostwrap -->
                <?php endwhile; ?><!-- End the Wordpress Loop -->
            <?php endif; ?>
        </div><!-- End /sort -->
    </div><!-- End shakenmaincontent -->
</div> <!-- End container -->


<?php if ( !is_single() ) : ?>
<div class="page-nav fix">
    <?php posts_nav_link(); ?>
</div><!-- page nav -->
<?php endif; ?>

</div><!--/page -->
</body>
</html>
