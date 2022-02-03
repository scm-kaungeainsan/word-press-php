<div id="ttr_sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <h5><?php _e('Categories'); ?></h5>
        <ul> <?php wp_list_cats('sort_column=namonthly'); ?> </ul>
        <h5><?php _e('Archives'); ?></h5>
        <ul> <?php wp_get_archives(); ?> </ul>
        <h5><?php _e('Movie'); ?></h5>
        <?php $args = array('post_type' => 'movies', 'posts_per_page' => 10);
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <ul>
                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </ul>
                        <?php wp_reset_postdata(); ?>
        <?php endwhile;
        endif; ?>

        <h5><?php _e('Product'); ?></h5>
        <?php
        $loop = new WP_Query(array("post_type" => "product", "posts_per_page" => 16, "paged" => $paged));
        if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
        ?>
                        <ul>
                                <?php the_time('Y年m月d日'); ?> <br>
                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </ul>
        <?php endwhile;
        endif; ?>
</div>