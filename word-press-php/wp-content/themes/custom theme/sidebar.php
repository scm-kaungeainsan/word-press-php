<div id="ttr_sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <h5><?php _e('Categories'); ?></h5>
        <ul style="text-transform : capitalize;"> <?php wp_list_cats('sort_column=namonthly'); ?> </ul>
        <h5><?php _e('Archives'); ?></h5>
        <ul> <?php wp_get_archives(); ?> </ul>
        <h5>Recent Posts</h5>
        <?php $args = array('post_type' => 'post', 'posts_per_page' => 10);
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <a href="<?php the_permalink() ?>">
                                <ul class="sidebar-recent-blog">
                                        <div class="featured-img-cover">
                                                <?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
                                        </div>
                                        <div class="sidebar-blog-info"> <?php the_title(); ?>
                                        <br> <?php the_time('Y年m月d日'); ?></div>
                                   

                                </ul>
                        </a>
                        <?php wp_reset_postdata(); ?>
        <?php endwhile;
        endif; ?>

</div>