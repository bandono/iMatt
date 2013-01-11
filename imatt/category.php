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
                        <div id="embeddedmeta">
                        <?php
                            $max_width = 236;
                            $ratio = 0;
                            $the_param=get_post_meta($post->ID, 'image', true);
                            preg_match('/width="(\d+)"/i', $the_param, $ori_width);
                            preg_match('/height="(\d+)"/i', $the_param, $ori_height);
                            if ((int)$ori_width[1] > $max_width){
                                $ratio = (int)$ori_height[1] / (int)$ori_width[1];
                                $width = $max_width;
                                $height = ceil($max_width*$ratio);
                            }
                            else {
                                $width = $ori_width[1];
                                $height = $ori_height[1];
                            }
                            $width = 'width="' . $width. '"';
                            $height = 'height="' . $height. '"';
                            $the_param = preg_replace('/width="(\d+)"/i', $width, $the_param);
                            $the_param = preg_replace('/height="(\d+)"/i', $height, $the_param);
                            echo $the_param;
                        ?>
                        </div>
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

</div><!--/page -->
</body>
</html>
